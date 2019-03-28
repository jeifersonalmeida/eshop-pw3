<!-- Cart -->
<?php 
	if(!isset($_SESSION["cartList"]))
		$_SESSION["cartList"] = array(
			"sum"=> "0.00",
			"qtt"=>"0",
			"products"=> array(

			)
		);
		//print_r($_SESSION);
?>
<li class="header-cart dropdown default-dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		<div class="header-btns-icon">
			<i class="fa fa-shopping-cart"></i>
			<span class="qty"><?php echo $_SESSION["cartList"]["qtt"]?></span>
		</div>
		<strong class="text-uppercase">My Cart:</strong>
		<br>
		<span>R$<?php echo $_SESSION["cartList"]["sum"]?></span>
	</a>
	<div class="custom-menu">
		<div id="shopping-cart">
			<div class="shopping-cart-list">
				<?php 
					foreach($_SESSION["cartList"]["products"] as $key=>$value) {
						$url = "id=".$value["id"]."&param=".$value["tipo"]."&";
						echo '
						<div class="product product-widget">
							<div class="product-thumb">
								<img src="'.$value["imagem"].'" alt="'.$value["nome"].'">
							</div>
							<div class="product-body">
								<h3 class="product-price">R$'.$value["preco"].' <span class="qty">x1</span></h3>
								<h2 class="product-name"><a href="product.php?';
								echo $url;
								echo '">'.$value["nome"].'</a></h2>
							</div>
							<button class="cancel-btn"><i class="fa fa-trash"></i></button>
						</div>';
					}
				?>					
				
			</div>
			<div class="shopping-cart-btns">
				<button class="main-btn">View Cart</button>
				<button class="primary-btn"><a href= './checkout.php?'>Checkout</a> <i class="fa fa-arrow-circle-right"></i></button>
			</div>
		</div>
	</div>
</li>
<!-- /Cart -->