<?php
       $domOBJ = new DOMDocument();
       $domOBJ->load("http://localhost/book/rss.php");//XML page URL

       $content1 = $domOBJ->getElementsByTagName("romance");
       $content2 = $domOBJ->getElementsByTagName("actionandadventure");
       $content3 = $domOBJ->getElementsByTagName("comedy");
       $content4 = $domOBJ->getElementsByTagName("thriller");
?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Book</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="#romance">Romance</a></li>
				          <li><a href="#actionandadventure">Action and Adventure</a></li>
				          <li><a href="#comedy">Comedy</a></li>
				          <li><a href="#thriller">Thriller</a></li>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h5 class="text-white text-uppercase">Maja and Lim's Book Portal</h5>
							<h1 class="text-uppercase">
								Fiction books to read in a lifetime
							</h1>
							<p class="text-white pt-20 pb-20">
                Books have always been a part of our lives. We have been reading different tales from the world of fiction and sometimes nonfiction ever since we were children. Books have always been there, in different sizes, languages, colors and patterns. Every book written since the beginning of the time tells a different tale tangled in different emotions, such as love, hate, compassion, anger, sadness, excitement, fear etc.

Different emotions, different genre each tale of fiction and nonfiction has touched millions of heart. Even in today's era, when the majority is inclined to video games and online streaming, there are millions of people who still prefer to read. Every book is an escape from reality; every book is a new door to the world of creativity and imagination.

