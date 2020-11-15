<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Bootstrap Multi Select Dropdown with Checkboxes using Jquery in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
 
  <script>
      $(document).ready(function(){
          $('ul').on('click',function(){
             $(this).fadeOut(500);
        });    

          $('#btnAdd').on('click',function(){
           var newListItem = $('<li>New List Item</li>'). on('click',function(){
               $(this).fadeOut(500);
           });

           $('ul').append(newListItem);
          });
      });
      
  </script>

</head>
 <body>
 <input type="text" id="btnAdd" value="add new">
 <ul>
     <li>list item</li>
     <li> list item</li>
 </ul> 
 
 </body>
</html>

<script>
</script>