<html>
	<head>
		<charset="ISO">

	</head>
	<title>Aula 10</title>
<style>
	.zebrada{background:silver;}

</style>
	<body>
<!--

	Aula Sobre o Window
	Pra que serve o window ?
	serve para manipular o nagevador como todo.




---->
<script>
/* Zebrando uma tabela






<table class="zebra">
	<thead>
		<tr>
			
<th>Nome</th>
<th>Fone</th>
		</tr>


	</thead>
	<tbody>
	<tr>
		    <th>Ricardo</th>
            <th>0xx00 0000-0000</th>
	</tr>

 
    
    <tr>
		    <th>eduardo</th>
            <th>0xx00 0000-0000</th>
	</tr>


	<tr>
		    <th>João</th>
            <th>0xx00 0000-0000</th>
	</tr>


	<tr>
		    <th>Pedro</th>
            <th>0xx00 0000-0000</th>
	</tr>	
 


<tr>
		    <th>Maria</th>
            <th>0xx00 0000-0000</th>
	</tr>

	</tbody>

</table>


window.onload = function(){
var zebrar = document.querySelectorAll('.zebra tbody tr');
for(var i=0; i<zebrar.length; i+=2){

//i+= 2 serve para pular uma linha  ou seja vai pegar o numero em par 2 4 6 8



zebrar[i].className = 'zebrada';

//caso queira ver o numero dor FOR  deixe o i 
//console.log(i);


}

}
*/

</script>


		


















<div id="msg"></div>


<script>
/*
console.log(document);
innerWidth = 200;
console.log(window.location.href);
ir e voltar com JS
botão de voltar para pagina anterior e ir pra pagina que acabou de passar
<input type="submit" onclick="window.history.forward();">
<input type="submit" onclick="window.history.back();">
//window.history.back();
//window.history.forward();

armazenamento com JAVAscript

*/

//window.localStorage.setItem('nome', 'Roger'); serrve para armazenar permanente enquanto o usuario nao esvaziar o chache 


//window.sessionStorage.setItem('nome2','Pedro'); serve pra guarda informação somente enquanto o navegador estiver aberto
//document.getElementById('msg').innerHTML = window.sessionStorage.getItem('nome2');
        

//var janela = window.open('https://www.google.com.br/','google','width=500, height=400')
//janela.document.write('Isso e um texto para minha janela popup');
//janela.opener.document.write('Isso e um texto para minha janela popup');
//setTimeout(msgtimeout, 2000);  primeiro parametro função a ser execultada segundo o tempo que a função vai ser execultada 

/*

ex:
<input type="button" onclick="clearTimeout(msg)" value="cancelar"> para limpar o tempo 

setTimeout(msgtimeout, 2000);

function msgtimeout(){
console.log('msg via timeout');

}


contando o tempo 

<input type="button" onclick="clearInterval(msg)" value="cancelar"> para limpar o tempo interval
var msg = setInterval(msgInterval, 1000);
function msgtimeout(){
console.log('msg via timeout');

}



*/

</script>

<input type="button" onclick="clearTimeout(msg)" value="cancelar">
<input type="button" onclick="" value="voltar">
<script>





//var msg = setInterval(msgInterval, 1000);
//var msg = setTimeout(msgtimeout, 5000);
//setInterval(verificaFoco, 200);


var intervalo = setInterval(verificaFoco,1000);
var contador  = 0;
function verificaFoco(){
if(document.hasFocus()){
contador++;
console.log(contador);
if(contador >= 10){
	msgtimeout();
	clearInterval(intervalo);
  }
 }
}

function msgtimeout(){
document.getElementById('msg').innerHTML = 'Obrigado por visitar minha pagina';

}

function msgInterval(){
console.log('msg via timeout');

}


</script>






















	</body>
</html>