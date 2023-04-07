<?php
require "Database.php";
$heading = "Login";

// login.php


// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect to homepage
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location:/");
    exit;
}

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Process submitted form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter your username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Check if username and password are not empty
    if (empty($username_err) && empty($password_err)) {

        // Prepare a select statement
        $db = new Database($config['database']);
        $query = "SELECT id, username, password FROM users WHERE username = :username";

        $stmt = $db->query($query, [':username' => $username]);

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch();
            $id = $row['id'];
            $username = $row['username'];
            $hashed_password = $row['password'];

            // Verify password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, start a new session
                session_start();

                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;

                // Redirect user to homepage
                header("location: homepage.php");
            } else {
                // Display an error message if password is not valid
                $password_err = "The password you entered is not valid.";
            }
        } else {
            // Display an error message if username doesn't exist
            $username_err = "No account found with that username.";
        }
    }
}
require "views/login.view.php";
