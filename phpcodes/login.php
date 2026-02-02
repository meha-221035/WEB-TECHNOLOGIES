<?php
include "chinnu.php";

function loginUser() {
    global $conn;

    $email = $_POST['email'];      // local variable
    $password = $_POST['pass'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed");
    }

    if (mysqli_num_rows($result) > 0) {
        print "Login Successful";
    } else {
        print "Invalid Email or Password";
    }
}

loginUser();
?>