<?php
$conn = mysqli_connect("localhost", "root", "", "labratory_medicalrecords");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Check if the email is properly formatted using a regular expression
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Valid email format
        // You can proceed with storing the email in the database or performing other actions.
        
        // For example, you might insert the email into the database
        $query = "INSERT INTO your_table_name (email) VALUES (?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        if (mysqli_stmt_execute($stmt)) {
            // Success: Email inserted into the database
            echo '<p>Success: Email has been inserted into the database.</p>';
        } else {
            // Database insertion error
            echo '<p>Error: An error occurred while inserting the email.</p>';
        }
    } else {
        // Invalid email format
        // Display an error message or redirect back to the form.
        echo '<p>Error: Please enter a valid email address.</p>';
    }
}

