<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<div class="container">

<header>

    <a href="home.php" class="logo">EduSuper<span>Hero</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="course.php">courses</a>
        <!-- <a href="teacher.html">teachers</a> -->
        <a href="about.php">about</a>
        <a href="contact.php">contact</a>
    </nav>

</header>

<!-- home section  -->

<section class="home">

    <div class="content">
        <h3>Everyone deserves the best</h3>
        <p>We provide the best education for you. Wanted to know more?</p>
        <a href="course.php" class="btn">Explore</a>
    </div>

    <div class="image">
        <!-- <img src="images/home-img.svg" alt=""> -->
        <img src="images/pic.png" alt="">
    </div>

</section>

<?php include("footer.php"); ?>

</div>















<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>