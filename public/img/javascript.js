let cart = document.querySelectorAll('.col-4');


let product =[
	{
		name: 'РозаБэлла3',
		tag:'productt-8',
		price:556990.0,
		link:1,
		inCart:0
	},
	{
		name: 'РозаБэлла',
		tag:'productt-2',
		price:490000.0,
		link:2,
		inCart:0
	},
	{
		name: 'Сакура',
		tag:'productt-3',
		price:359000.0,
		link:3,
		inCart:0
	},


]

for(let i =0; i<cart.length;i++){
	cart[i].addEventListener('click',() =>{
		curNumbers(product[i]);
	});
}
function curNumbers(product) {
	setItems(product);	
}

function displayCart(){
	let cartsItems = localStorage.getItem('productsInCart');
	cartsItems = JSON.parse(cartsItems);
	let productContainer = document.querySelector('.col-2');
	// let cartCost = localStorage.getItem('totalCost');

	if (cartsItems && productContainer ) {
		productContainer.innerHTML = '';
		Object.values(cartsItems).map(item =>{
			productContainer.innerHTML +=`
			<img src="${item.link}/gallery-1.jpg" width="100%" id="productImg">
				<div class="small-img-row">
					<div class="small-img-col">
						<img src="${item.link}/gallery-1.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="${item.link}/gallery-2.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="${item.link}/gallery-3.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="${item.link}/gallery-4.jpg" width="100%" class="small-img">
					</div>
				</div>
			`
		});

		// productContainer.innerHTML +=`
		// <div class ="basketTotalConteiner">
		// 	<h4 class ="basketTotalTittle">
		// 		ИТОГ
		// 	</h4>
		// 	<h4 class="basketTotal">
		// 		KZT ${cartCost},00
		// 	</h4>
		// </div>
		// `

	}

}
function setItems(product){
	let cartItems = localStorage.getItem('products');
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
	
	localStorage.setItem('products',JSON.stringify(cartItems));
}
displayCart();