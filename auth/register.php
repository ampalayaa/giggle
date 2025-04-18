<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $check = $con->prepare("SELECT id FROM users WHERE email = ?");
    
    if ($check) {
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            echo "Email already registered!";
        } else {
            $stmt = $con->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, 'client')");
            if ($stmt) {
                $stmt->bind_param("sss", $name, $email, $password);
                if ($stmt->execute()) {
                    echo "Registration successful!";
                } else {
                    echo "Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $con->error;
            }
        }
        $check->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }
}

?>
