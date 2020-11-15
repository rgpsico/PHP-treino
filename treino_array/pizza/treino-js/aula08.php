<html>
<head>
	<meta charset="UTF-8">
	<title>Aula 08</title>
</head>
	<body>
<p>Informe um numero entre 10 e 20 </p>		
<input type="text" id="numero">
<button onclick="verificar()">Verificar</button>

<p id="msg"></p>

<script>



/*
tratamento de erro 


document.getElementByid('#id').value; //responsavel por pegar o valor digitado no campo com o mesmo id 

document.getElementByid('msg').innerHTML = 'mensagem a sr escrita';  serve para escrever dentro do elemento com o mesmo id no caso o elemento que tem o id msg 

isNan(x)
Number(x);
finally

*/



function verificar(){
var x = document.getElementById('numero').value; //pega o valor do campo com o id numero 
try{
if (x == '')  throw 'Informe um valor'; 
 if(isNaN(x)) throw  'Voce precisa informar um numero';
  x = Number(x);
  if (x < 10 || x > 20) throw 'Informe um numero entre 10 e 20';

 //if (x > 20) throw   'o numero e maior que 20';

document.getElementById('msg').innerHTML =  'perfeito , o VALOR '+x+' ESTA correto';
  

  }catch(erro){
document.getElementById('msg').innerHTML =  'ERRO:'+erro;


  }finally{  //serve para limpar o campo 

    document.getElementById('numero').value = '';
  }



}


 
</script>
























		
	</body>

</html>