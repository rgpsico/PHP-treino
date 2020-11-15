<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<button id="bt">add<button>
    <div class="Main">

    </div>
    
<script>

$(document).ready(function(){
    $(document).on("click", "#apagar", function() {
        var id =       $(this).attr("data-key");
         $('.teste'+id).toggle();

});
var count = 0;
$('#bt').click(function(){
   count ++;
    var teste  =`<div class="teste" style="border:1px solid;">
  
    <div class="teste">teste02</div>
    <div class="teste">teste03</div>
    <div class="teste${count}" data-key='' style="display:none;" >teste04</div>
    <div class="teste">teste05</div>
   </div>

   <br/>
   <div id="apagar"  data-key='${count}' >apagar</div>
    <hr/>
`;
$('.Main').append(teste);
});

})




</script>
</body>
</html>