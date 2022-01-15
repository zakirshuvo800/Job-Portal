<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Jobs.com</title>
	<!-- FONTS -->
	<link rel="stylesheet" href="assets/fonts/fonts.css">
	<!-- FONTAWESOME CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<!-- CSS HERE -->
	<link rel="stylesheet" href="assets/css/animate.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/default.css" />
	<link rel="stylesheet" href="assets/css/shape-divider.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>

	<!--========================== START HEADER SECTION ==========================-->
	<header class="transition-3">
		<nav class="navigation">
			<div class="container d-flex justify-content-between align-items-center">
				<div class="logo">
					<a href="index.html" class=" logo__text">
						Jobs.com
					</a>
				</div>

				<!-- MAIN MENU -->
				<div class="main__menu d-flex align-items-center justify-content-center flex-lg-column">
					<ul class="text-center">
						<li class="d-lg-inline-block">
							<a class="d-inline-block capitalize p__text2" href="#">home</a>
						</li>
						<li class="d-lg-inline-block">
							<a class="d-inline-block capitalize p__text2" href="#">about</a>
						</li>
						<li class="d-lg-inline-block">
							<a class="d-inline-block capitalize p__text2" href="#">category</a>
						</li>
						<li class="d-lg-inline-block">
							<a class="d-inline-block capitalize p__text2" href="#">blog</a>
						</li>
						<li class="d-lg-inline-block">
							<a class="d-inline-block capitalize p__text2" href="#">contact</a>
						</li>
						<li class="d-block d-sm-none ">
							<a href="login.php" class="btn rounded transition-3">Login</a>
						</li>
						<li class="d-block d-sm-none ">
							<a href="signup.php" class="btn new_mar rounded transition-3">Signup</a>
						</li>
						<li class="d-block d-sm-none ">
							<a href="admin-login.php" class="btn new_mar rounded transition-3">Admin</a>
						</li>
					</ul>
				</div>
				<div class="header__btn">
					<ul class="d-flex align-items-center">
						<li class="d-none d-sm-block">
							<a href="login.php" class="btn rounded transition-3">LogIn</a>
						</li>
						<li class="d-none d-sm-block">
							<a href="signup.php" class="btn new_mar rounded transition-3">Signup</a>
						</li>
						<li class="d-none d-sm-block">
							<a href="admin-login.php" class="btn new_mar rounded transition-3">Admin</a>
						</li>
						<li class="">
							<!-- HAMBURGER MENU BTN -->
							<div onclick="myFunction(this)" class="menu__show__icon">
								<div class="bar1 transition-2"></div>
								<div class="bar2 transition-2"></div>
								<div class="bar3 transition-2"></div>
							</div>
						</li>
					</ul>
				</div>
				
			</div>
		</nav>
	</header>
	<!--========================== END HEADER SECTION ==========================-->



	<!-- START MAIN AREA -->
	<main>

		<!--========================== START HERO SECTION ==========================-->
		<section class="hero__section position-relative">
			<div class="container">
				<div class="hero__text wow fadeInUp" data-wow-delay=".2s">
					<p class="p__text1">Hello,are you looking for</p>
					<h1 class="capitalize">JOBs?</h1>
					<p class="p__text1 ">Then, you are in a right place. In here you can find your suitable,desire or your dream jobs. Many multinational and internatinal companies are waiting for YOU. Best of Luck to you.  </p>
					<div class="hero__btn">
						<a href="login.php" class="btn rounded capitalize">Find Jobs</a>
					</div>
				</div>
			</div>

			<!-- Shape Divider -->
			<div class="custom-shape-divider-bottom-1618159713">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
					<path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
				</svg>
			</div>
		</section>
		<!--========================== END HERO SECTION ============================-->


		<!--========================== START SERVICE SECTION ==========================-->
		<section class="service__section">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="service__title wow fadeInUp" data-wow-delay=".2s">
							<h2 class="heading capitalize">Our Feature Job Category</h2>
							<p class="p__text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
							</p>
							<div class="service__btn">
								<a href="login.php" class="btn rounded capitalize">Find Jobs</a>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="row g-5">
							<div class="col-md-6">
								<div class="service__item d-flex shadow-sm wow fadeInUp" data-wow-delay=".3s">
									<div class="service__item__img">
										<img src="assets/images/prototype.png" alt="Engineering">
									</div>
									<div class="service__item__desc">
										<h3 class="capitalize sub__heading">Engineering</h3>
										<p class="p__text">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service__item d-flex shadow-sm wow fadeInUp" data-wow-delay=".4s">
									<div class="service__item__img">
										<img src="assets/images/budget.png" alt="Finance">
									</div>
									<div class="service__item__desc">
										<h3 class="capitalize sub__heading">Finance</h3>
										<p class="p__text">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service__item d-flex shadow-sm wow fadeInUp" data-wow-delay=".5s">
									<div class="service__item__img">
										<img src="assets/images/bank.png" alt="Bank">
									</div>
									<div class="service__item__desc">
										<h3 class="capitalize sub__heading">Bank</h3>
										<p class="p__text">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service__item d-flex shadow-sm wow fadeInUp" data-wow-delay=".6s">
									<div class="service__item__img">
										<img src="assets/images/advertising.png" alt="Marketiong">
									</div>
									<div class="service__item__desc">
										<h3 class="capitalize sub__heading">Marketing</h3>
										<p class="p__text">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--========================== END SERVICE SECTION ============================-->

