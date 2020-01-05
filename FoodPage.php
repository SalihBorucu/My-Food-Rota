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
    <link rel="stylesheet" href="FoodPageAnimation1.css">
    <title>My Food Rota </title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm">
            </div>
        <div class="col-sm">
            </div>
        <div class="col-sm">
                <br><br><br><br><br><br><br><br><br>
                <img id="tomato" class="float-right"  src=https://purepng.com/public/uploads/large/purepng.com-red-tomatoestomatosalad-fruitred-fruittomatoes-1701527316192n3ycv.png>
                <br>
                <img id="chilli" class="float-left" src=https://purepng.com/public/uploads/large/purepng.com-green-pepperpepperpeppercornsspicecapsicumfoodchiligreen-pepper-170152727228313odv.png>
            </div>
        <div class="col-sm">
                <br><br><br><br><br><br><br><br><br><br>
                <img class="float-none" id="eggplant" src=https://purepng.com/public/uploads/large/purepng.com-eggplanteggplantpurple-egg-shaped-fruitdark-purple-1701527255846n8zxi.png>    
                <img id="pepper" class="float-right" src=https://purepng.com/public/uploads/large/purepng.com-red-pepperpepperpeppercornsspicecapsicumfoodchilired-pepper-1701527271796vqmde.png>
            </div>
           
            
        <div class="col-sm">
        <br><br><br><br><br><br><br><br><br><br>
        <img class="float-left" id="carrot" src=https://purepng.com/public/uploads/large/purepng.com-carrotcarrotdomestic-carrotfast-growingcarrots-1701527243796wv96z.png> 
       
                    </div>
                    <div class="col-sm">
                    <br><br><br><br><br><br><br><br><br><br>
                         <img id="cucumber" class="float-right" src=https://purepng.com/public/uploads/large/purepng.com-cucumbercucumberfoodvegetablegreen-cucumber-1701527250749ibzep.png>
           
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                    </div>
</div>


                                    <!-- MIDDLE ROW -->
<div class="row" id="middle">
<div class="col">
       
    <br><br><br><br>
    <img class="float-right" id="carrot" src=https://purepng.com/public/uploads/large/purepng.com-carrotcarrotdomestic-carrotfast-growingcarrots-1701527243796wv96z.png> 

            </div>
        <div class="col-sm" >
            <h1>MyFoodRota</h1>
        </div>
        <div class="col-sm">
        <br><br><br><br>
        <img id="strawberry" src=https://purepng.com/public/uploads/large/purepng.com-strawberrystrawberrygenus-fragariastrawberriesfruitbotanical-berry-1701527400214si6bh.png>

            </div>
    </div>
</div>

        <!-- BOTTOM ROW -->
<div class= "row" id="bottom-row" >
    <div class="col">           
        </div>
    <div id="bottom" class="col">
            <br><br>
            <img id="pepper" class="float-right" src=https://purepng.com/public/uploads/large/purepng.com-red-pepperpepperpeppercornsspicecapsicumfoodchilired-pepper-1701527271796vqmde.png>        
        </div>
    <div class="col">
        <br>
            <img id="tomato" class="float-right"  src=https://purepng.com/public/uploads/large/purepng.com-red-tomatoestomatosalad-fruitred-fruittomatoes-1701527316192n3ycv.png>
            <br>
            <img class="float-none" id="carrot" src=https://purepng.com/public/uploads/large/purepng.com-carrotcarrotdomestic-carrotfast-growingcarrots-1701527243796wv96z.png> 
        </div>
    <div class="col">
                <br>
            <img class="float-none" id="eggplant" src=https://purepng.com/public/uploads/large/purepng.com-eggplanteggplantpurple-egg-shaped-fruitdark-purple-1701527255846n8zxi.png>    
            <img id="chilli" class="float-right" src=https://purepng.com/public/uploads/large/purepng.com-green-pepperpepperpeppercornsspicecapsicumfoodchiligreen-pepper-170152727228313odv.png>
        </div>
    <div class="col">
                <br>
            <img id="tomato" class="float-left"  src=https://purepng.com/public/uploads/large/purepng.com-red-tomatoestomatosalad-fruitred-fruittomatoes-1701527316192n3ycv.png>
        </div>
    <div class="col">
        </div>
</div>
</div>

<script>
    TweenMax.staggerFrom('img', .2, {scale:0, opacity:0, delay:0.5}, .15);
    TweenMax.from('h1', 1, {scale:0, delay:0});
    // TweenMax.from('h1', 2.5, {scale:0, ease: Elastic.easeIn.config(1, 0.3), y: -500 });
    // TweenMax.from('h1', 2, {scale:0, ease: Elastic.easeIn.config(1, 0.3), });
    // TweenMax.from('h1', 2.5, {scale:0, ease: SlowMo.ease.config(0.7, 0.7, false) });
    $("h1").click(function (){
        TweenMax.staggerTo('img', 1, {scale:0 }, .15);
        TweenMax.to('h1', 2, {scale:0, ease: Elastic.easeIn.config(1, 0.3), });
        setTimeout(function(){ window.location.href = "FoodPageHome.php";; }, 1980);
         
        

    })
   </script>





    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</html>