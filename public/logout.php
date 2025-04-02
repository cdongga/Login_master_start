<?php
require_once '../src/session.php';
$session = new session();
$session->forgetSession();
// Optional: Add a logout message via session
$_SESSION['logout_message'] = 'You have been logged out successfully.';
header("location:login.php");
exit;
?>