</main>
	<!--- END MAIN AREA -->


	<!--========================== START FOOTER SECTION ==========================-->
	<footer>
		<div class="container">
			<div class="row gy-5">
				<div class="col-sm-8 col-lg-4">
					<div class="f-c-1 wow fadeInUp" data-wow-delay=".1s">
						<div class="logo f-c">
							<p class="logo__text">Jobs.com</p>
						</div>
						<p class="p__text capitalize c-ff">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						
					</div>
				</div>
				<div class="col-6 col-sm-4 col-lg-3">
					<div class="f__content wow fadeInUp" data-wow-delay=".2s">
						<h3 class="sub__heading f-c c-ff">Feature Job Category</h3>
						<ul>
							<li><a href="#" class="p__text text_ita capitalize c-ff">Enginner</a></li>
							<li><a href="#" class="p__text text_ita capitalize c-ff">Marketing</a></li>
							<li><a href="#" class="p__text text_ita c-ff">Accounting</a></li>
							<li><a href="#" class="p__text text_ita c-ff">Finance</a></li>
							<li><a href="#" class="p__text text_ita c-ff">Banking</a></li>
						</ul>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-lg-3">
					<div class="f__content wow fadeInUp" data-wow-delay=".3s">
						<h3 class="sub__heading f-c c-ff">Support</h3>
						<ul>
							<li><a href="#" class="p__text text_ita capitalize c-ff">Get Support</a></li>
							<li><a href="#" class="p__text text_ita capitalize c-ff">Conatct</a></li>
							<li><a href="#" class="p__text text_ita capitalize c-ff">Blog</a></li>
							<li><a href="#" class="p__text text_ita capitalize c-ff">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-2">
					<div class="f-c wow fadeInUp" data-wow-delay=".4s">
						<h3 class="sub__heading f-c c-ff">Follow Me</h3>
						<ul class="social">
							<li class="d-inline-block"><a href="#" class="d-block c-ff">
									<i class="fab fa-google-plus-g"></i>
								</a></li>
							<li class="d-inline-block"><a href="#" class="d-block c-ff">
									<i class="fab fa-instagram"></i>
								</a></li>
							<li class="d-inline-block"><a href="#" class="d-block c-ff">
									<i class="fab fa-facebook-f"></i>
								</a></li>
							<li class="d-inline-block"><a href="#" class="d-block c-ff">
									<i class="fab fa-twitter"></i>
								</a></li>
							<li class="d-inline-block"><a href="#" class="d-block c-ff">
									<i class="fab fa-linkedin"></i>
								</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="hr">
				<hr>
			</div>
			<div class="row gy-5">
				<div class="col-sm-6 col-lg-4">
					<div class="f-bottom-c wow fadeInUp" data-wow-delay=".1s">
						<ul>
							<li class="d-flex">
								<img src="assets/images/phone.png" alt="phone">
								<div class="text">
									<p class="p__text c-ff">Phone</p>
									<p class="p__text c-ff">Manager - (555) 652- 3567</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="f-bottom-c wow fadeInUp" data-wow-delay=".2s">
						<ul>
							<li class="d-flex">
								<img src="assets/images/email.png" alt="email">
								<div class="text">
									<p class="p__text c-ff">Email</p>
									<p class="p__text c-ff">Info@modonkumer.com</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="f-bottom-c wow fadeInUp" data-wow-delay=".3s">
						<ul>
							<li class="d-flex">
								<img src="assets/images/location.png" alt="location">
								<div class="text">
									<p class="p__text c-ff">Our Address</p>
									<p class="p__text c-ff">2837 Kincheloe Road, Portland, United States</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--========================== END FOOTER SECTION ============================-->



	<!--BACK TO TOP -->
	<button type="button" id="up__btn" title="Go to top" class="transition-2 d-inline-block rounded">
		<i class="fas fa-chevron-up"></i>
	</button>
	<!-- BACK TO TOP -->


	<!-- JS HERE -->
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/swiper-bundle.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js'></script>
	<script src="assets/js/progress-bar.js"></script>
	<script src="assets/js/mixitup.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/lity.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script type="text/javascript">
		// HUMBURGER MOBAIL MENU BTN
		function myFunction(x) {
			x.classList.toggle("change");
		}

		// MIXITUP =========================
		var containerEl = document.querySelector('.mix-filter');
		var mixer = mixitup(containerEl);

		// SWIPPER =========================
		var swiper = new Swiper('.swiper-container', {
			slidesPerView: 1,
			loop: true,
			grabCursor: true,
			// init: false,
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			breakpoints: {
				768: {
					slidesPerView: 2,
				},
				1024: {
					slidesPerView: 3,
				},
			}
		});


		// BACK TO TOP BUTTON
		var mybutton = document.getElementById("up__btn");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {
			scrollFunction();
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.opacity = "1";
			} else {
				mybutton.style.opacity = "0";
			}
		}
		mybutton.addEventListener("click", topFunction);
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}

	</script>
</body>

</html>
