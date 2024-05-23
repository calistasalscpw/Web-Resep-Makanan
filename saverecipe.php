<?php
    include "connect.php";
    //include "showrecipe.php";
    include "update_database.php";

    //$process = mysqli_query($connection, "SELECT * FROM recipe_detail") or die (mysqli_error($connection));

    // Check if recipe_id is set in the URL
    if (isset($_GET['recipe_id'])) {
      $recipe_id =  $_GET['recipe_id'];

      // Fetch recipe details using prepared statement (recommended)
      $stmt = mysqli_prepare($connection, "SELECT * FROM recipe_detail WHERE recipe_id = ?");
      mysqli_stmt_bind_param($stmt, "s", $recipe_id);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      // Check if recipe exists
      if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
      
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width-device-width, initial-scale-1.0" />

    <!-- css -->
    <link rel="stylesheet" href="saverecipe-style.css" />

    <!--Bootstrap CSS and JS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!--jQuery-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!--Connect Bootstrap for Icon-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!--End Connect Bootstrap-->

    <!--<link rel="stylesheet" href="myborrow.css" />-->

    <!--Preconnect to Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      body {
        font-family: "Poppins";
        font-weight: 600;
        font-style: normal;
      }
    </style>

    <title>Save Recipe - Masakuy</title>
  </head>
  <body>
    <!--Navbar-->
    <nav
      class="navbar navbar-expand-lg"
      style="background-color: #ffaf45; padding: 1% 0.5%"
    >
      <div class="container-fluid" style="margin-left: 0%">
        <a class="navbar-brand" href="index.php" style="width: 7%">
          <img
            src="assets/img/iconPutih.png"
            alt=""
            style="width: 100%; height: 100%"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-4" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item me-2">
              <a
                class="nav-link active"
                aria-current="page"
                href="#"
                style="font-size: 20px"
                >Recipe</a
              >
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="articles.html" style="color: white; font-size: 20px"
                >Article</a
              >
            </li>
          </ul>
          <div class="dropdown" style="width: 71%">
            <a
              class="btn text-white fw-semibold"
              style="font-size: 20px; border: none"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <span style="margin-right: 0.5vw">Category</span>
              <span
                ><i class="bi bi-caret-down-fill" style="font-size: 20px"></i
              ></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item">Breakfast</a>
                <ul>
                  <li><a href="index/BreakMeat.php" style="color: white">Meat</a></li>
                  <li><a href="index/BreakSeafood.php" style="color: white">Seafood</a></li>
                  <li><a href="index/BreakMushroom.php" style="color: white">Mushroom</a></li>
                  <li><a href="index/BreakVegetable.php" style="color: white">Vegetables</a></li>
                  <li><a href="index/BreakEgg.php" style="color: white">Egg</a></li>
                  <li><a href="index/BreakNoodles.php" style="color: white">Noodles</a></li>
                  <li><a href="index/BreakTofu.php" style="color: white">Tofu</a></li>
                  <li><a href="index/BreakChicken.php" style="color: white">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item">Lunch</a>
                <ul>
                  <li><a href="index/LunchMeat.php" style="color: white">Meat</a></li>
                  <li><a href="index/LunchSeafood.php" style="color: white">Seafood</a></li>
                  <li><a href="index/LunchMushroom.php" style="color: white">Mushroom</a></li>
                  <li><a href="index/LunchVegetable.php" style="color: white">Vegetables</a></li>
                  <li><a href="index/LunchEgg.php" style="color: white">Egg</a></li>
                  <li><a href="index/LunchNoodles.php" style="color: white">Noodles</a></li>
                  <li><a href="index/LunchTofu.php" style="color: white">Tofu</a></li>
                  <li><a href="index/LunchChicken.php" style="color: white">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item">Dinner</a>
                <ul>
                  <li><a href="index/DinnerMeat.php" style="color: white">Meat</a></li>
                  <li><a href="index/DinnerSeafood.php" style="color: white">Seafood</a></li>
                  <li><a href="index/DinnerMushroom.php" style="color: white">Mushroom</a></li>
                  <li><a href="index/DinnerVegetable.php" style="color: white">Vegetables</a></li>
                  <li><a href="index/DinnerEgg.php" style="color: white">Egg</a></li>
                  <li><a href="index/DinnerNoodles.php" style="color: white">Noodles</a></li>
                  <li><a href="index/DinnerTofu.php" style="color: white">Tofu</a></li>
                  <li><a href="index/DinnerChicken.php" style="color: white">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item">Dessert</a>
                <ul>
                  <li><a href="index/DessertMilk.php" style="color: white">Milk</a></li>
                  <li><a href="index/DessertFruit.php" style="color: white">Fruit</a></li>
                  <li><a href="index/DessertChocolate.php" style="color: white">Chocolate</a></li>
                  <li><a href="index/DessertJelly.php" style="color: white">Jelly</a></li>
                  <li><a href="index/DessertYoghurt.php" style="color: white">Yoghurt</a></li>
                  <li><a href="index/DessertBiscuit.php" style="color: white">Biscuit</a></li>
                  <li><a href="index/DessertCheese.php" style="color: white">Cheese</a></li>
                  <li><a href="index/DessertFlour.php" style="color: white">Flour</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item">Snack</a>
                <ul>
                  <li><a href="index/SnackMeat.php" style="color: white">Meat</a></li>
                  <li><a href="index/SnackSeafood.php" style="color: white">Seafood</a></li>
                  <li><a href="index/SnackMushroom.php" style="color: white">Mushroom</a></li>
                  <li><a href="index/SnackVegetable.php" style="color: white">Vegetables</a></li>
                  <li><a href="index/SnackEgg.php" style="color: white">Egg</a></li>
                  <li><a href="index/SnackNoodles.php" style="color: white">Noodles</a></li>
                  <li><a href="index/SnackTofu.php" style="color: white">Tofu</a></li>
                  <li><a href="index/SnackChicken.php" style="color: white">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item">Traditional Food</a>
                <ul>
                  <li><a href="index/LocalMeat.php" style="color: white">Meat</a></li>
                  <li><a href="index/LocalSeafood.php" style="color: white">Seafood</a></li>
                  <li><a href="index/LocalMushroom.php" style="color: white">Mushroom</a></li>
                  <li><a href="index/LocalVegetable.php" style="color: white">Vegetables</a></li>
                  <li><a href="index/LocalEgg.php" style="color: white">Egg</a></li>
                  <li><a href="index/LocalNoodles.php" style="color: white">Noodles</a></li>
                  <li><a href="index/LocalTofu.php" style="color: white">Tofu</a></li>
                  <li><a href="index/LocalChicken.php" style="color: white">Chicken Meat</a></li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item">International Food</a>
                <ul>
                  <li><a href="index/InternationalMeat.php" style="color: white">Meat</a></li>
                  <li><a href="index/InternationalSeafood.php" style="color: white">Seafood</a></li>
                  <li><a href="index/InternationalMushroom.php" style="color: white">Mushroom</a></li>
                  <li><a href="index/InternationalVegetable.php" style="color: white">Vegetables</a></li>
                  <li><a href="index/InternationalEgg.php" style="color: white">Egg</a></li>
                  <li><a href="index/InternationalNoodles.php" style="color: white">Noodles</a></li>
                  <li><a href="index/InternationalTofu.php" style="color: white">Tofu</a></li>
                  <li><a href="index/InternationalChicken.php" style="color: white">Chicken Meat</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <a href="profil.php" class="d-flex justify-content-end me-4 pe-2">
          <img
            src="assets/img/profil.png"
            alt=""
            style="width: 13%; height: 13%"
          />
          <!-- <img src="assets/img/profil.png" alt="" style="width: 5vw; height: 10vh;"> -->
        </a>
      </div>
    </nav>
    <!--End navbar-->

    <!--#TODO-->

    <!--Start Recipe Title and Save Button-->
    <div class="container" id="main-save" style="margin-top: 2rem">
      <!--Back button-->
      <div style="margin-bottom: 1rem">
        <div class="btn-back">
          <a href="index.php"
            ><i class="bi bi-arrow-left" style="margin-right: 0.5rem"></i
            >Back</a
          >
        </div>
      </div>
      <!--End Back Button-->

      <div class="row">
        <div class="col">

          <img
            src="<?php echo $data['photo'] ?>"
            alt="Salad"
            width="90%"
            class="rounded"
          />
          
          <!--TO CHECK LATER-->
          <input type="hidden" id="recipeId" value="<?php echo $data['recipe_id']; ?>"/>
        </div>
        <div class="col">
          <strong>
            <h3 style="font-weight: 600">
              <?php echo $data ['title_recipe'] ?>
            </h3>
          </strong>

          <!--Alergens-->
          <!--class="row"-->
          <div class="container-alergens">
            <div class="contains">
              <span id="milk"><?php echo $data ['category_ingredient'] ?></span>
              <span id="local"><?php echo $data ['category'] ?></span>
            </div>
          </div>
          <!--End Alergens and Category-->

          <!--Servings and time-->
          <div class="row" style="margin-top: 1rem">
            <div class="col">
              <div
                class="container border border-dark rounded"
                id="serving-time"
                style="padding: 1rem"
              >
                <i class="bi bi-stopwatch" style="margin-right: 1rem"></i>
                <?php echo $data ['time'] ?>
                minutes
              </div>
            </div>

            <div class="col">
              <div
                class="container border border-dark rounded"
                id="servings"
                style="padding: 1rem"
              >
                <i class="bi bi-person" style="margin-right: 1rem"></i>
                <?php echo $data ['serving'] ?>
                servings
              </div>
            </div>
          </div>
          <!--End Servings and time-->

          <!--Button Save Recipe-->
          <button
            type="button"
            class="btnc btn-outline-primary"
            id="saveButton"
            style="margin-top: 2rem"
          >
            <i class="bi bi-bookmark" style="margin-right: 1rem"></i>
            <span class="btnc-text">Save Recipe</span>
          </button>
          <!--End Button-->

          <!--Script Save Button-->
          <script>

            let saveButton = document.getElementById("saveButton");

            saveButton.addEventListener("click" , ()=> {
              let icon = saveButton.querySelector("i");
              let buttonText = saveButton.querySelector("span");
              let recipe_id = document.getElementById("recipeId").value; //GET the recipe ID from hidden field

              if (icon.classList.contains("bi-bookmark")){
                //if the button is currently in "Save" state
                icon.classList.replace("bi-bookmark", "bi-bookmark-fill");
                buttonText.innerText = "Saved Recipe";
                //send AJAX request to update database value to 1
                updateDatabaseValue(1, recipe_id);
              } else {
                //if the button is currently in "Saved" state
                icon.classList.replace("bi-bookmark-fill", "bi-bookmark");
                buttonText.innerText = "Save Recipe";
                //send AJAX request to update database value to 0
                updateDatabaseValue(0, recipe_id);
              }

            });

            
            function updateDatabaseValue(value, recipe_id){
              //send AJAX request to update database value
              console.log("Updating database value to:", value);
              let xhr = new XMLHttpRequest();
              xhr.open("POST", "update_database.php", true);
              xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
              xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                  if (xhr.status === 200) {
                    console.log("Database value updated successfully.");
                  } else {
                    console.error("Error updating database value.");
                  }
                }
              };
              xhr.send("value=" + value + "&recipe_id=" + recipe_id);
            }

            
          </script>
          <!--End Script Save Button-->
        </div>
      </div>

      <div class="row" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="col-4">
          <div
            class="container border border-dark rounded"
            id="ingredients"
            style="padding: 1rem"
          >
            <h4>Ingredients:</h4>
            <ul>
              <?php echo $data['ingredients'] ?>
            </ul>
          </div>
        </div>
        <div class="col-8">
          <div
            class="container border border-dark rounded"
            id="steps"
            style="padding: 1rem"
          >
            <h4>Steps:</h4>
            <ol>
              <?php echo $data['steps'] ?>
            </ol>

            <?php 
            
          } else {
            echo "Error: Recipe not found.";
            exit;
          }
    
          mysqli_stmt_close($stmt);
        } else {
          echo "Please select a recipe to view details.";
          exit;
        }
            
            ?>
          
          </div>
        </div>
      </div>
    </div>
    <!--End Recipe Title and Save Button-->

    <!--Footer-->
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
    <!--End Footer-->
  </body>
</html>
