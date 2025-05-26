<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // sanitise user input for safety :D
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // create sql statement
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    // check user exists and password is correct
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // password is correct, start session and redirect
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            header('Location: addEntry.php');
            exit;
        }
    }
    echo "Invalid email or password.";
}
?>