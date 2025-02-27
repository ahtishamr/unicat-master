<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Our Services</title>
   
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
    <link rel="stylesheet" href="./styles/services_style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Styling for Heading */
        .services-heading {
            color: black;
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
            margin-bottom: 0;
        }
        .services-heading:hover {
    
        }


        /* Styling for Banner */
        .banner {
    position: relative;
    width: 100%;
    height: 300px; /* Adjust this height as per your banner size */
    overflow: hidden;
    margin-top: 140px;

}

.image-one {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.banner-text {
    position: absolute;
    bottom: 150px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    font-size: 24px;
    font-weight: bold;
    
    padding: 10px 20px;
    border-radius: 5px;
    color: #ffb600;
}

.services-heading {
    text-align: center;
    color: #ffb600;
    margin-top: 24px;
    
    
}


        /* ---- Service Cards Section (Like The Xpertz) ---- */
        .services-section {
            padding: 50px 0;
            text-align: center;
            background-color: #f8f9fa;
        }

        .service-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            overflow: hidden;
            cursor: pointer;
            margin-bottom: 30px;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .service-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .service-card:hover img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 20px;
            background-color: #f8b639;
        }

        .service-content h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #e0e0e0;
        }

        .service-content p {
            font-size: 1rem;
            color: #555;
        }

        .read-more-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: yellow;
            border: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .read-more-btn:hover {
            background: orange;
        }
        .services-h3{
            color: #e0e0e0;
            

        }
    </style>
</head>
<body>

<?php
		@include('./layout/header.php');
	?>
    <div class="container-fluid p-0">
        <div class="banner">
            <img class="image-one" src="./images/service-banner.jpg" alt="Banner Image">
            <div class="banner-text">If you can code, you can build!</div>
           
        </div>
        <h1 class="services-heading">Our Services</h1>
       
    </div>
    

    <!-- Services Section (Like The Xpertz) -->
    <div class="services-section">
        <div class="container">
          
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="./images/courses-images/services-img-2.jpg" alt="Frontend Developer">
                        <div class="service-content">
                            <h3>Web Development</h3>
                            <p>We offer custom, responsive, and high-performance web development.</p>
                      
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="./images/courses-images/services-img-3.jpg" alt="Backend Developer">
                        <div class="service-content">
                            <h3>Domain & Hosting</h3>
                            <p>We offer domain registration and hosting for a seamless online presence.</p>






                          
                        </div>
                    </div>
                </div>
                <!-- card-3 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="./images/courses-images/services-img-1.jpg" alt="App Development">
                        <div class="service-content">
                            <h3>SEO </h3>
                            <p>We offer SEO services to boost visibility, rankings, and content optimization.</p>






                          
                        </div>
                    </div>
                </div>
            
             
             
            
              
               
                

             
             

                <!-- More Services (Copy and Modify) -->
            </div>
            
        </div>
    </div>

    <?php
		@include('./layout/footer.php');
	?>
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
