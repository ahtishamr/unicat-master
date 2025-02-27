<header class="header mt-3">
    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-between">
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo_text emboss">Next<span>In</span></div>
                            </a>
                        </div>
                        <nav class="main_nav_container d-none d-md-block">
                            <button class="btn btn-success success"><a href="index.php">Home</a></button>
                            <button class="btn btn-info info"><a href="./courses.php">Courses</a></button>
                            <button class="btn btn-info info"><a href="./services.php">Services</a></button>
                            <button class="btn btn-warning text-white warning"><a href="./about.php">About</a></button>
                            <button class="btn btn-danger danger"><a href="./doctor.php">Contact us</a></button>
                        </nav>
                        
                        <!-- Hamburger Menu for Mobile -->
                        <div class="hamburger d-block d-md-none menu_mm" onclick="toggleMenu()" style="font-size: 24px; cursor: pointer;">
                            <i class="fas fa-bars text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mobile Navigation Menu (Initially Hidden) -->
    <nav class="mobile_nav d-md-none row " id="mobileNav" style="display: none;">
        <button class="btn btn-success success col-12"><a href="index.php">Home</a></button>
        <button class="btn btn-info info col-12"><a href="./courses.php">Courses</a></button>
        <button class="btn btn-info info col-12"><a href="./services.php">Services</a></button>
        <button class="btn btn-warning text-white warning col-12"><a href="./about.php">About</a></button>
        <button class="btn btn-danger danger col-12"><a href="./doctor.php">Contact us</a></button>
       
    </nav>
</header>



<script>
    function toggleMenu() {
        var menu = document.getElementById("mobileNav");
        menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }
</script>

