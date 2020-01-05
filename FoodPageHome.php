<?php include("Functions.php"); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="FoodPageHome.css">
    <title>My Food Rota </title>
</head>

<body >
<div id="all" >
<script>
      //  TweenMax.from('#all', 1.5, {scale:0, delay:0});
</script>
<nav class="navbar navbar-expand sticky-top navbar-dark bg-dark" >
<script>
TweenMax.from('nav', 2.5, { ease: Power4.easeOut, y: -500 }); 
</script> 
<a class="navbar-brand" href="FoodPage.php">Weekly Food Rota</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="FoodPageHome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insertNewRecipe.php">Insert New Recipe</a>
      </li>
    </ul>
  </div>
</nav>

<div class="header">
        <h1>What's on the menu?</h1>
    </div>
    
    <script>
      // ANIMATING THE HEADER
      TweenMax.from('h1', 2.5, { ease: Elastic.easeInOut.config(1, 0.3), y: -500 });

    </script>

  <div class="container">
      <h2>
          <!-- ROW NUMBER 1 - DAYS-->
        <div class="row">
            <div class="days">Monday</div>
            <div class="days">Tuesday</div>
            <div class="days">Wednesday</div>
            <div class="days">Thursday</div>
            <div class="days">Friday</div>
            <div class="days">Saturday</div>
            <div class="days">Sunday</div>
        </div>
</h2>

                        <!-- INDIVIDUAL FOOD SELECTION -->
<div class="row" class="list">
<select  class="form-control dropdown" id="monday"  >
<option value= "chooseMenu" selected>Choose Menu</option>

<?php
    $sql = "SELECT * FROM `food recipes`";
    $result4 = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result4) > 0) {
        while ($row = mysqli_fetch_assoc($result4)) {
          $recipeName = $row['Recipe Name'];
          echo "<option value='$recipeName'>";
          echo $recipeName;
          echo "</option>";
        };
    };

    ?>
    <script>
      // ENLARGING THE SELECTS
// var Anim = TweenMax.to('#monday', 3, {scale:2, paused:true});
// var Anim = TweenMax.to('#monday', 1, {scale:3, xPercent:300, yPercent:-500, paused:true});
// $("#monday").click(function(){Anim.play()});
// $("h1").click(function(){Anim.reverse()});
      </script>
    
</select>


<select  class="form-control dropdown" id="tuesday"  >
<option value= "chooseMenu" selected>Choose Menu</option>
<?php 
 $sql = "SELECT * FROM `food recipes`";
 $result4 = mysqli_query($connection, $sql);
if (mysqli_num_rows($result4) > 0) {
        while ($row = mysqli_fetch_assoc($result4)) {
          $recipeName = $row['Recipe Name'];
          echo "<option value='$recipeName'>";
          echo $recipeName;
          echo "</option>";
        };
    };
    ?>
</select>
<select  class="form-control dropdown" id="wednesday"  >
<option value= "chooseMenu" selected>Choose Menu</option>
<?php 
 $sql = "SELECT * FROM `food recipes`";
 $result4 = mysqli_query($connection, $sql);
if (mysqli_num_rows($result4) > 0) {
        while ($row = mysqli_fetch_assoc($result4)) {
          $recipeName = $row['Recipe Name'];
          echo "<option value='$recipeName'>";
          echo $recipeName;
          echo "</option>";
        };
    };
    ?>
</select>
<select  class="form-control dropdown" id="thursday"  >
<option value= "chooseMenu" selected>Choose Menu</option>
<?php 
 $sql = "SELECT * FROM `food recipes`";
 $result4 = mysqli_query($connection, $sql);
if (mysqli_num_rows($result4) > 0) {
        while ($row = mysqli_fetch_assoc($result4)) {
          $recipeName = $row['Recipe Name'];
          echo "<option value='$recipeName'>";
          echo $recipeName;
          echo "</option>";
        };
    };
    ?>
</select>
<select  class="form-control dropdown" id="friday"  >
<option value= "chooseMenu" selected>Choose Menu</option>
<?php 
 $sql = "SELECT * FROM `food recipes`";
 $result4 = mysqli_query($connection, $sql);
