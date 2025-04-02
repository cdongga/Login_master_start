<?php 
require_once('config.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>
</head>
<body>
<div class="container mt-5">
    <form action="" method="post" class="form-signin">
        <h2 class="text-center mb-4">Please sign in</h2>
        
        <!-- Username Field -->
        <div class="mb-3">
            <label for="inputUsername" class="form-label">Username</label>
            <input name="Username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        </div>
        
        <!-- Password Field -->
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        
        <!-- Submit Button -->
        <button name="Submit" value="Login" class="btn btn-primary w-100" type="submit">Sign in</button>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        $username = trim($_POST['Username']);
        $password = trim($_POST['Password']);
        
        if (empty($username) || empty($password)) {
            echo '<div class="alert alert-danger mt-3">Username and password are required!</div>';
        } elseif ($username == $Username && $password == $Password) {
            $_SESSION['Username'] = $Username;
            $_SESSION['Active'] = true;
            header("location:index.php");
            exit;
        } else {
            echo '<div class="alert alert-danger mt-3">Incorrect username or password.</div>';
        }
    }
    ?>
</div>
</body>
</html>