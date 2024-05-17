<?php

$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$mysqli = require __DIR__ . "/connect.php";

$sql = "UPDATE user
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt->execute();

if ($mysqli->affected_rows) {

    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="http://localhost/Web-Resep-Makanan/reset-password.php?token=$token">here</a> 
    to reset your password.

    END;

    try {

        $mail->send();
        echo "<script>alert('Message sent, please check your inbox.'); window.location.href = 'forgot-password.php';</script>";

    } catch (Exception $e) {

        echo "<script>alert('Message could not be sent. Mailer error: {$mail->ErrorInfo}'); window.location.href = 'forgot-password.php';</script>";

    }

} else {
    echo "<script>alert('No user found with that email address.'); window.location.href = 'forgot-password.php';</script>";
}

?>
