<?php

session_start();
require 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    //memeriksa apakah pengguna ada
    if($result->num_rows > 0){
        $user = $result -> fetch_assoc();
        //verifikasi kata sandi
        if(password_verify($password, $user['password_hash'])){
            //simpan informasi pengguna dalam sesi
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            //arahkan ke halaman index
            header("Location: index.php");
            exit;
        } else{
            echo "Kata sandi yang anda masukkan salah";
        }
    } else {
        echo "Pengguna tidak ditemukan";
    }

    $stmt->close();
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
    <div class="card-body text-center d-flex flex-column align-items-center">
    <img class="mb-4" src="assets/img/illustrations/iconColor.png" style="max-height: 200px;max-width: 250px;margin-top: 60px; color: #f6ae48;"> 
        <div class="card mb-3" style="max-width: 650px; border-radius: 1em; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);">
            <div class="row g-0">
                <div class="col-md-8" style="background-color: #f6ae48; color: #ffffff; width: 20em; height: 30em; border-radius: 1em; z-index: 9;">
                    <p style="font-size: 1.5em; font-weight: bold; margin-top: 2em; margin-bottom: 0;">Hi! Good To See You</p>
                    <p style="font-size: 0.8em;">Time To Make A Delicious Foodd</p>
                    <form  class="d-flex flex-column" method="post" data-bs-theme="light" style="width: 300px;max-width: none; margin: auto;">
                    <div class="mb-3"><input class="form-control" type="text" name="email" placeholder="Email" style="background-color: #E29D3D; border: none; margin-top: 2em; color: #fff;"  value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"></div>
                    <div class="mb-4"><input class="form-control" type="password" name="password" placeholder="Password"style="background-color: #E29D3D; border: none; color: #fff" ></div>
                    <div class="input-group mb-3">
                        <div class="input-group" style="margin-bottom: 10%;">
                          <input type="checkbox" id="remember"> 
                            <label for="remember" style="margin-left: 0.2em; font-size: 0.9em;">Remember me</label>
                            <a class="" style="text-decoration: none; color: #ffffff; font-size: 0.9em; margin-left: 3em;" href="forgot-password.php">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mb-4"><button class="btn shadow d-block w-100" type="submit" style="color: #ffffff;background: #FB6D48; font-weight: 800;">Login</button></div>
                    <p style="font-size: 0.8em;">Don't have any account? Sign Up <a href="signup.html" style=" font: size 0.8em; text-decoration: none; font-weight: 600; color: #ffffff;">here</a></p>
                  </form>
                </div>
                <div class="col" style="position: relative; right: 1em; max-width: 100%;">
                <img src="assets/img/food.png" class="img-fluid food-image" style="height: 30em; z-index: 8;">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<!--
<!DOCTYPE html>
<html data-bs-theme="light" lang="en" style="font-family: Poppins, sans-serif;">

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
    <link rel="stylesheet" href="assets/css/style.css">  
</head>

<body style="font-family: Poppins, sans-serif;">

    <div class="card">
        <div class="card text-center d-flex flex-column align-items-center" style="margin-top: 1em;"><img class="mb-4" src="assets/img/illustrations/iconColor.png" style="max-height: 200px;max-width: 250px;margin-top: 60px;">
            <div class="card mb-3" style="max-width: 650px; border-radius: 1em; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);">
                <div class="row g-0">
                  <div class="col-md-8" style="background-color: #f6ae48; color: #ffffff; width: 20em; height: 30em; border-radius: 1em; z-index: 9;">
                    <p style="font-size: 1.5em; font-weight: bold; margin-top: 2em; margin-bottom: 0;">Hi! Good To See You</p>
                    <p style="font-size: 0.8em;">Time To Make A Delicious Foodd</p>
                    <form action="proses-login.php" class="d-flex flex-column" method="post" data-bs-theme="light" style="width: 300px;max-width: none; margin: auto;">
                        <div class="mb-3"><input class="form-control" type="text" name="email-or-username" placeholder="Email or Username" style="background-color: #E29D3D; border: none; margin-top: 2em; color: #fff;"></div>
                        <div class="mb-4"><input class="form-control" type="password" name="password" placeholder="Password"style="background-color: #E29D3D; border: none; color: #fff"></div>
                        <div class="input-group mb-3">
                            <div class="input-group" style="margin-bottom: 10%;">
                              <input type="checkbox" id="remember"> 
                                <label for="remember" style="margin-left: 0.2em; font-size: 0.9em;">Remember me</label>
                                <a class="" style="text-decoration: none; color: #ffffff; font-size: 0.9em; margin-left: 3em;" href="recovery.html">Forgot password?</a>
                            </div>
                        </div>
                        <div class="mb-4"><button class="btn shadow d-block w-100" type="submit" style="color: #ffffff;background: #FB6D48; font-weight: 800;">Login</button></div>
                        <p style="font-size: 0.8em;">Don't have any account? Sign Up <a href="register.html" style=" font: size 0.8em; text-decoration: none; font-weight: 600; color: #ffffff;">here</a></p>
                      </form>
                  </div>
                  <div class="col" style="position: relative; right: 1em; max-width: 100%;">
                    <img src="assets/img/food.png" class="img-fluid food-image" style="height: 30em; z-index: 8;">
                  </div>
                </div>
              </div>

        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Login</h1>
    
    ?php if ($is_invalid): ?>
        <em>Invalid login</em>
    ?php endif; ?>
    
    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email"
               value="<= htmlspecialchars($_POST["email"] ?? "") ?">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <button>Log in</button>
    </form>

    <a href="forgot-password.php">Forgot password?</a>
    
</body>
</html>