if (mysqli_num_rows($result4) > 0) {
        while ($row = mysqli_fetch_assoc($result4)) {
          $recipeName = $row['Recipe Name'];
          echo "<option value='$recipeName'>";
          echo $recipeName;
          echo "</option>";
        };
    };
    ?>
</select>
<select  class="form-control dropdown" id="saturday"  >
<option value= "chooseMenu" selected>Choose Menu</option>
<?php 
 $sql = "SELECT * FROM `food recipes`";
 $result4 = mysqli_query($connection, $sql);
if (mysqli_num_rows($result4) > 0) {
        while ($row = mysqli_fetch_assoc($result4)) {
          $recipeName = $row['Recipe Name'];
          echo "<option value='$recipeName'>";
          echo $recipeName;
          echo "</option>";
        };
    };
    ?>
</select>
<select  class="form-control dropdown" id="sunday"  >
<option value= "chooseMenu" selected>Choose Menu</option>
<?php 
 $sql = "SELECT * FROM `food recipes`";
 $result4 = mysqli_query($connection, $sql);
if (mysqli_num_rows($result4) > 0) {
        while ($row = mysqli_fetch_assoc($result4)) {
          $recipeName = $row['Recipe Name'];
          echo "<option value='$recipeName'>";
          echo $recipeName;
          echo "</option>";
        };
    };
    ?>
</select>
</div>
            <!-- INDIVIDUAL RECIPES -->

<div class="row" >
<ul id="monday" class="list">
</ul>
<ul id="tuesday" class="list" >
</ul>
<ul id="wednesday" class="list" >
</ul>
<ul id="thursday" class="list" >
</ul>
<ul id="friday" class="list" >
</ul>
<ul id="saturday" class="list" >
</ul>
<ul id="sunday" class="list" >
</ul>
</div>
                          <!-- SHOPPING LIST -->

<div class= "row">
        <ul class="shoppingList" id="shopList">
           

        </ul>
  </div>
<div class="container">
            <input class="btn btn-primary " type="button" value="Calculate" id="submit">
  </div>
  <script>
TweenMax.from('.btn', 2.5, { ease: Power4.easeOut, y: 500 }); 
TweenMax.from('select', 2.5, { ease: Power4.easeOut, y: 500 }); 
TweenMax.from('.days', 2.5, { ease: Power4.easeOut, y: -500 }); 
</script> 
  </div>

</body>

<script>

  $(document).ready(function () {
     $("select").change(function () {
      foodValue = $(this).val();
      selectedID = $(this).attr('id');
      seperateDropdowns = $("#" + selectedID + ".list")
      seperateDropdowns.load("load-food.php", {
      foodValue
       });
     });
  });

  var shopList = $("#shopList")
       
       $("#submit").click(()=>{
        TweenMax.from('#shopList', 2.5, { ease: Power4.easeOut, y: 500 }); 
           shopList.empty();
           var duplicate = []
           var i;
           var u = document.getElementsByTagName("LI").length
           for (i = 0; i < u; i++) { 
           var text = (document.getElementsByTagName("LI")[i].innerHTML)
           // MAKING IT A LIST
           duplicate.unshift(text)
           // SEPERATING KILOS AND INGREDIENTS
           var duplicateCount = duplicate.reduce((ac, val)=> {
               var [kg, key] = val.split(' ')
               kg = parseFloat(kg) 
               ac[key] = ac[key]? ac[key]+kg : kg;
               return ac 
           }, {})
           // MAKING THE OBJ BACK INTO ARRAY
           var out  = Object.entries(duplicateCount).map(([key, kg])=> `${kg}x ${key}`)
           }
           // PRINTING IT
           shopList.append("<span class = 'wut'>" + "SHOPPING LIST" + "</span>")
           out.forEach(element => {
            if(element === "NaNx "){
              }else{
            shopList.append( "<li>" + element + "</li>")  }
           });      
       })



                
</script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="FoodPageMySQL.js"></script> -->

    
</html>