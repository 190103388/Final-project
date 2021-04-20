	
<div style="clear: both" class="footer" >
		<div class="container2">
			<div class="row">
				<div class="footer-col-1">
					<h4>{{__('profile.download')}}</h4>
					<p>{{__('profile.ios')}}</p>
					<div class="app-logo">
						<img src="{{ URL::to('/img/images/play-store.png') }}">
						<img src="{{ URL::to('/img/images/app-store.png') }}">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="{{ URL::to('/img/logo-white.png') }}">
					<p>{{__('profile.des')}}</p>
				</div>
				<div class="footer-col-3">
					<h4>{{__('profile.kent')}}</h4>
					<ul>
						<li>Kaspi Bank</li>
						<li>AlfaBank</li>
						<li>ATF Bank</li>
						<li>Престиж Мебель</li>
					</ul>
				</div>
				<div class="footer-col-3">
					<h4>Follow us</h4>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>Rember</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyrigth">Copyrigth 2021 - Arsen Ulykbekov</p>
		</div>
</div>

<style type="text/css">
	.footer{
	background: #000;
	color: #8a8a8a;
	font-size: 14px;
	padding: 60px 0 20px;
}
.footer p{
	color: #8a8a8a;
}
.footer h4{
	color:#ffff;
	margin-bottom: 20px;
}
.footer-col-1,.footer-col-2,.footer-col-3,.footer-col-4{
	min-width: 250px;
	margin-bottom: 20px;
}
.footer-col-1{
	flex-basis: 30%;

}
.footer-col-2{
	flex: 1;
	text-align: center;
}
.footer-col-2 img{
	width: 180px;
	margin-bottom: 20px;
}
.footer-col-3,.footer-col-4 {
	flex-basis: 12%;
	text-align: center;

}
ul{
	list-style-type:none;

}
.app-logo{
	margin-top: 20px;
}
.app-logo img{
	width:140px; 
}
.footer hr{
	border: none;
	background: #b5b5b5b5;
	height: 1px;
	margin: 20px 0;

}
.copyrigth{
	text-align: center;

}

.menu-icon{
	width: 28px;
	margin-left: 20px;
	display: none;
}
</style>