<!DOCTYPE html>
<html lang="en">
<head>
<title>Unicat</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header -->
	

	<?php
		@include('./layout/header.php');
	?>
<!-- menu -->
<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
	<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
	<div class="search">
		<form action="#" class="header_search_form menu_mm">
			<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
			<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
				<i class="fa fa-search menu_mm" aria-hidden="true"></i>
			</button>
		</form>
	</div>
	<nav class="menu_nav">
		<ul class="menu_mm">
			<li class="menu_mm"><a href="index.html">Home</a></li>
			<li class="menu_mm"><a href="">About</a></li>
			<li class="menu_mm"><a href="#">Courses</a></li>
			<li class="menu_mm"><a href="#">Blog</a></li>
			<li class="menu_mm"><a href="#">Page</a></li>
			<li class="menu_mm"><a href="./doctor.html">Contact</a></li>
		</ul>
	</nav>
</div>
<div class="home ">
	<div class="home_slider_container">
		
		<!-- Home Slider -->
		<div class="owl-carousel owl-theme home_slider">
			
			
			<!-- Home Slider Item -->
			<div class="owl-item">
				<div class="home_slider_background" style=""></div>
				<div class="home_slider_content">
					<div class="container">
						<div class="row">
							<div class="col text-center p-5 card slider-card">
								<div class="home_slider_title" data-aos="fade-down" data-aos-duration="1000">
									Become a Full-Stack Developer!
								</div>
								<div class="home_slider_subtitle" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
									Master both front-end and back-end with one course.
								</div>
								<div class="home_slider_form_container" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
									<button class="neon-button">Start Your Full-Stack Journey</button>
								</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="owl-item">
				<div class="home_slider_background" style=""></div>
				<div class="home_slider_content">
					<div class="container">
						<div class="row">
							<div class="col text-center p-5 card slider-card">
								<div class="home_slider_title">Become a Backend Developer in 3 Months!</div>
								<div class="home_slider_subtitle">Take your coding skills to the next level with our intensive backend development course.</div>
								<div class="home_slider_form_container">
									<button class="neon-button">Start Learning Now</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="owl-item">
				<div class="home_slider_background" style=""></div>
				<div class="home_slider_content">
					<div class="container ">
						<div class="row">
							<div class="col text-center p-5  card slider-card">
								<div class="home_slider_title">Increase Your Website Traffic with SEO!</div>
								<div class="home_slider_subtitle">Learn proven SEO strategies to optimize your website for search engines and drive more organic traffic.</div>
								<div class="home_slider_form_container">
									<button class="neon-button">Start Now</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Slider Nav -->

	
	
</div>
<div class="twelve d-flex justify-content-center ">
	<h1 class=" m-5 emboss ">Popular Courses</h1>
</div>
<?php
@include("./component/topCourses.php");

?>

  
<br><br>

<div class="twelve-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000">
	<button class="neon-button shadow--sunken mx-auto" data-aos="zoom-in" data-aos-delay="300">View All Courses</button>
	<br>
	<h1 class="m-5 emboss" data-aos="fade-down" data-aos-delay="500">All Teachers</h1>
