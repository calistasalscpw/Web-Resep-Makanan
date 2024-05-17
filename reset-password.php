<?php

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/connect.php";

$sql = "SELECT * FROM user
        WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Masak.Uy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
    <body style="font-family: Poppins, sans-serif;">
    <div class="card">
        <div class="card-body text-center d-flex flex-column align-items-center"><img class="mb-4" src="assets/img/illustrations/iconColor.png" style="max-height: 200px;max-width: 250px;margin-top: 60px; color: #f6ae48;">
            <div class="register" style="position: absolute; z-index: 8; margin-top: 12.5em;">
                <div class="col-md-8" style="box-shadow: 0 15px 15px rgba(0, 0, 0, 0.35); border: 1px solid #f6ae48; background-color: #ffffff; color: #f6ae48; width: 30em; height: 17em; border-radius: 1em; z-index: 9; padding-top: 1em;">
                    <div class="sign-up">
                        <p style="font-size: 1.5em; font-weight: bold;">Recover Your Account</p>
                    </div>
                    <div class="btn" style="position: relative; bottom: 28%; left: 38%;">
                        <a href="login.php"> <i class="bi bi-x" style="font-size: 32px; text-decoration: none; color: #000;"></i></a>
                    </div>
                    <form method="post" action="process-reset-password.php" class="d-flex flex-column" data-bs-theme="light" style="position: relative; bottom: 20%;  width: 300px; margin: auto;">
                        <div class="mb-3"><input class="form-control" type="password" id="password" name="password" placeholder="New Password" style="border: 1px solid #f6ae48; color: #f6ae48; top: 0;"></div>
                        <div class="mb-4"><input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat Your Password" style="border: 1px solid #f6ae48; color: #f6ae48; top: 0;"></div>
                        <div class="mb-4"><button class="btn shadow d-block w-100" type="submit" style="color: #ffffff; background: #FB6D48; font-weight: 800;">Change New Password</button></div>
                        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>

<!--
    <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Masak.Uy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

    <body style="font-family: Poppins, sans-serif;">
    <div class="card">
        <div class="card-body text-center d-flex flex-column align-items-center"><img class="mb-4" src="assets/img/illustrations/iconColor.png" style="max-height: 200px;max-width: 250px;margin-top: 60px; color: #f6ae48;">
          <div class="register" style="position: absolute; z-index: 8; margin-top: 12.5em;">
            <div class="col-md-8" style="box-shadow: 0 15px 15px rgba(0, 0, 0, 0.35); border: 1px solid #f6ae48; background-color: #ffffff; color: #f6ae48; width: 30em; height: 15em; border-radius: 1em; z-index: 9; padding-top: 1em;">
              <div class="sign-up">
                <p style="font-size: 1.5em; font-weight: bold;">Recover Your Account</p>
              </div>
              <div class="btn" style="position: relative; bottom: 28%; left: 38%;">
                <a href="login.php"> <i class="bi bi-x" style="font-size: 32px; text-decoration: none; color: #000;"></i></a>
              </div>
              <form action="send-password-reset.php" class="d-flex flex-column" method="post" data-bs-theme="light" style="position: relative; bottom: 20%;  width: 300px; margin: auto; ;">
                  <div class="mb-3"><input class="form-control" type="text" name="email" placeholder="Email" style="border: 1px solid #f6ae48; color: #f6ae48; top: 0;"></div>
                  <div class="mb-4"><button class="btn shadow d-block w-100" type="submit" style="color: #ffffff;background: #FB6D48; font-weight: 800;">Find My Account</button></div>
                </form>
            </div>
          </div>  
        </div>
        <div
    </div>
</body>
</html>
-->