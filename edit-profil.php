<?php
    require 'connect.php';
    require 'update_database.php';
    session_start();
    if (!isset($_SESSION["user_id"])) {

        $process_saved_recipe = mysqli_query($connection, "SELECT * FROM recipe_detail WHERE save=1") or die (mysqli_error($connection));

        if(!isset($_SESSION['email'])){
            header("Location: login.php");
            exit;
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        
        $name = mysqli_real_escape_string($connection, $name);

        $query = "UPDATE user SET name='$name' WHERE email='".$_SESSION['email']."'";

        if($connection->query($query) === TRUE){
            $_SESSION['name'] = $name;
            echo "<script>alert('Profil berhasil diperbarui')</script>";

        } else {
            echo "Error : ".$connection->error;
        }

        $connection->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masakuy</title>
    <!-- css -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body {
        font-family: "Poppins";
        font-weight: 600;
        font-style: normal;
      }
        
      a {text-decoration:none;}

      button:disabled{
        background-color: #ffd7a2;
        color: #ffd7a2;
        cursor: not-allowed;
      }
    </style>
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg" style="background-color: #ffaf45; padding: 1% 0.5%">
    <div class="container-fluid" style="margin-left: 0%">
        <a class="navbar-brand" href="recipeUnfiltered.html" style="width: 7%">
            <img src="assets/img/iconPutih.png" alt="" style="width: 100%; height: 100%" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-4" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item me-2">
                    <a class="nav-link" href="index.php" style="color: white; font-size: 20px">Recipe</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="articles.html" style="color: white; font-size: 20px">Article</a>
                </li>
            </ul>
            <div class="dropdown" style="width: 71%">
                <a class="btn text-white fw-semibold" style="font-size: 20px; border: none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span style="margin-right: 0.5vw">Category</span>
                    <span><i class="bi bi-caret-down-fill" style="font-size: 20px"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Breakfast</a>
                        <ul>
                            <li><a href="">Meat</a></li>
                            <li><a href="">Seafood</a></li>
                            <li><a href="">Mushroom</a></li>
                            <li><a href="">Vegetables</a></li>
                            <li><a href="">Egg</a></li>
                            <li><a href="">Noodles</a></li>
                            <li><a href="">Tofu</a></li>
                            <li><a href="">Chicken Meat</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Lunch</a>
                        <ul>
                            <li><a href="">Meat</a></li>
                            <li><a href="">Seafood</a></li>
                            <li><a href="">Mushroom</a></li>
                            <li><a href="">Vegetables</a></li>
                            <li><a href="">Egg</a></li>
                            <li><a href="">Noodles</a></li>
                            <li><a href="">Tofu</a></li>
                            <li><a href="">Chicken Meat</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Dinner</a>
                        <ul>
                            <li><a href="">Meat</a></li>
                            <li><a href="">Seafood</a></li>
                            <li><a href="">Mushroom</a></li>
                            <li><a href="">Vegetables</a></li>
                            <li><a href="">Egg</a></li>
                            <li><a href="">Noodles</a></li>
                            <li><a href="">Tofu</a></li>
                            <li><a href="">Chicken Meat</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Dessert</a>
                        <ul>
                            <li><a href="">Milk</a></li>
                            <li><a href="">Fruit</a></li>
                            <li><a href="">Chocolate</a></li>
                            <li><a href="">Jelly</a></li>
                            <li><a href="">Yogurt</a></li>
                            <li><a href="">Biscuit</a></li>
                            <li><a href="">Cheese</a></li>
                            <li><a href="">Flour</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Snack</a>
                        <ul>
                            <li><a href="">Meat</a></li>
                            <li><a href="">Seafood</a></li>
                            <li><a href="">Mushroom</a></li>
                            <li><a href="">Vegetables</a></li>
                            <li><a href="">Egg</a></li>
                            <li><a href="">Noodles</a></li>
                            <li><a href="">Tofu</a></li>
                            <li><a href="">Chicken Meat</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Traditional Food</a>
                        <ul>
                            <li><a href="">Meat</a></li>
                            <li><a href="">Seafood</a></li>
                            <li><a href="">Mushroom</a></li>
                            <li><a href="">Vegetables</a></li>
                            <li><a href="">Egg</a></li>
                            <li><a href="">Noodles</a></li>
                            <li><a href="">Tofu</a></li>
                            <li><a href="">Chicken Meat</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">International Food</a>
                        <ul>
                            <li><a href="">Meat</a></li>
                            <li><a href="">Seafood</a></li>
                            <li><a href="">Mushroom</a></li>
                            <li><a href="">Vegetables</a></li>
                            <li><a href="">Egg</a></li>
                            <li><a href="">Noodles</a></li>
                            <li><a href="">Tofu</a></li>
                            <li><a href="">Chicken Meat</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <a href="profil.php" class="d-flex justify-content-end me-4 pe-2">
            <img src="assets/img/profil.png" alt="" style="width: 13%; height: 13%" />
        </a>
    </div>
</nav>

<div class="row pt-5 pb-5 mt-5 mb-5" style="margin-top: 2rem; margin-bottom: 3rem;">

    <div class="container col-3 text-center" style="align-items: center; position: relative; display: inline-block;">
        <img class="circle-profil" src="assets/img/profil.png" alt="profil anda" style="width: 250px;height: 250px;border-radius: 50%;overflow: hidden;display: inline-block;">
        <!-- <button class="btn shadow d-block" style="color: black; margin-top: 2rem; font-weight: 800; border-color: #ffaf45; border-width: 3px;">Change Profil<i class="bi bi-pencil" style="margin: 0.5rem;"></i></button> -->
    </div>


    <div class="container col-7" style="position: relative; display: inline-block;">
        <form class="col" id="editProfileForm" method="post" action="edit-profil.php" style="width: auto;">
            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($error_message) ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="name" style="font-size: 18pt;">Name</label>
                <input 
                    class="form-control" 
                    type="text" name="name" 
                    value=<?php echo htmlspecialchars($_SESSION['name']) ?> 
                    style="width: 800px; background-color: transparent; border: black; border-radius: 3px; margin-top: 2em;"
                >
            </div>
            <div class="mb-3">
                <label for="email" style="font-size: 18pt;">Email</label>
                <input 
                    class="form-control" 
                    type="email" name="email" 
                    value=<?php echo htmlspecialchars($_SESSION['email']) ?>
                    readonly
                    style="width: 800px; background-color: transparent; border: black; border-radius: 3px; margin-top: 3em;"
                >
            </div>
            <!-- <div class="mb-4">
                <label for="password" style="font-size: 12pt;">Password</label>
                <input 
                    class="form-control" 
                    type="password" name="password" 
                    value="***" placeholder="Enter new password" 
                    style="width: 800px; background-color: transparent; border: black; border-radius: 3px; margin-top: 3em;"
                >
            </div> -->
            <div class="row" style="align-items: end;">
                <button class="btn shadow w-100" type="submit" id="submitEdit" style="width: 100px; color: black; background-color: #ffaf45; font-weight: 800;" disabled>Save Changes</button>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <br></br>
</div>

<footer style="font-family: Poppins; background-color: #ffaf45;">
      <div class="container pb-3 " >
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 mt-5 border-top pb-2" >
        <div class="col-5">
          <h3 style="font-weight: 600; ">Masakuy</h3>
          <p class="text-body-secondary fw-semibold" style="text-align: justify;" >Explore authentic and healthy recipes. Traditional and global food at the palm of your hand</p>
        </div>
    
        <div class="col-2 offset-2">
          <h4 style="font-weight: 600; ">Explore</h4>
          <ul class="nav flex-column fw-semibold">
            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Recipe</a></li>
            <li class="nav-item mb-2"><a href="articles.html" class="nav-link p-0 text-body-secondary">Articles</a></li>
          </ul>
        </div>
    
        <div class="col-2">
          <h4 style="font-weight: 600; ">Information</h4>
          <ul class="nav flex-column fw-semibold">
            <li class="nav-item mb-2"><a href="terms_condition.html" class="nav-link p-0 text-body-secondary">Terms & Conditions</a></li>
            <li class="nav-item mb-2"><a href="faq.html" class="nav-link p-0 text-body-secondary">F&Q</a></li>
            <li class="nav-item mb-2"><a href="contact_us.html" class="nav-link p-0 text-body-secondary">Contact</a></li>
          </ul>
        </div>
    
        <div class="col-2">
          <h4 style="font-weight: 600; ">Find Us On</h4>
          <div class="row" style="font-size: 40px">
            <div class="col-3">
                <a href="https://www.whatsapp.com" class="text-black" target="_blank">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-3">
                <a href="https://www.instagram.com" class="text-black" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-2">
                <a href="https://www.twitter.com" class="text-black" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
          </div>
        </div>

      </div>
      <p class="text-center">© 2024 Masakuy</p>
      </div>
</footer>
        

<script>
            document.addEventListener('DOMContentLoaded', (event) =>{
                const form = document.getElementById('editProfileForm');
                const submitEditButton = document.getElementById('submitEdit');
                const initialFormState = new FormData(form);

                function checkForChanges() {
                    const currentFormState = new FormData(form);
                    for (let [key, value] of initialFormState.entries()){
                        if (currentFormState.get(key) !== value){
                            submitEditButton.disabled = false;
                            return;
                        }
                    }
                    submitButton.disabled = true;
                }

                form.addEventListener('input', checkForChanges);
                form.addEventListener('change', checkForChanges);
            }) 
</script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
