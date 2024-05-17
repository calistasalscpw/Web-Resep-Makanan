<!-- di video nama file ini adalah function.php -->
<?php
    function koneksi(){
        $hostname = "localhost";
        $userDatabase = "root";
        $passwordUser = "";
        $databaseName = "masakuy";

        $koneksi = mysqli_connect($hostname, $userDatabase, $passwordUser, $databaseName) or die (mysqli_error(koneksi()));

        return $koneksi;
    }

    function ambilDataResep(){  //kalau di video namanya function getAllProducts, kayaknya gak bakal dipake
        $tabel_recipesDetail1 = mysqli_query(koneksi(), "SELECT * FROM recipe_detail") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail1)){
            $daftarResep[] = $row; //daftar resep = products
        }

        return $daftarResep;
    }

    function BreakMeat(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Breakfast' AND category_ingredient = 'Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function BreakSeafood(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Breakfast' AND category_ingredient = 'Seafood'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function BreakMushroom(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Breakfast' AND category_ingredient = 'Mushroom'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function BreakVegetable(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Breakfast' AND category_ingredient = 'Vegetable'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function BreakEgg(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Breakfast' AND category_ingredient = 'Egg'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function BreakNoodles(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Breakfast' AND category_ingredient = 'Noodles'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function BreakTofu(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Breakfast' AND category_ingredient = 'Tofu'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function BreakChicken(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Breakfast' AND category_ingredient = 'Chicken Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }

    // ---------------------

    function LunchMeat(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Lunch' AND category_ingredient = 'Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LunchSeafood(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Lunch' AND category_ingredient = 'Seafood'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LunchMushroom(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Lunch' AND category_ingredient = 'Mushroom'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LunchVegetable(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Lunch' AND category_ingredient = 'Vegetable'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LunchEgg(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Lunch' AND category_ingredient = 'Egg'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LunchNoodles(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Lunch' AND category_ingredient = 'Noodles'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LunchTofu(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Lunch' AND category_ingredient = 'Tofu'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LunchChicken(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Lunch' AND category_ingredient = 'Chicken Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }

    // ------------------

    function DinnerMeat(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dinner' AND category_ingredient = 'Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DinnerSeafood(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dinner' AND category_ingredient = 'Seafood'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DinnerMushroom(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dinner' AND category_ingredient = 'Mushroom'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DinnerVegetable(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dinner' AND category_ingredient = 'Vegetable'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DinnerEgg(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dinner' AND category_ingredient = 'Egg'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DinnerNoodles(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dinner' AND category_ingredient = 'Noodles'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DinnerTofu(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dinner' AND category_ingredient = 'Tofu'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DinnerChicken(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dinner' AND category_ingredient = 'Chicken Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }

    // ------------------
    
    function DessertMilk(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dessert' AND category_ingredient = 'Milk'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DessertFruit(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dessert' AND category_ingredient = 'Fruit'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DessertChocolate(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dessert' AND category_ingredient = 'Chocolate'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DessertJelly(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dessert' AND category_ingredient = 'Jelly'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DessertYoghurt(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dessert' AND category_ingredient = 'Yoghurt'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DessertBiscuit(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dessert' AND category_ingredient = 'BiscuitDessertBiscuit'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DessertCheese(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dessert' AND category_ingredient = 'Cheese'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function DessertFlour(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Dessert' AND category_ingredient = 'Flour Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }

    // ------------------

    function SnackMeat(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Snack' AND category_ingredient = 'Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function SnackSeafood(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Snack' AND category_ingredient = 'Seafood'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function SnackMushroom(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Snack' AND category_ingredient = 'Mushroom'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function SnackVegetable(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Snack' AND category_ingredient = 'Vegetable'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function SnackEgg(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Snack' AND category_ingredient = 'Egg'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function SnackNoodles(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Snack' AND category_ingredient = 'Noodles'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function SnackTofu(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Snack' AND category_ingredient = 'Tofu'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function SnackChicken(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Snack' AND category_ingredient = 'Chicken Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }

    // --------------

    function LocalMeat(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Local' AND category_ingredient = 'Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LocalSeafood(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Local' AND category_ingredient = 'Seafood'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LocalMushroom(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Local' AND category_ingredient = 'Mushroom'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LocalVegetable(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Local' AND category_ingredient = 'Vegetable'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LocalEgg(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Local' AND category_ingredient = 'Egg'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LocalNoodles(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Local' AND category_ingredient = 'Noodles'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LocalTofu(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Local' AND category_ingredient = 'Tofu'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function LocalChicken(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'Local' AND category_ingredient = 'Chicken Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }

    // --------------------------

    function InternationalMeat(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'International' AND category_ingredient = 'Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function InternationalSeafood(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'International' AND category_ingredient = 'Seafood'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function InternationalMushroom(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'International' AND category_ingredient = 'Mushroom'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function InternationalVegetable(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'International' AND category_ingredient = 'Vegetable'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function InternationalEgg(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'International' AND category_ingredient = 'Egg'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function InternationalNoodles(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'International' AND category_ingredient = 'Noodles'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function InternationalTofu(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'International' AND category_ingredient = 'Tofu'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
    function InternationalChicken(){
        $tabel_recipesDetail = mysqli_query(koneksi(), "SELECT * FROM recipe_detail WHERE category = 'International' AND category_ingredient = 'Chicken Meat'") or die (mysqli_error(koneksi()));
        while($row = mysqli_fetch_assoc($tabel_recipesDetail)){
            $daftarResep[] = $row;
        }
        return $daftarResep;
    }
?>


<!-- coba tambahin statement if else -->