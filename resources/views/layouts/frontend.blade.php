<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"><!-- Page Title -->
    <title>@yield('title')</title>
	<meta name="description" content="Reliable supplier of heavy construction equipment including excavators, dozers, cranes, and loaders. Quality machines, expert support, and timely delivery.">
    <link rel="canonical" href="{{ url()->current() }}" />  
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large"> 
	
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/frontend/images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Space+Grotesk:wght@300..700&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="/frontend/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="/frontend/css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="/frontend/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="/frontend/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="/frontend/css/custom.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">

    <!-- my Css File -->
	<link rel="stylesheet" href="/frontend/css/my.css">
</head>
<body>

    <!-- Preloader Start -->
	<!-- <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="/frontend/images/loader.svg" alt=""></div>
		</div>
	</div> -->
	<!-- Preloader End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
						<img src="/frontend/images/logo.svg" alt="Logo">
					</a>
					<!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>                                
                                <li class="nav-item"><a class="nav-link" href="/about">About Us</a>
                                <li class="nav-item submenu"><a class="nav-link" href="/products">Products</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="#0">Dozers</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Cranes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Container Stackers</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Boom Loaders</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#0">Compactors</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item"><a class="nav-link" href="/blogs">Blogs</a></li>
                                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="/contact" class="btn-default btn-highlighted">Contact Us</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->
    @yield('content')
    <!-- Main Footer Start -->
    <footer class="main-footer-gold dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <!-- About Footer Start -->
                    <div class="about-footer-gold">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo-gold">
                            <img src="/frontend/images/logo.svg" alt="">
                        </div>
                        <!-- Footer Logo End -->
    
                        <!-- About Footer Content Start -->
                        <div class="about-footer-content-gold">
                            <p>We are a trusted supplier of heavy construction equipment, delivering reliable machinery solutions for infrastructure, industrial, and commercial projects with a focus on quality, performance, and customer satisfaction.</p>
                        </div>
                        <!-- About Footer Content End -->
                    </div>
                    <!-- About Footer End -->
                </div>
    
                <div class="col-xl-8">
                    <!-- Footer Links Box Start -->
                    <div class="footer-links-box-gold">
                        <!-- Footer Links Start -->
                        <div class="footer-links-gold">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About us</a></li>
                                <li><a href="/products">Products</a></li>
                                <li><a href="/blogs">Blogs</a></li>
                                <li><a href="/contact">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
    
                        <!-- Footer Links Start -->
                        <div class="footer-links-gold">
                            <h3>Our Products</h3>
                            <ul>
                                <li><a href="#0">Dozers</a></li>
                                <li><a href="#0">Cranes</a></li>
                                <li><a href="#0">Container Stackers</a></li>
                                <li><a href="#0">Boom Loaders</a></li>
                                <li><a href="#0">Compactors</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
    
                        <!-- Footer Links Start -->
                        <div class="footer-links-gold footer-newsletter-form-gold">
                            <h3>Get In Touch</h3>
                            <p>Stay updated with our latest equipment, projects, and industry insights.</p>

                            <ul class="contact-info">
                                <li>
                                    123 Industrial Area, Andheri East, Mumbai – 400093
                                </li>
                                <li>
                                    +91 98765 43210
                                </li>
                                <li>
                                    info@yourcompany.com
                                </li>
                            </ul>
                        </div>

                        <!-- Footer Links End -->
                    </div>
                    <!-- Footer Links Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-silver">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Box Start -->
                        <div class="footer-copyright-box-silver">
                            <!-- Footer Copyright Text Start -->
                            <div class="footer-copyright-text-silver">
                                <p>© 2025 Powered by <span class="color">Vertex Machineries</span>  All Rights Reserved.</p>
                            </div>
                            <!-- Footer Copyright Text Start -->
                            
                            <!-- Footer Privacy Policy Start -->
                            <div class="footer-menu-silver footer-privacy-policy-silver">
                                <ul>
                                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/terms-and-condtion">Terms & Condition</a></li>
                                </ul>
                            </div>
                            <!-- Footer Privacy Policy End -->
                        </div>
                        <!-- Footer Copyright Box End -->
                    </div>
                </div>
            </div>
        </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Main Footer End -->

    <a href="tel:+919876543210" class="float-contact" title="Call Us">
    <img src="/frontend/images/icon-phone-primary.svg" alt="Call Us">
</a>

    <a href="#" id="scrollTopBtn" title="Go to top">&#8679;</a>

 
<script>
// Show button when user scrolls down
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  const btn = document.getElementById("scrollTopBtn");
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    btn.style.display = "block";
  } else {
    btn.style.display = "none";
  }
}

// Scroll to top when button clicked
document.getElementById("scrollTopBtn").addEventListener("click", function(e){
  e.preventDefault();
  window.scrollTo({top: 0, behavior: 'smooth'});
});
</script>

    <!-- Jquery Library File -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/frontend/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
	<script src="/frontend/js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/frontend/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/frontend/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/frontend/js/SplitText.min.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/frontend/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="/frontend/js/function.js"></script>
</body>
</html>