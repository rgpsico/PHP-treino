<html>
<head>
	<meta charset="UTF-8">
	<title>Aula 09 doom</title>
</head>


	<body>	


<script>
//parei aos 21 minutos


/*

document.baseURI  / document.body / document.doctype / document.documentURI / document.domain /document.head
document.inputEncding / document.liasModified / document.title / document.URL
document.forms / dcument.title /document.images /document.scripts





document.getElementById('#id').innerHTML = "valor";
  
document.getElementById('#id') 
.innerHTML



  document.getElementById('demo').innerHTML
  = 'Texto do meu paragrafo';

para pegar o elemento pela tag usa :
  document.getElementsByTagName('p');

  pegando elemento pelo nome da classe
  document.getElementsByClassName('exemplo');

  como modificar um valor dentro de uma classe
lembrando que tudo e feito atraves de uma array 
e para a gente modificar precisamos inserir a 
variavel e o numer do array.
var x = document.getElementsByClassName('exemplo');
x[0].innerHTML = 'texto 0';
x[1].innerHTML = 'texto 1';

Buscand a propiedade atraves do seletor;


var x = document.querySelectorAll('div.teste');


escrevendo diretamente no documento;

document.write('texto');


como mudar os atributos do elemento:
document.getElementById('imagem').src = "foto.jpg";

atributo alt:

document.getElementById('imagem').alt = "atrbuto alt";


Mudando o estilo dos elementos:

document.getElementById('demo').style.color = 'red';


onload = "funcao"; //quando a pagina for carregada



onchange="funcao"// quando mudar o valor 



<select name="" id="" onchange="funcao()">
  
<option value="opcao-1">opcao-1</option>
<option value="opcao-2">opcao-2</option>
<option value="opcao-3">opcao-3</option>

</select>


*/
</script>






















<script>

/*
Como usar os eventos :
eventos de clique 
<h1 onclick="bt()"> clique aqui </h1>

<h1 onclick="this.innerHTML = 'obrigado' ">clique aqui</h1>


Fazendo atraes de função :


<h1 onclick="funcao(this)">clique aqui</h1>

function funcao(elemento){
elemento.innerHTML = 'obrigado';


}

//outra forma


function funcao(elemento){
document.getElementById('demo').innerHTML 
= 'obrigado';
}



document.getElementById('demo').onclick 
= funcao;

/
onchange:
onclick:
onload:
onmouseover:
oumouseout:
onfocus:
onmousedown:
onmouseup:

/






*/
</script>


<h1 id="demo" onmouseover="funcao1(this)" onmouseout="funcao2(this)" 

>passeo o mouse aqui</h1>



<script>

function funcao1(elemento){
elemento.innerHTML = 'ok , mouse sobre o elemento';
}


function funcao2(elemento){
elemento.innerHTML = "passe o mause aqui";

}

</script>


	



</body>

</html> 