</div>

	<!-- Team -->
	<div class="team container d-flex justify-content-center align-items-center flex-wrap">

		<!-- Card 1 -->
		<div class="card-profile card" id="card-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
			<div class="card__border">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoIAQqhuDgSoKEyWwOWsjiPJjmBTekCjuMzQ&s" alt="card image" class="card__img_profile" />
			</div>
			<h3 class="card__name">Mia Miranda</h3>
			<span class="card__profession">Interpreter</span>
			<div class="card__social" id="card-social-1">
				<div class="card__social-control">
					<div class="card__social-toggle" id="card-toggle-1">
						<i class="fa fa-plus"></i>
					</div>
					<span class="card__social-text">My social networks</span>
					<ul class="card__social-list">
						<li><a href="https://www.facebook.com" target="_blank" class="card__social-link">
							<i class="fa fa-facebook"></i>
						</a></li>
						<li><a href="https://www.github.com" target="_blank" class="card__social-link">
							<i class="fa fa-github"></i>
						</a></li>
						<li><a href="https://www.linkedin.com" target="_blank" class="card__social-link">
							<i class="fa fa-linkedin"></i>
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	
		<!-- Card 2 -->
		<div class="card-profile card" id="card-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
			<div class="card__border">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoIAQqhuDgSoKEyWwOWsjiPJjmBTekCjuMzQ&s" alt="card image" class="card__img_profile" />
			</div>
			<h3 class="card__name">John Doe</h3>
			<span class="card__profession">Web Developer</span>
			<div class="card__social" id="card-social-2">
				<div class="card__social-control">
					<div class="card__social-toggle" id="card-toggle-2">
						<i class="fa fa-plus"></i>
					</div>
					<span class="card__social-text">My social networks</span>
					<ul class="card__social-list">
						<li><a href="https://www.facebook.com" target="_blank" class="card__social-link">
							<i class="fa fa-facebook"></i>
						</a></li>
						<li><a href="https://www.github.com" target="_blank" class="card__social-link">
							<i class="fa fa-github"></i>
						</a></li>
						<li><a href="https://www.linkedin.com" target="_blank" class="card__social-link">
							<i class="fa fa-linkedin"></i>
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	
		<!-- Card 3 -->
		<div class="card-profile card" id="card-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
			<div class="card__border">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoIAQqhuDgSoKEyWwOWsjiPJjmBTekCjuMzQ&s" alt="card image" class="card__img_profile" />
			</div>
			<h3 class="card__name">Sophia Lee</h3>
			<span class="card__profession">Graphic Designer</span>
			<div class="card__social" id="card-social-3">
				<div class="card__social-control">
					<div class="card__social-toggle" id="card-toggle-3">
						<i class="fa fa-plus"></i>
					</div>
					<span class="card__social-text">My social networks</span>
					<ul class="card__social-list">
						<li><a href="https://www.facebook.com" target="_blank" class="card__social-link">
							<i class="fa fa-facebook"></i>
						</a></li>
						<li><a href="https://www.github.com" target="_blank" class="card__social-link">
							<i class="fa fa-github"></i>
						</a></li>
						<li><a href="https://www.linkedin.com" target="_blank" class="card__social-link">
							<i class="fa fa-linkedin"></i>
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	
	</div>
	
		<!-- Counter -->

		<div class="counter mt-4">
			
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="counter_content" data-aos="fade-right" data-aos-duration="1000">
							<h2 class="emboss">Register Now</h2>
							<h4 class="counter_title">Register Now for Our Frontend Course!</h4>
							<div class="counter_text">
								<p>Ready to master the essentials of frontend development? Our comprehensive frontend course will guide you through everything you need to know, from HTML and CSS basics to advanced JavaScript techniques.
						
									Don’t miss your chance to get hands-on experience building real-world projects!</p>
							</div>
						
							<div class="timer-container">
								<div class="timer">
									<h2 class="counter_title">Time Left: <span id="countdown" class="emboss"></span> </h2>
								</div>
							</div>
						</div>
						
		
					</div>
				</div>
		
				<!-- Counter Form -->
				<div class="counter_form emboss" data-aos="fade-left" data-aos-duration="1000">
					<div class="row fill_height">
						<div class="col fill_height">
							<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">
								<div class="counter_form_title">Courses Now</div>
								<input type="text" class="counter_input" placeholder="Your Name:" required="required">
								<input type="tel" class="counter_input" placeholder="Phone:" required="required">
								<select name="counter_select" id="counter_select" class="counter_input counter_options">
									<option>Choose Subject</option>
									<option>Frontend(basic)</option>
									<option>Frontend(React.js)</option>
									<option>Backend(Basic)</option>
									<option>Backend(Laravel)</option>
									<option>Database</option>
									<option>Javascript</option>
									<option>Wordpress</option>
									<option>Full-Stack Development</option>
									<option>Flutter</option>
									<option>SEO</option>
								</select>
								<textarea class="counter_input counter_text_input" placeholder="Message:" required="required"></textarea>
								<button type="submit" class="neon-button w-100">Submit Now</button>
							</form>
						</div>
					</div>
				</div>
				
		
			</div>
		</div>
		
	
	<!-- Footer -->

	<?php
		@include('./layout/footer.php');
	?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const toggles = document.querySelectorAll(".card__social-toggle");

        toggles.forEach(toggle => {
            toggle.addEventListener("click", () => {
                const cardId = toggle.id.split("-")[2]; // Extract the card number from the toggle's id
                const social = document.getElementById(`card-social-${cardId}`);

                // Toggle the display of the social links
                social.classList.toggle("animation");
            });
        });
    });
</script>
<script>
	// Countdown Timer Script
	const countdownElement = document.getElementById("countdown");

	// Set the date for the course start
	const courseStartDate = new Date("Feb 20, 2025 09:00:00").getTime();

	// Update the countdown every second
	const interval = setInterval(function() {
		const now = new Date().getTime();
		const distance = courseStartDate - now;

		// Time calculations
		const days = Math.floor(distance / (1000 * 60 * 60 * 24));
		const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		const seconds = Math.floor((distance % (1000 * 60)) / 1000);

		countdownElement.innerHTML = `${days}d / ${hours}h / ${minutes}m / ${seconds}s`;

		// If the countdown is over, display a message
		if (distance < 0) {
			clearInterval(interval);
			countdownElement.innerHTML = "The course has started!";
		}
	}, 1000);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>



</body>
</html>