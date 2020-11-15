<html>
<head>
	<meta charset="UTF-8">
	<title>Aula 07 laços de repetição</title>
</head>
	<body>
		

<script>
  /*

   == igual a  
   === igual ao valor e ao tipo 
   != diferente de 
   !== diferente de valor e tipo 
   > maior que 
   < menor que 
   >= maior ou igual 
   <= menor ou igual 

   && e 
   || ou 
   ! não não existe 





*
  var idade    = 20;
  var situacao = (idade >= 18) ? 'maioridade' : 'Menor' ;
  console.log(situacao);
var n = 5;
if(n > 5){
console.log('condição verdadeira');
}else if(n == 5){
console.log('segunda condição verdadeira');
}else {
console.log('condição falsa');
}
  */



/*

var diasemana = new Date().getDay();

switch(diasemana){
case 6:
console.log('hoje e sabado partiu balada');
break;
case 0:
console.log('Hoje e domingo #curandoressaca');
break;
default:
console.log('dia normal: trabalho + estudo');

}




var linguagem = ['PHP','JAVA','C++','ASP'];


for(contador=0; contador< linguagem.length; contador++){
if(contador == 2) break;
console.log(linguagem[contador]);


}

*/

var contador  = 0;
var linguagem =  ['PHP','JAVA','C++','ASP'];
while(contador < linguagem.length){
console.log(linguagem[contador]);
contador++;

}
do{
console.log(linguagem[contador]);
contador++;
}while(contador < linguagem.lenght);













































</script>
























		
	</body>

</html>