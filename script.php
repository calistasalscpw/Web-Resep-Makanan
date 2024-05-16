<!-- nama file ini sama dengan nama file yang ada di video -->
<?php
    require "proses.php";

    if (isset($_POST['category']) && isset($_POST['ingredient'])) { // Check for both category and ingredient
        $category = $_POST['category'];
        $ingredient = $_POST['ingredient'];
        $daftarResep = getRecipeByCategory($category, $ingredient);
    } else {
        $daftarResep = ambilDataResep();
    }

    echo json_encode($daftarResep);
?>

<!-- menit 8.41 -->