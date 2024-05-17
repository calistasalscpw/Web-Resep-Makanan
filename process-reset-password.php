<?php

$token = $_POST["token"];
$token_hash = hash("sha256", $token);
$mysqli = require __DIR__ . "/connect.php";

$sql = "SELECT * FROM user WHERE reset_token_hash = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $token_hash);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

function showAlert($message) {
    echo "<script>alert('$message'); window.history.back();</script>";
    exit;
}

if ($user === null) {
    showAlert("Token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    showAlert("Token has expired");
}

if (strlen($_POST["password"]) < 8) {
    showAlert("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    showAlert("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    showAlert("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    showAlert("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "UPDATE user SET password_hash = ?, reset_token_hash = NULL, reset_token_expires_at = NULL WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ss", $password_hash, $user["id"]);
$stmt->execute();

echo "<script>alert('Password updated. You can now login.'); window.location.href = 'login.php';</script>";
?>
