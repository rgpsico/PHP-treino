<html>
<head>
	<meta charset="UTF-8">
	<title>JavaScript Essencial - datae hora</title>
</head>
	<body>
		

<script>

/*



*/
     var d = new Date();
      //var d = new Date(84640000);
//  console.log(d.toUTCString());
      // console.log(d.toDateString());
  /*
      console.log('getDate'+ d.getDate());
     

 console.log('getDate ' + d.getDate());
 console.log('getDay ' + d.getDay());

console.log('getFullYear '+ d.getFullYear());
console.log('getHours '+ d.getHours());
console.log('getMilliseconds  '+ d.getMilliseconds());
console.log('getMinutes '+ d.getMinute());
console.log('getMonth '+ d.getMonth());
console.log('getSeconds '+ d.getSeconds());
console.log('getTimes '+ d.getTimes());
d.setDate(20);
console.log(d);

*/

function formdate(data = new Date()){
 var dia = data.getDate();
 var mes = data.getMonth()+1;
 var ano = data.getFullYear();

if(dia.toString().length == 1) 
	dia = '0'+dia;

if(mes.toString().length == 1) 
	mes = '0'+mes;

return dia+'/'+mes+'/'+ano;
}

console.log(formdate());



</script>
























		
	</body>

</html>