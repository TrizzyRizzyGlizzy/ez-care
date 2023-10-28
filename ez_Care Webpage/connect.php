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



          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
        
                // Prepare a SQL statement to check for a matching user
                $stmt = $conn->prepare("SELECT * FROM user_data WHERE User_email  = :email AND User_password  = :password");
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->execute();
        
                // Check if a user was found
                if ($stmt->rowCount() == 1) {
                    // Fetch user data
                     $user = $stmt->fetch(PDO::FETCH_ASSOC);

                     echo "<script type='text/javascript'>localStorage.setItem('userEmail', '${email}');</script>";

                     
        
                    echo '<script type="text/javascript">alert(" Login Successfully");  window.location.href = "index.html";</script>';

                    
                } else {
                    // User not found or credentials do not match
                    echo '<script type="text/javascript">alert("Invalid email or password.");  window.location.href = "Creation-page.html";</script>';
                   
                }
            }
        }
        



?>
















