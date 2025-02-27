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

<link rel="stylesheet" href="./styles/doctor.css">
</head>
<body>

<div class="super_container  contact-us">
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header -->

	<?php
		@include('./layout/header.php');
	?>
  
  
<!-- menu -->
<div class="container map">
  <div class="row">
    <div class="col-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6807.137867838973!2d74.41571028836678!3d31.453532199394214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919089104e05b4f%3A0xd9f7dca503a4f0da!2sKirian%20Wala%2C%20Lahore%2C%20Pakistan!5e0!3m2!1sen!2s!4v1740205110332!5m2!1sen!2s" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      
    </div>
    <div class="col-12">
        <form action="https://fabform.io/f/xxxxx" method="post">
            <section class="py-24 mt-5">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="grid lg:grid-cols-2 grid-cols-1">
                        <div class="lg:mb-0 mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="400">
                            <div class="group w-full h-full">
                                <div class="relative h-full">
                                    <img src="https://pagedone.io/asset/uploads/1696488602.png" alt="ContactUs tailwind section" class="w-full h-full lg:rounded-l-2xl rounded-2xl bg-blend-multiply bg-indigo-700"/>
                                    
                                    <h1 class="font-manrope text-white text-4xl font-bold leading-10 absolute top-11 left-11">Contact us</h1>
                                    
                                    
                                </div>
                            </div>
                        </div>
        
                        <!-- Form Section -->
                        <div class="bg-gray-50 p-5 lg:p-11 lg:rounded-r-2xl rounded-2xl" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
                            <h2 class="text-indigo-600 font-manrope text-4xl font-semibold leading-10 mb-11">Send Us A Message</h2>
                            <input type="text" class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10" placeholder="Name">
                            <input type="text" class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10" placeholder="Email">
                            <input type="text" class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10" placeholder="Phone">
                           
                            <input type="text" class="w-full h-12 text-gray-600 placeholder-gray-400 bg-transparent text-lg shadow-sm font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10" placeholder="Message">
                            <button class="w-full h-12 text-white text-base font-semibold leading-6 rounded-full transition-all duration-700 hover:bg-indigo-800 bg-indigo-600 shadow-sm">Send</button>
                        </div>
                    </div>
                </div>
            </section>
        </form>
        
    </div>
  </div>
      
</div>
	
	<!-- Footer -->
    <?php
		@include('./layout/footer.php');
	?>
</div>
<script src="https://cdn.tailwindcss.com"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
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


</body>
</html>