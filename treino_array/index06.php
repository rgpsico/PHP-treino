<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$nome = "";
foreach($age as $x => $val) {
   if($val == 37 || $val == 43){
     $nome = $age[0];
   }else{
       echo "Não é igual a 37<br>";
   }
   echo $nome."<br/>";
}
?>