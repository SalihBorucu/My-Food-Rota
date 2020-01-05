<?php
$connection = mysqli_connect('localhost', 'root', '', 'recipes');

// if (!$connection) {
//         echo "not connected";}
//         else {
//             echo "yes it is";
//         };

                                                // FORM SUBMISSION
 if(isset($_POST['submit'])) {
    if(empty($_POST['recipeName'])) {
          $nameErr ="<div class='alert alert-danger' role='alert'>
          Recipe Name is required!
          </div>";echo $nameErr;}
          else{ $recipeName = $_POST['recipeName'];
        if(isset($_POST['ingredient1'])) {$ingredients1 = $_POST['ingredient1Amount']."x ". $_POST['ingredient1'];} else {$ingredients1 = '';};
        if(isset($_POST['ingredient2'])) {$ingredients2 = $_POST['ingredient2Amount']."x ". $_POST['ingredient2'];} else {$ingredients2 = '';};
        if(isset($_POST['ingredient3'])) {$ingredients3 = $_POST['ingredient3Amount']."x ". $_POST['ingredient3'];} else {$ingredients3 = '';};
        if(isset($_POST['ingredient4'])) {$ingredients4 = $_POST['ingredient4Amount']."x ". $_POST['ingredient4'];} else {$ingredients4 = '';};
        if(isset($_POST['ingredient5'])) {$ingredients5 = $_POST['ingredient5Amount']."x ". $_POST['ingredient5'];} else {$ingredients5 = '';};
        if(isset($_POST['ingredient6'])) {$ingredients6 = $_POST['ingredient6Amount']."x ". $_POST['ingredient6'];} else {$ingredients6 = '';};
        if(isset($_POST['ingredient7'])) {$ingredients7 = $_POST['ingredient7Amount']."x ". $_POST['ingredient7'];} else {$ingredients7 = '';};
        if(isset($_POST['ingredient8'])) {$ingredients8 = $_POST['ingredient8Amount']."x ". $_POST['ingredient8'];} else {$ingredients8 = '';};
        if(isset($_POST['ingredient9'])) {$ingredients9 = $_POST['ingredient9Amount']."x ". $_POST['ingredient9'];} else {$ingredients9 = '';};
        if(isset($_POST['ingredient10'])) {$ingredients10 = $_POST['ingredient10Amount']."x ". $_POST['ingredient10'];} else {$ingredients10 = '';};
        $query = "INSERT INTO `food recipes` (`Recipe Name`, `id`, `Ingredient1`, `Ingredient2`, `Ingredient3`, `Ingredient4`, `Ingredient5`, `Ingredient6`, `Ingredient7`, `Ingredient8`, `Ingredient9`, `Ingredient10`) VALUES ('$recipeName', NULL, '$ingredients1', '$ingredients2', '$ingredients3', '$ingredients4', '$ingredients5', '$ingredients6', '$ingredients7', '$ingredients8', '$ingredients9', '$ingredients10')";
        
        $check = mysqli_query($connection, $query);
        
          }
      }   













      
?>