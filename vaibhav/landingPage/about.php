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
    <title>About Us</title>
</head>
<body>
    
<div id="wrapper">

<!-- Navigation -->

<?php include "navigation.html"; ?>


<!-- Title -->

<section id="why-section">
    
    <div class="about-page-title">
    <h1 class="about-page-h1" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">About Us</h1>
    </div>

</section>

<!-- Mid Section -->

<section id="about-section">

<div class="container about-container">
            <div class="row">
                <div class="col-lg-6" id="about-image" data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true">
                    <img id="about-img" src="images/Scooter.png" alt="Scooter-img">
                </div>
                <div class="col-lg-6">
                    <h5 class="about-h5" data-aos="fade-left" data-aos-duration="1000" data-aos-mirror="true"><i class="fa-solid fa-bolt"></i>About Us</h5>
                    <h1 class="about-h1" data-aos="fade-right" data-aos-duration="1000" data-aos-mirror="true">We are best at what we provide</h1>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">We provide charging stations for almost all types of electronic vehicles in India. We also have a
                        wide network of services
                        and shops which rent cars and bikes for your daily needs.
                    <ul class="about-ul">
                        <li class="about-ul-li" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true"><i class="fa-solid fa-feather-pointed" style="color: #242f9b"></i>
                            Charging Stations for electronic vehicles</li>
                        <li class="about-ul-li" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true"><i class="fa-solid fa-feather-pointed" style="color: #242f9b"></i>
                            Bicycle Rentals</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>

</section>

<!-- End Section  -->

<section id="about-end-section">
    <div class="container.fluid about-us-container">
    <h1 data-aos="fade-in" data-aos-duration="1000" data-aos-mirror="true">Our Team</h1>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <img class="about-us-avatar" src="images/avatar.png" alt="avatar" data-aos="fade-in" data-aos-duration="1000" data-aos-mirror="true">
            <h5 class="about-us-h5" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Mayank Kumar Shrivastva</h5>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Back-end Developer</p>
        </div>
        <div class="col-lg-3 col-md-6">
            <img class="about-us-avatar" src="images/avatar.png" alt="avatar" data-aos="fade-in" data-aos-duration="1000" data-aos-mirror="true">
            <h5 class="about-us-h5" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Himanshu Dubey</h5>
            <p style="padding-left: 20px;" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Back-end Developer</p>
        </div>
        <div class="col-lg-3 col-md-6">
            <img class="about-us-avatar" src="images/avatar.png" alt="avatar" data-aos="fade-in" data-aos-duration="1000" data-aos-mirror="true">
            <h5 class="about-us-h5" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Vaibhav Shakya</h5>
            <p style="padding-left: 20px;" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Front-end Developer</p>
        </div>
        <div class="col-lg-3 col-md-6">
            <img class="about-us-avatar" src="images/avatar.png" alt="avatar" data-aos="fade-in" data-aos-duration="1000" data-aos-mirror="true">
            <h5 class="about-us-h5" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Aryan Kumar Singh</h5>
            <p style="padding-left: 20px;" data-aos="fade-up" data-aos-duration="1000" data-aos-mirror="true">Front-end Developer</p>
        </div>
    </div>
    </div>
    <hr id="footer-hr">
</section>


<!-- Footer  -->

<?php include "footer.html"; ?>

</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>