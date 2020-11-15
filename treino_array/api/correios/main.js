
const cep = document.querySelector("#cep");

const Cmpo_tex =( result)=>{
for(const campo in result){
    if(document.querySelector('#'+campo)){
        document.querySelector('#'+campo).value = result[campo]
    }
   }
 }

cep.addEventListener("blur",(e)=>{
    let search = cep.value.replace( '-','')
const option = {
    method: 'GET',
    mode:'cors',
    cache: 'default'
}

fetch(`https://viacep.com.br/ws/${search}/json/`,option)
.then(response=>{response.json()
    .then(data=>Cmpo_tex(data))
    


})
.catch(e=>console.log('deu Erro:'+e,message));

});