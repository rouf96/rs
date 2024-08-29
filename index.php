<?php include 'include/header.php';
?>
<!--banner-starts-->
<div>
		
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<img src="images/شعار المتجر1.jpg" width="1600px" height="650" alt=""/>
				</li>
				<li>
					<img src="images/عرض1.jpg" width="1500" height="650" alt=""/>
				</li>
				<li>
					<img src="images/عرض 2.jpg" width="1600" height="650" alt=""/>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--about-starts-->
	<div class="about"> 
		<div class="container">
			<div class="about-top grid-1">
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="images/Plu3.JPG" alt=""/>
									
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="images/Plu2.JPG" alt=""/>
									
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="images/Untitled-1.jpg" alt=""/>
									
					</figure>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--about-end-->
	<!--product-starts-->
	<div class="product"> 
		<div class="container">
			<div class="product-top">
				<div class="product-one">
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="details.php" class="mask"><img class="img-responsive zoom-img" src="images/IMG-20240828-WA0060.jpg" alt="" /></a>
							
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="details.php" class="mask"><img class="img-responsive zoom-img" src="images/IMG-20240828-WA0044.jpg" alt="" /></a>
							
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="details.php" class="mask"><img class="img-responsive zoom-img" src="images/IMG-20240828-WA0040.jpg"  alt="" /></a>
							
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="details.php" class="mask"><img class="img-responsive zoom-img" src="images/IMG-20240828-WA0037.jpg" alt="" /></a>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="product-one">
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="details.php" class="mask"><img class="img-responsive zoom-img" src="images/IMG-20240828-WA0038.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="details.php" class="mask"><img class="img-responsive zoom-img" src="images/IMG-20240828-WA0039.jpg" alt="" /></a>
			
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="details.php" class="mask"><img class="img-responsive zoom-img" src="images/IMG-20240828-WA0042.jpg" alt="" /></a>
							
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="details.php" class="mask"><img class="img-responsive zoom-img" src="images/IMG-20240828-WA0041.jpg" alt="" /></a>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>					
			</div>
		</div>
	</div>
	<!--product-end-->
	<?php include 'include/footer.php';?>