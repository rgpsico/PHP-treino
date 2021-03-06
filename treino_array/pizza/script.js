let modalQt  = 1;
let cart     = [];
let modalKey = 0;
const c      = (el)=> document.querySelector(el);
const cs     = (el)=> document.querySelectorAll(el);

pizzaJson.map((item , index)=>{
	let pizzaItem = c('.models .pizza-item').cloneNode(true);
       //preencher as informaões em pizzaItem

pizzaItem.querySelector('.pizza-item--img img').src = item.img;

pizzaItem.setAttribute('data-key',index);//pega o valor do atributo data-key
pizzaItem.querySelector('.pizza-item--name').innerHTML   = item.name;
pizzaItem.querySelector('.pizza-item--desc').innerHTML   = item.description;
pizzaItem.querySelector('.pizza-item--price').innerHTML  = `R$ ${item.price.toFixed(2)}`;




//listagem das pizzas 
pizzaItem.querySelector('a').addEventListener('click',(e)=>{
	e.preventDefault(); //previna a ação padrão
   
   let key   = e.target.closest('.pizza-item').getAttribute('data-key');
    modalQt  = 1;
    modalKey = key;
 c('.pizzaBig img').src                    = pizzaJson[key].img;
 c('.pizzaInfo h1').innerHTML              = pizzaJson[key].name;
 c('.pizzaInfo--desc').innerHTML           = pizzaJson[key].description;
 c('.pizzaInfo--actualPrice').innerHTML    = `R$ ${pizzaJson[key].price.toFixed(2)}`;
 c('.pizzaInfo--size.selected').classList.remove('selected');

  cs('.pizzaInfo--size').forEach((size , sizeIndex)=>{

	if(sizeIndex == 2){
		size.classList.add('selected');
	}

 size.querySelector('span').innerHTML = pizzaJson[key].sizes[sizeIndex];
});

 c('.pizzaInfo--qt').innerHTML        = modalQt;
 c('.pizzaWindowArea').style.opacity  = 0      ;
 c('.pizzaWindowArea').style.display  = 'flex' ;
  
  setTimeout(()=>{
 c('.pizzaWindowArea').style.opacity = 1;
}, 200);

}); //clique no link  fim da listagem das pizzas

 c('.pizza-area').append(pizzaItem);

 });


//eventos do modal 
function closeModal(){
	c('.pizzaWindowArea').style.opacity = 0;
	setTimeout(()=>{
		c('.pizzaWindowArea').style.display = 'none';
	},500)

}

cs('.pizzaInfo--cancelButton ,.pizzaInfo--cancelMobileButton').forEach((item)=>{
	item.addEventListener('click',closeModal);

});




c('.pizzaInfo--qtmenos').addEventListener('click',()=>{
	if(modalQt > 1){
       modalQt--;
	c('.pizzaInfo--qt').innerHTML = modalQt;
	}
	

});

c('.pizzaInfo--qtmais').addEventListener('click',()=>{
	modalQt++;
	c('.pizzaInfo--qt').innerHTML = modalQt;

});



cs('.pizzaInfo--size').forEach((size,sizeIndex)=>{
size.addEventListener('click',(e)=>{
	c('.pizzaInfo--size.selected').classList.remove('selected');
	size.classList.add('selected');
    
   });
});






 //Qual a pizza ?
//console.log("pizza: "+modalKey);
//qual o tamanho  ?
//console.log('tamanho:'+size);
//quantas pizzas ?
//console.log('Quantidade:'+modalQt);
c('.pizzaInfo--addButton').addEventListener('click',()=>{
let size = c('.pizzaInfo--size.selected').getAttribute('data-key');
let identifier = pizzaJson[modalKey].id+'@'+size;
let key = cart.findIndex((item)=> item.identifier == identifier);


size = parseInt(size);
    if(key > -1){
         cart[key].qt += modalQt;
     }else{
          cart.push({
          identifier,	
          id:pizzaJson[modalKey].id,
          size,
          qt:modalQt
                     });
   }
               
         closeModal();
         updateCart();
});

c('.menu-openner').addEventListener('click' ,() => {
 if(cart.length > 0){
	c('aside').style.left=0;
}
});
c('.menu-closer').addEventListener('click',()=> {


c('aside').style.left = '100vw';

});

function updateCart(){
	c('.menu-openner span').innerHTML = cart.length;
 if(cart.length > 0){
  //mosrta o carro <side>
      c('aside').classList.add('show');       
      c('.cart').innerHTML = '';

    let subtotal = 0;
    let desconto = 0;
    let total     = 0;




       for (let i in cart) {       	
       	let pizzaItem = pizzaJson.find((item)=>item.id == cart[i].id);
       	subtotal+= pizzaItem.price * cart[i].qt;

       	let cartItem = c('.models .cart--item').cloneNode(true);
              
              switch(cart[i].size){
                     case 0:
                     pizzaSizeName = 'P';
                     break;
                    case 1:
                     pizzaSizeName = 'M';
                     break;
                     case 2:
                     pizzaSizeName = 'G';
                     break

              }

                          

            let pizzaName = `${pizzaItem.name} (${pizzaSizeName})`;
                    c('.cart').append(cartItem);
                    cartItem.querySelector('img').src = pizzaItem.img;
                    cartItem.querySelector('.cart--item-nome').innerHTML = pizzaName;
                    cartItem.querySelector('.cart--item--qt').innerHTML = cart[i].qt
                    cartItem.querySelector('.cart--item-qtmenos').addEventListener('click', ()=>{
                 
                                 
                                 if(cart[i].qt > 1){
                                 	cart[i].qt--;

                                 }else{
                                 	cart.splice(i, 1);

                                 }      
                                 updateCart();                    
                       });
                 
                     	
                      cartItem.querySelector('.cart--item-qtmais').addEventListener('click',()=>{
                           cart[i].qt++;
                           updateCart();
                     });

                      c('.cart').append(cartItem);
                      form = $('form');
                      form.append('<input type="text" class="itemDescription'+[i]+'" name="itemDescription'+[i]+'" value="'+pizzaName+'">');
                      form.append('<input type="text" class="cart'+[i]+'" name="itemQuantity'+[i]+'" value="'+cart[i].qt+'">');
                     
                     
             
                     }

      desconto = subtotal * 0.1;
      total    = subtotal - desconto;
      c('.subtotal span:last-child').innerHTML =  `R$ ${subtotal.toFixed(2)}`;
      c('.desconto span:last-child').innerHTML =  `R$ ${desconto.toFixed(2)}`;
      c('.total span:last-child').innerHTML    =  `R$ ${total.toFixed(2)}`;
      form.append('<input type="text" class="itemAmount" name="itemAmount" value="'+total.toFixed(2)+'">');


   }else{     

//remova o carro
 c('aside').classList.remove('show');
 c('aside').style.left = '100vw';
 }

}//fim update


/*
Usaro: CLONENODE
usar:  size.classList.add('selected');
usar: getAttribute
usar: find 
usar: map
usar: findIndex
usar:  c('.subtotal span:last-child').innerHTML = total;

*/

c('.pizzaInfo--qtmais').addEventListener('click',()=>{
	modalQt++;
	c('.pizzaInfo--qt').innerHTML = modalQt;

});

c('.cart--finalizar').addEventListener('click',()=>{
   var data = $('form').serialize();
   //console.log(data)
	$.post('php/pagseguro.php',data,function(data){
      console.log(data);
  // window.location.href="https://pagseguro.uol.com.br/v2/checkout/payment.html?code="+data;
   })

});