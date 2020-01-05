<?php include("Functions.php"); 
$foodValue = $_POST['foodValue'];
 $sql = "SELECT * FROM `food recipes`";
  $result4 = mysqli_query($connection, $sql);


                    // SELECT PRINT
while($row = mysqli_fetch_assoc($result4)){
     if ($row['Recipe Name'] == $foodValue) {
    for ($i=1; $i <= 10 ; $i++) { 
        $IngredientIndex = "Ingredient$i";
        if($row[$IngredientIndex] != null) {echo "<li>{$row[$IngredientIndex]}</li>"; };
      };
     };
 };


 ?>
