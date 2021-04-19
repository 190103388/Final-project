let carts = document.querySelectorAll('.btn');

let product =[
	{
		name: 'РозаБэлла3',
		tag:'productt-8',
		price:556990.0,
		inCart:0
	},
	{
		name: 'РозаБэлла',
		tag:'productt-2',
		price:490000.0,
		inCart:0
	},
	{
		name: 'Сакура',
		tag:'productt-3',
		price:359000.0,
		inCart:0
	},


]

for(let i =0; i < carts.length;i++){
	carts[i].addEventListener('click',() =>{
		curNumbers(product[i]);
		totalCost(product[i])
	});
}

function onloadCartsNumbers(){
	let productNumber = localStorage.getItem('cartNumbers');
	if (productNumber) {
		document.querySelector('.cart span').textContent =productNumber;
	}
}


function curNumbers(product) {

	let productNumber = localStorage.getItem('cartNumbers');



	productNumber = parseInt(productNumber);
	if (productNumber) {
		localStorage.setItem('cartNumbers',productNumber+1);
		document.querySelector('.cart span').textContent = productNumber+1;
	}else{
		localStorage.setItem('cartNumbers',1);
		document.querySelector('.cart span').textContent = 1;

	}
	setItems(product);
	
}

function setItems(product){
	let cartItems = localStorage.getItem('productsInCart');
	cartItems = JSON.parse(cartItems);
	console.log(cartItems);


	if (cartItems != null) {
		if (cartItems[product.tag] == undefined) {
			cartItems={
				...cartItems,
				[product.tag]:product
			}
		}
		cartItems[product.tag].inCart +=1;
	}else{
		product.inCart =1;
		cartItems ={
			[product.tag]:product
		}
	}
	
	localStorage.setItem('productsInCart',JSON.stringify(cartItems));
}

function totalCost(product){
	// console.log(product.price);
	let cartCost = localStorage.getItem('totalCost');
	
	if (cartCost != null) {
		cartCost= parseInt(cartCost);
		localStorage.setItem('totalCost',cartCost + product.price);
	}else{
		localStorage.setItem("totalCost",product.price);

	}

}

function displayCart(){
	let cartsItems = localStorage.getItem('productsInCart');
	cartsItems = JSON.parse(cartsItems);
	let productContainer = document.querySelector('.products');
	let cartCost = localStorage.getItem('totalCost');

	if (cartsItems && productContainer ) {
		productContainer.innerHTML = '';
		Object.values(cartsItems).map(item =>{
			productContainer.innerHTML +=`
			<div class="product">
				<ion-icon name="close-circle" onclick="deleteElement(${item.tag})"></ion-icon>
				<img src = "images/${item.tag}.jpg" width="100px">
				<span>${item.name}</span>
			</div>
			<div class="prices">${item.price}</div>
			<div class="quantity">
				<span>${item.inCart}</span>
			</div>
			<div class="total">
				${item.inCart *item.price}.00
			</div>
			`
		});

		productContainer.innerHTML +=`
		<div class ="basketTotalConteiner">
			<h4 class ="basketTotalTittle">
				ИТОГ
			</h4>
			<h4 class="basketTotal">
				KZT ${cartCost},00
			</h4>
		</div>
		`

	}

}
function deleteElement(item){
	localStorage.removeItem(item.name);
	displayCart();
}


displayCart();
onloadCartsNumbers();
