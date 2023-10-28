<?php
session_start();
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "user_info";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['signup-email'];
    $password = $_POST['signup-password'];
    $passwordConfirm = $_POST['signup-password-confirm'];

    if ($password === $passwordConfirm) {
        // Passwords match, continue processing.
        // You can hash the password before storing it in the database for security.
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Check if the user already exists in the database.
        $query = "SELECT * FROM user_data WHERE User_email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $result = $stmt->fetch();

        if ($result) {
            // User already exists. Handle the error (e.g., show a message).

            echo '<script type="text/javascript">alert("This Email account is already in use");  window.location.href = "Creation-page.html";</script>';
            
        } else {
            // User does not exist. Insert the user into the database.
            $insertQuery = "INSERT INTO user_data (User_email, User_password) VALUES (:email, :password)";
            $insertStmt = $conn->prepare($insertQuery);
            $insertStmt->bindParam(":email", $email);
            $insertStmt->bindParam(":password", $hashedPassword);
            $insertStmt->execute();

            // Sign the user in after successful registration (you can use sessions or tokens).
            // Redirect the user to the desired page after sign-in.

            echo "<script type='text/javascript'>localStorage.setItem('userEmail', '${email}');</script>";
            echo '<script type="text/javascript">alert(" Created Successfully");  window.location.href = "index.html";</script>';
        }
    } else {
        // Passwords do not match. Handle the error (e.g., show a message).
        echo '<script type="text/javascript">alert("Passwords do not match"); window.location.href = "Creation-page.html"; </script>';
        $password = ''; // Clear the password field
        $passwordConfirm = ''; // Clear the password confirmation field

    }
}
?>

