<?php include("Functions.php");

$query2 = "SELECT * FROM `food recipes`";
$query3 = "SELECT CONCAT_WS(', ', Ingredient1, Ingredient2, Ingredient3, Ingredient4) FROM `food recipes`";
$receive = mysqli_query($connection, $query2);
$receive3 = mysqli_query($connection, $query3);
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="FoodPageMySQL1.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>My Food Rota</title>
</head>

<body>
<nav class="navbar navbar-expand sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="FoodPage.php">Weekly Food Rota</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="FoodPageHome.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="insertNewRecipe.php">Insert New Recipe <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<form class = "container" action = "insertNewRecipe.php" method="post" >


                                                                        <!-- RECIPE NAME -->
  <div class="form-group">
    <label ><h1>Recipe Name</h1></label>
    <input type="text" name="recipeName" class="form-control" placeholder="Enter recipe name">
  </div>
                                                                      <!-- INGREDIENTS FORM-->
  <div class="form-group">
    <label ><h2>Ingredients</h2></label>
   
   
    <div id="ingNo">
  </div>
  <div class='container'>
<div class='row'>
<div class='form-group'>
<select class='form-control' type='text' name="ingredient1Amount" id='selectAmount'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select> </div> 
<div class='form-group'> <input class='form-control' type='text' name="ingredient1" placeholder='Ingredient x1' ></div>
</div> </div>
        <div id="ingredients">
        </div>
</div>
                                                                    <!-- ADD INGREDIENT BUTTON -->

  <button type="button" id="addBtn" class="btn btn-primary" name="addCol"><svg xmlns="http://www.w3.org/2000/svg" class="plus"  width="12" height="16" viewBox="0 0 12 16"><path fill-rule="evenodd" d="M12 9H7v5H5V9H0V7h5V2h2v5h5v2z"/></svg>
  Add Ingredient</button>
                                                                     <!-- REMOVE INGREDEINT BUTTON -->
  <button style="float: right;" type="button" id="removeBtn" class="btn btn-primary" ><svg xmlns="http://www.w3.org/2000/svg" class="plus" width="8" height="16" viewBox="0 0 8 16"><path fill-rule="evenodd" d="M0 7v2h8V7H0z"/> </svg>
  Remove Last Ingredient</button>
  <br> <br> 

                                                                       <!-- SUBMIT BUTTON -->
  <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
  <script>
//     $("#submit").click(function(){
//       if (confirm("Thank you! Would you like to add another one?")) {
//         window.location.href = "insertNewRecipe.php";
// } else {
//   window.location.href = "FoodPageHome.php";
// }
//     });
</script>
  <br><br><br>


</form>
</body>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="insertNewRecipe2.js"></script>
</html>





