

/*
var body = document.querySelector("#body");

var id = document.querySelector("#id")
var title = document.querySelector("#title")


var form = document.querySelector('#form');
form.addEventListener('submit',function(e){
      
    console.log(body);
    e.preventDefault();

fetch("https://jsonplaceholder.typicode.com/posts",{
method:"POST",
body:JSON.stringify({
    title:title.value,
    body:body.value,
    id:id.value
}),
headers:{
"Content-type":"application/json; charset=UTF-8"
}

})
.then(function(response){
    return response.json()

})
.then(function(data){
    return console.log(data);
    var results = document.getElementById('results');

    results.innerHTML =`<p>The title of the todo is
     ${data.title} <p>`;
})


})
*/

var formulario = document.getElementById('form_date');
formulario.addEventListener('submit',function(e){
e.preventDefault();
var dados = new FormData(formulario);
dados.get('title');
dados.get('body');
dados.get('id');

fetch('response.php',{
method:'POST',
body:dados
})
.then(res => res.json)
.then(data=>{
console.log(data);

});


})