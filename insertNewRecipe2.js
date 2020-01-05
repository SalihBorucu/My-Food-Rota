// ADD Ingredient

var i = 1;
$( "#addBtn" ).click(function() {
  i++
  var numIngredient = "ingredient"+i; 
  var numIngredientAmount = "ingredient"+i+"Amount";
  
if (i < 10) {
  $("#ingredients").append(
"<div class='container'>"
+"<div class='row'>"
+"<div class='form-group'>"
+"<select class='form-control' type='text' name=" + numIngredientAmount + " id='selectAmount'>"
+"<option>1</option>"
+"<option>2</option>"
+"<option>3</option>"
+"<option>4</option>"
+"<option>5</option>"
+"</select> </div> "
+"<div class='form-group'> <input class='form-control' type='text' name=" + numIngredient + " placeholder='Ingredient x1' ></div>")
+"</div> </div>";
} else {
    $("#ingNo").html("<div class='alert alert-danger' role='alert'> No more ingredients mofo! </div>")}
});

// REMOVE Ingredient
  $( "#removeBtn" ).click(function() {
    if(i != 1){ i--;};
    $("#ingredients").children().last().remove();
  });
