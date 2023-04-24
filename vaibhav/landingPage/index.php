<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/placeholder.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Phudu&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a31224cfff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>EVRC</title>
</head>

<body>
    <div id="wrapper">
    <section id="title">

        <!-- Navigation  -->
        
        <?php   include "navigation.html"; ?>

        <!-- Title -->

        <div class="container top-container">

            <div class="row">
                <div class="col-lg-6 title-cols">
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true">Welcome to EVRC</h5>
                    <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Your Eco-friendly charging partner</h1>
                    <a href="about.php"><button data-aos="fade-in" data-aos-duration="1000" data-aos-mirror="true" type="button" class="btn btn-outline-light" id="title-button">Discover more <i
                            class="fa-solid fa-arrow-right"></i></button></a>
                </div>
                <div class="col-lg-6 title-cols">
                    <img data-aos="fade-left" data-aos-duration="1000" data-aos-mirror="true" id="title-img" src="images/titleImage.png" alt="Electric-vehicle-img">
                </div>
            </div>

        </div>

    </section>

    <!-- About Section -->

    <section id="about-section">

        <div class="container about-container">
            <div class="row">
                <div class="col-lg-6" id="about-image">
                    <img data-aos="fade-right" data-aos-duration="1000" id="about-img" src="images/Scooter.png" alt="Scooter-img">
                </div>
                <div class="col-lg-6">
                    <h5 class="about-h5" data-aos="fade-left" data-aos-duration="1000" data-aos-mirror="true"><i class="fa-solid fa-bolt"></i>About Us</h5>
                    <h1 class="about-h1" data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true">We are best at what we provide</h1>
                    <p data-aos="fade-up">We provide charging stations for almost all types of electronic vehicles in India. We also have a
                        wide network of services
                        and shops which rent cars and bikes for your daily needs.
                    <ul class="about-ul">
                        <li data-aos="fade-right" class="about-ul-li" data-aos-duration="1000" data-aos-mirror="true"><i class="fa-solid fa-feather-pointed" style="color: #242f9b"></i>
                            Charging Stations for electronic vehicles</li>
                        <li data-aos="fade-left" class="about-ul-li" data-aos-duration="1000" data-aos-mirror="true"><i class="fa-solid fa-feather-pointed" style="color: #242f9b"></i>
                            Bicycle Rentals</li>
                    </ul>
                    <a href="about.php"><button data-aos="fade-in" type="button" class="btn btn-primary read-button" data-aos-duration="1000" data-aos-mirror="true">Read More <i
                            class="fa-solid fa-arrow-right"></i></button></a>
                    </p>
                </div>
            </div>
        </div>

    </section>

    <!-- Why Us Section -->

    <section id="why-section">
        <div class="container.fluid why-container">

            <!-- <img src="images/scooterCharging.jpg" alt="" class="why-bg img-responsive"> -->

            <div class="row why-content">

                <div class="col-lg-6">
                    <h5 id="why-h5" data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true"><i class="fa-solid fa-bolt"></i>Why Us</h5>
                    <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-mirror="true">We believe in clean and green earth</h1>
                    <p id="why-p" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">
                        Our project is designed to
                        promote the adoption of electric vehicles by making it easier and more
                        convenient for people to find and use them
                    </p>
                    <a href="services.php"><button data-aos="fade-in" type="button" class="btn btn-outline-light" id="why-button" data-aos-duration="1000" data-aos-mirror="true">Read More <i
                        class="fa-solid fa-arrow-right"></i></button></a>
                </div>
                <div class="col-lg-6" id="earth-logo" data-aos="fade-in" data-aos-duration="1000" data-aos-mirror="true">
                    <i class="fa-solid fa-earth-americas" style="color: #609966;"></i>
                </div>

            </div>
    
        </div>

    </section>

    <hr id="services-hr">

    <!-- Services Section -->

    <section id="services-section">
    <h1 class="services-h1" data-aos="fade-in" data-aos-duration="1000" data-aos-mirror="true">Our Services</h1>
    <div class="container services-container">
    <div class="row">
        <div class="col-lg-6 services-col">
            <div class="services-card card" data-aos="slide-right" data-aos-duration="1000" data-aos-mirror="true">
                <img src="images/Ecars.jpg" alt="car-img" class="card-img-top" id="img-1-services">
                <h5 class="card-title">Electronic Vehicles Rental</h5>
                <p class="card-text">We at EVRC provide our customers with Electric vehicle rentals to help them with their daily needs...</p>
                <a href="services.php"><button class="btn btn-primary services-button">Read more</button></a>
            </div>    
        </div>
        <div class="col-lg-6 services-col">
            <div class="services-card card" data-aos="slide-left" data-aos-duration="1000" data-aos-mirror="true">
                <img src="images/EcarCharging.jpg" alt="car-charging" class="card-img-top">
                <h5 class="card-title">Electronic Vehicles Charging</h5>
                <p class="card-text">We also provide charging stations that can be booked on hourly basis to charge your personal vehicles...</p>
                <a href="services.php"><button type="button" class="btn btn-primary services-button">Read more</button></a>
            </div>
        </div>
    </div>
    </div>

    </section>

    <!-- Footer -->

    <section id="footer-section">
        <?php include "footer.html"; ?>
    </section>
</div>
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>