To honor this creativity and adventure, we have assembled the most recommended books that i have read of all time, which you may have already read. So let's begin the adventure.
							</p>
						</div>
						<div class="col-lg-5 banner-right">
							<img class="img-fluid" src="img/1.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start about Area -->
      <!-- Romance -->
			<section class="section-gap info-area" id="romance">
				<div class="container">
					<div class="single-info row mt-40 align-items-center">
						<div class="col-lg-6 col-md-12 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="img/romance.png" class="img-fluid info-img" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
                  <h2 class="pb-30">Romance Books</h2>
									<?php
					              foreach($content1 as $data1)
					        {
					           $Title = $data1->getElementsByTagName("Title")->item(0)->nodeValue;
					           $Author = $data1->getElementsByTagName("Author")->item(0)->nodeValue;
                     $Date = $data1->getElementsByTagName("Date")->item(0)->nodeValue;
					           $Description = $data1->getElementsByTagName("Description")->item(0)->nodeValue;
					           echo "<ul><h2>$Title</h2>
					                    <ul>
					                        <li><i>$Author</i></li>
                                  <li><i>$Date</i></li>
					                        <li>$Description</li><br>

					                    </ul>
					                </ul>";
					              }
					?>
								</p>
								</div>
						</div>
					</div>
				</div>
			</section>

      <!-- Action and Adventure -->
      <section class="section-gap info-area" id="actionandadventure">
				<div class="container">
					<div class="single-info row mt-40 align-items-center">
						<div class="col-lg-6 col-md-12 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="img/actionandadventure.png" class="img-fluid info-img" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
                <h2 class="pb-30">Action and Adventure Books</h2>
									<?php
					              foreach($content2 as $data2)
					        {
					           $Title = $data2->getElementsByTagName("Title")->item(0)->nodeValue;
					           $Author = $data2->getElementsByTagName("Author")->item(0)->nodeValue;
                     $Date = $data2->getElementsByTagName("Date")->item(0)->nodeValue;
					           $Description = $data2->getElementsByTagName("Description")->item(0)->nodeValue;
					           echo "<ul><h2>$Title</h2>
					                    <ul>
					                        <li><i>$Author </i></li>
                                  <li><i>$Date</i></li>
					                        <li>$Description</li>

					                    </ul>
					                </ul><br>";
					              }
					?>
								</p>
								</div>
						</div>
					</div>
				</div>
			</section>

      <!-- Comedy -->
      <section class="section-gap info-area" id="comedy">
				<div class="container">
					<div class="single-info row mt-40 align-items-center">
						<div class="col-lg-6 col-md-12 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="img/comedy.png" class="img-fluid info-img" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
                  <h2 class="pb-30">Comedy Books</h2>
									<?php
					              foreach($content3 as $data3)
					        {
					           $Title = $data3->getElementsByTagName("Title")->item(0)->nodeValue;
					           $Author = $data3->getElementsByTagName("Author")->item(0)->nodeValue;
                     $Date = $data3->getElementsByTagName("Date")->item(0)->nodeValue;
					           $Description = $data3->getElementsByTagName("Description")->item(0)->nodeValue;
					           echo "<ul><h2>$Title</h2>
					                    <ul>
					                        <li><i>$Author</i></li>
                                  <li><i>$Date</i></li>
					                        <li>$Description</li><br>

					                    </ul>
					                </ul>";
					              }
					?>
								</p>
								</div>
						</div>
					</div>
				</div>
			</section>

      <!-- Thriller -->
      <section class="section-gap info-area" id="thriller">
				<div class="container">
					<div class="single-info row mt-40 align-items-center">
						<div class="col-lg-6 col-md-12 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="img/thriller.png" class="img-fluid info-img" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
                  <h2 class="pb-30">Thriller Books</h2>
									<?php
					              foreach($content4 as $data4)
					        {
					           $Title = $data4->getElementsByTagName("Title")->item(0)->nodeValue;
					           $Author = $data4->getElementsByTagName("Author")->item(0)->nodeValue;
                     $Date = $data4->getElementsByTagName("Date")->item(0)->nodeValue;
					           $Description = $data4->getElementsByTagName("Description")->item(0)->nodeValue;
					           echo "<ul><h2>$Title</h2>
					                    <ul>
					                        <li><i>$Author</i></li>
                                  <li><i>$Date</i></li>
					                        <li>$Description</li><br>

					                    </ul>
					                </ul>";
					              }
					?>
								</p>
								</div>
						</div>
					</div>
				</div>
			</section>

			<!-- End about Area -->



			<!-- Start testomial Area -->
			<section class="testomial-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">What our Reader’s Say about us</h1>
								<p>Who are in extremely love with our book recommendation.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-tstimonial-carusel">
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, ipsum luctus rhoncus tristique, justo lacus efficitur felis, at fermentum turpis eros nec ante. Cras posuere semper quam sit amet faucibus. Suspendisse pellentesque venenatis tortor consequat luctus.
								</p>
								<h4>Konnor Boyd</h4>
								<p>
									Computer Applications Engineer
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, ipsum luctus rhoncus tristique, justo lacus efficitur felis, at fermentum turpis eros nec ante. Cras posuere semper quam sit amet faucibus. Suspendisse pellentesque venenatis tortor consequat luctus.
								</p>
								<h4>Pearce Drew</h4>
								<p>
									Database Developer
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, ipsum luctus rhoncus tristique, justo lacus efficitur felis, at fermentum turpis eros nec ante. Cras posuere semper quam sit amet faucibus. Suspendisse pellentesque venenatis tortor consequat luctus.
								</p>
								<h4>Ella-May Perry</h4>
								<p>
									Software Applications Architect
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, ipsum luctus rhoncus tristique, justo lacus efficitur felis, at fermentum turpis eros nec ante. Cras posuere semper quam sit amet faucibus. Suspendisse pellentesque venenatis tortor consequat luctus.
								</p>
								<h4>Bethan Ford</h4>
								<p>
									Software Applications Designer
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, ipsum luctus rhoncus tristique, justo lacus efficitur felis, at fermentum turpis eros nec ante. Cras posuere semper quam sit amet faucibus. Suspendisse pellentesque venenatis tortor consequat luctus.
								</p>
								<h4>Albie Hood</h4>
								<p>
									Software Applications Engineer
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, ipsum luctus rhoncus tristique, justo lacus efficitur felis, at fermentum turpis eros nec ante. Cras posuere semper quam sit amet faucibus. Suspendisse pellentesque venenatis tortor consequat luctus.
								</p>
								<h4>Bella-Rose Rivera</h4>
								<p>
									Application Integration Engineer
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, ipsum luctus rhoncus tristique, justo lacus efficitur felis, at fermentum turpis eros nec ante. Cras posuere semper quam sit amet faucibus. Suspendisse pellentesque venenatis tortor consequat luctus.
								</p>
								<h4>Cairon Johnson</h4>
								<p>
									Applications Developer
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, ipsum luctus rhoncus tristique, justo lacus efficitur felis, at fermentum turpis eros nec ante. Cras posuere semper quam sit amet faucibus. Suspendisse pellentesque venenatis tortor consequat luctus.
								</p>
								<h4>Danyaal Costa</h4>
								<p>
									Computer Applications Developer
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, ipsum luctus rhoncus tristique, justo lacus efficitur felis, at fermentum turpis eros nec ante. Cras posuere semper quam sit amet faucibus. Suspendisse pellentesque venenatis tortor consequat luctus.
								</p>
								<h4>Vienna Doyle</h4>
								<p>
									Computer Applications Engineer
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End testomial Area -->


			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
