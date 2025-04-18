<?php
session_start();
require_once __DIR__ . '/../includes/connect.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /auth/login.php");
    exit;
}

if (!isset($_GET['product_id']) || !is_numeric($_GET['product_id'])) {
    die("Invalid request.");
}

$userId = $_SESSION['user_id'];
$productId = (int) $_GET['product_id'];

// Fetch product, confirm purchase, check limit
$stmt = $pdo->prepare("
    SELECT p.file_path, p.download_limit,
           (SELECT COUNT(*) FROM downloads_log WHERE user_id = :user_id AND product_id = :product_id) as downloads_so_far
    FROM orders_items oi
    JOIN orders o ON oi.order_id = o.id
    JOIN product p ON oi.product_id = p.id
    WHERE o.user_id = :user_id AND oi.product_id = :product_id AND o.payment_status = 'Paid'
");
$stmt->execute([
    ':user_id' => $userId,
    ':product_id' => $productId
]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    die("You are not authorized to download this file.");
}

$downloadsSoFar = (int)$product['downloads_so_far'];
$downloadLimit = (int)$product['download_limit'];

// Check if limit reached
if ($downloadLimit > 0 && $downloadsSoFar >= $downloadLimit) {
    die("Download limit reached for this product.");
}

// Log this download attempt
$logStmt = $pdo->prepare("
    INSERT INTO downloads_log (user_id, product_id) 
    VALUES (:user_id, :product_id)
");
$logStmt->execute([
    ':user_id' => $userId,
    ':product_id' => $productId
]);

// Deliver the file
$file = __DIR__ . '/../downloads/' . $product['file_path'];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    die("File not found.");
}
?>
