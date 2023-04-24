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
    <title>Our Services</title>
</head>

<body>

<div id="wrapper">

<!-- Navigation  -->

<?php include "navigation.html"; ?>

<!-- Title -->

<section id="why-section">
    
    <div class="about-page-title">
    <h1 class="about-page-h1" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Our Services</h1>
    </div>

</section>

<!-- Mid Section -->

<section id="about-section">

        <div class="container about-container">
            <div class="row services-page-row">
                <div class="col-lg-6" id="about-image">
                    <img class="services-page-image" src="images/Ecars.jpg" alt="Scooter-img" data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true">
                </div>
                <div class="col-lg-6">
                    <h5 class="about-h5" data-aos="fade-left" data-aos-duration="1000" data-aos-mirror="true"><i class="fa-solid fa-bolt"></i>Electronic Vehicles Rental</h5>
                    <p class="services-page-p" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">The EV charging station and car booking project is a comprehensive
solution designed to make it easier for people to transition to electric
vehicles. The project includes the development of a platform that allows
users to find and book electric cars in their area. The platform will be designed to be user-friendly and accessible, , even for
people who may not be familiar with electric vehicles or the charging
process. The platform will feature a map that shows the location of
available charging stations and electric cars, along with real-time
availability information.
                    </p>
                </div>
</div>
                <div class="row services-page-row">
                <div class="col-lg-6">
                    <h5 class="about-h5" data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true"><i class="fa-solid fa-bolt"></i>Electronic Vehicles Charging</h5>
                    <p class="services-page-p" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Users will be able to reserve a charging station or an electric car directly
from the platform, and receive notifications when their reservation is
confirmed. The platform will also provide users with information on the
estimated charging time and cost, as well as the distance that the electric car
can travel on a single charge. In addition to the development of the platform, the project will also involve
the installation of new EV charging stations in strategic locations, such as
shopping malls, airports, and public parking areas.
                    </p>
</div>
                <div class="col-lg-6" id="about-image">
                    <img id="img-2" class="services-page-image" src="images/EcarCharging.jpg" alt="Scooter-img" data-aos="fade-left" data-aos-duration="1000" data-aos-mirror="true">
                </div>
                </div>
            </div>
        </div>

    </section>

<!-- Footer  -->

<?php include "footer.html"; ?>

</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>