
<html>
<head>
	<meta charset="UTF-8">
	<title>aula 04</title>
</head>
	<body>
		

<script>

	var nome = 'Ricardo';
	var SobreNome = 'Bernardi';
	var idade = 32 ;
	//var pessoa = ['Ricardo','Bernardi','32'];
	var frutas = ['laranja','abacate','melancia'];
	
	
    //criando objeto pessoa 
	var pessoa  = {
	nome:'Ricardo', 
	SobreNome:'bernadi',
    idade:32 ,
    andar: function(){

     	alert('caminhando');
     }



     };


//frutas.push('pitanga');  push add o item no array 
//console.log(frutas.toString());   transforma em string    
// console.log(frutas.join(' ? ')); separa com o que por dentro 
//frutas.pop(); remove o ultimo elemento do array 
//frutas.shift(); removeo primeiro
//frutas.unshift('pitanga'); add no primeiro indice do array 
//frutas.sort(); em ordem alfabetica
//frutas.reverse; ordem inversa
frutas.reverse();
     console.log(frutas);
		</script>
























		
	</body>

</html>