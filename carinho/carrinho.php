<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    .carrinho{
        display:flex;
        
    
    
    }
     </style>
    <h2 class="title">Carrinho com PHP</h2>

    <div class="carinho-container">
    <?php
     $items = array(
         ['nome'=>'curso1' , 'imagem'=>'item1.png','preco'=>'100'],
         ['nome'=>'curso2' , 'imagem'=>'item2.png','preco'=>'10'],
         ['nome'=>'curso3' , 'imagem'=>'item3.png','preco'=>'300'],
         ['nome'=>'curso3' , 'imagem'=>'item3.png','preco'=>'300'],
         ['nome'=>'curso3' , 'imagem'=>'item3.png','preco'=>'300'],
     
     );
    foreach($items as $key =>  $value):
    ?>
    
    <div class="produto">
    <img src="img/<?php echo $value['imagem']?>" alt="">
    <a href="?adicionar=<?php echo $key ?>">Adicionar ao Carrinho</a>
    </div>
    
 <?php endforeach; ?>
    
     </div><!-- carrinho container !-->

     <?php 
     if(isset($_GET['adicionar'])){
  $idProduto = (int) $_GET['adicionar'];  
   
  if(isset($items[$idProduto])){
       if(isset($_SESSION['carrinnho'][$idProduto])){
           $_SESSION['carrinho'][$idProduto]['quantidade']++;
       }else{
           $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1, 
           'nome'=>$items[$idProduto]['nome'], 'preco'=>$items[$idProduto]['preco']);

       }
     
    }else{
        die('Voce não pode adicionar um item que nao existe');
    }
   } 
     ?>



<hr/>
     <?php 

  foreach($_SESSION['carrinho'] as $key=> $value){
      $preco = ($value['quantidade'] * $value['preco']);
     @$valor_total += $preco;
  echo "<div class='carrinho-itens'>";
  echo '<p>Nome:'.$value['nome'].'|Quantidade'.$value['quantidade'].'|Preço:'.$preco.'</p>';
  echo "<hr/>";
   
  echo "</div>";
     }
   echo $valor_total;
     ?>
</body>
</html>