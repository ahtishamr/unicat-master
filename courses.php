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
<link rel="stylesheet" href="./styles/courses.css">
</head>
<body>

<?php
		@include('./layout/header.php');
	?>
    <div id="banner-container row" class="banner mt-5">
        <div class="banner-content col-lg-6  col-md-12 " id="banner-text">
            <h3 id="course-heading">Web Development <span class="highlight mt-3">2025</span></h3>
            <p>Build modern websites with the latest technologies.</p>
            <p>Learn HTML, CSS, JavaScript, and frameworks like React.</p>
            <p>Create interactive and responsive websites.</p>
            <p>Start your journey as a web developer today!</p>
        </div>
        <div class="col-lg-6  col-md-12 mt-3">
        <img id="banner-img" src="./images/courses-images/banner-image-2.png" alt="Course Image">
        </div>
    </div>
    <div class="twelve d-flex justify-content-center ">
      <h1 class=" m-5 emboss mt-6 ">Popular Courses</h1>
    </div>
   <?php
   @include("./component/topCourses.php")
   ?>
    

    <script>
        const banners = [
            { heading: "Web Development", lines: ["Build modern websites with the latest technologies.", "Learn HTML, CSS, JavaScript, and frameworks like React.", "Create interactive and responsive websites.", "Start your journey as a web developer today!"] },
            { heading: "App Development", lines: ["Develop mobile applications for iOS and Android.", "Learn Swift for iOS and Kotlin for Android.", "Understand the app development lifecycle.", "Build powerful and scalable apps with industry best practices."] },
            { heading: "SEO", lines: ["Master the art of Search Engine Optimization.", "Increase website visibility and organic traffic.", "Learn on-page and off-page SEO techniques.", "Become a certified SEO expert!"] }
        ];

        let index = 0;
        const bannerText = document.getElementById("banner-text");
        const bannerImg = document.getElementById("banner-img");
        const courseHeading = document.getElementById("course-heading");

        // Function to change banner content (heading and lines)
        function changeBanner() {
            const bannerContainer = document.getElementById("banner-container");
            bannerContainer.style.transform = "scale(0.9)";  // Zoom out effect on container
            bannerImg.style.transform = "scale(0.8)"; // Zoom out effect on image

            setTimeout(() => {
                index = (index + 1) % banners.length; // Move to next banner
                courseHeading.textContent = `${banners[index].heading} 2025`; // Change course heading
                const lines = banners[index].lines;
                const allParagraphs = bannerText.querySelectorAll('p');
                allParagraphs.forEach((p, i) => {
                    p.textContent = lines[i]; // Update paragraphs for each course
                });

                bannerContainer.style.transform = "scale(1)"; // Zoom in effect on container
                bannerImg.style.transform = "scale(1)"; // Zoom in effect on image
            }, 1000); // Wait for the zoom-out transition
        }

        // Initialize first banner and set interval for changing the banner
        setInterval(changeBanner, 5000); // Change banner every 5 seconds
    </script>
    

	
	<!-- Footer -->

  <footer class="footer">
    <div class="logo">
  <img src="./images/logo1.png" alt="">
</div>

    <div class="footer-container">
        <!-- Logo & Social Media -->
        <div class="footer-column" data-aos="fade-right">
            <p>"Code your dreams into reality—every bug you fix is a step closer to success! Keep learning, keep building!" 🚀💻</p>
            <div class="social-icons d-flex align-items-center">
                <a href="#" class="social-link"><img src="./images/fb-removebg-preview (1).png" alt="" class="social-img"></a>
                <a href="#" class="social-link"><img src="./images/what.png" alt="" class="social-img"></a>
                <a href="#" class="social-link"><img src="./images/linked.png" alt="" class="social-img"></a>
                <a href="#" class="social-link"><img src="./images/git.png" alt="" class="social-img"></a>
            </div>
        </div>
        

        <!-- Explore -->
        <div class="footer-column" data-aos="fade-up">
            <h3>Explore</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        
        <div class="footer-column" data-aos="fade-up" data-aos-delay="200">
            <h3>Services</h3>
            <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">App design</a></li>
                <li><a href="#">Marketing</a></li>
            </ul>
        </div>
        

        <!-- Contact -->
        <div class="footer-column" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="400">
            <h3>Contact</h3>
            <ul data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <li>
                    <img src="./images/email-removebg-preview.png" alt="" class="small mx-3">
                    bilalbaqar5717@gmail.com
                </li>
                <li>
                    <img src="./images/203-2038341_phone-png-phone-icon-orange-png.png" alt="" class="small mx-3">
                    0307-7875533
                </li>
                <li>
                    <img src="./images/207-2072661_jpg-free-stock-location-clipart-office-address-orange-removebg-preview.png" alt="" class="small mx-3">
                    <span>Sadaqat Assets, Kirian Wala, DHA <br class="br"> Phase 5, M-Block</span>
                </li>
            </ul>
        </div>
        
        
        
        
    </div>

    <div class="footer-bottom">
        © NextIn | All Rights Reserved
    </div>
</footer>
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