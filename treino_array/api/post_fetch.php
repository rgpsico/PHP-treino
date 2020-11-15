<?php 
$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38';
header('x-access-token:'.$token.'');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
    <form action=""  id="form_date" >
    <input type="text"  name="title" value=""><br>
    <input type="text"  name="body" value=""><br>
    <input type="text"  name="id"    value=""><br>
<input type="submit" value="enviar">
    </form>
</body>

<script src='fetch/feegow.js'></script>
</html>