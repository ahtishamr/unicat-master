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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="./styles/doctor.css">
<link rel="stylesheet" href="./styles/about.css">
</head>
<body>

<?php
		@include('./layout/header.php');
	?>

    <div class="container about-us">
        <header class="my-4" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
            <h1 class="text-3xl font-bold text-gray-800">About Us</h1>
            <p class="text-gray-600 text-lg">Empowering Students with Cutting-Edge Web Development Skills</p>
        </header>
        

        <h2 class="my-4 text-center" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
            <b class="bold text-3xl text-gray-800">Meet Our Expert Teachers</b>
        </h2>
        
        <div class="row">
            <div class="col-md-4">
                <div class="parent">
                    <div class="card">
                        <div class="content-box" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <span class="card-title text-xl font-bold text-gray-800">Bilal Baqar</span>
                            <p class="card-content text-gray-600">
                                Full Stack Developer <br> Laravel, 6+ Years Experience
                            </p>
                            <span class="see-more text-indigo-600 cursor-pointer font-semibold hover:underline">See More</span>
                        </div>
                        
                        <div class="date-box" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="400">
                            <img src="./images/WhatsApp Image 2025-02-24 at 11.45.10_a43c528e.jpg" alt="" class="rounded-lg shadow-lg">
                        </div>
                        
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="parent">
                    <div class="card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="content-box" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                            <span class="card-title text-xl font-bold text-gray-800">Muhammad Babar</span>
                            <p class="card-content text-gray-600">
                                Full Stack Developer
                            </p>
                            <span class="see-more text-indigo-600 cursor-pointer font-semibold hover:underline">See More</span>
                        </div>
                        <div class="date-box" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                            <img src="./images/WhatsApp Image 2025-02-24 at 11.30.42_90f554d5.jpg" alt="" class="rounded-lg shadow-lg">
                        </div>
                    </div>
                    
                  </div>
            </div>
            <div class="col-md-4">
                <div class="parent">
                    <div class="card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="content-box" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                            <span class="card-title text-xl font-bold text-gray-800">Mohsin Zia</span>
                            <p class="card-content text-gray-600">
                                SEO Master <br> Experience 14+ Years
                            </p>
                            <span class="see-more text-indigo-600 cursor-pointer font-semibold hover:underline">See More</span>
                        </div>
                        <div class="date-box" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                            <img src="./images/WhatsApp Image 2025-02-24 at 11.32.38_9b721cb8.jpg" alt="" class="rounded-lg shadow-lg">
                        </div>
                    </div>
                    
                  </div>
            </div>
        </div>

        <div class="row align-items-center success-section">
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <h2 class="text-2xl font-bold text-gray-800">Our Students' Success</h2>
                <p class="text-gray-600 text-lg">
                    Students at Nextin build real-world projects and secure top positions in tech companies worldwide. 
                    Our courses ensure they master the latest frameworks like <b>React</b>, <b>Node.js</b>, and <b>Django</b>.
                </p>
                <button class="btn bg-indigo-600 text-white font-semibold px-6 py-2 mt-4 rounded-full shadow-md 
                               hover:bg-indigo-800 transition-all duration-300">
                    Join Us
                </button>
            </div>
            
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                <img src="https://2.bp.blogspot.com/-5Qy2FYAQ6QQ/XPVXokuqTWI/AAAAAAAAHt4/LxwAQLS_ot8yy9mNmXbB3FIS6p4YdZnvACLcBGAs/s1600/image3.png" 
                     class="img-fluid shadow-lg" 
                     alt="Our Students" 
                     style="border-radius: 10px;">
            </div>
            
        </div>


	<!-- Footer -->


</div>
<?php
		@include('./layout/footer.php');
	?>
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