<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fertilizer Recommend</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/homePage.css">
    <link rel="stylesheet" href="style/about.css">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    if (empty($_SESSION["username"])) {
        include('navbar.html');
    } else {
        include('loginNavbar.html');
    }
    ?>

    <section id="horizontalImage">
        <h1>About Us</h1>
    </section>
    <div id="tabBar">
        <span id="info">Home / About</span>
    </div>

    <section id="about">
        <img src="asset/image/8.jpg" alt="">
        <div>
            <h2>About Fertilizer Recommendation System</h2>
            <p>With the aim of sustainable crop production, reduction in the misuse of fertilizers and reduction of input cost by
                optimizing the present pattern of excessive fertilizer application, our team provides fertilizer recommendation through
                both the manual and soil test based interpretation of plant nutrients through soil database and static laboratory soil
                analysis.</p>
            <p>Our team has developed web-based software named Fertilizer Recommendation System(FRS). The system is capable of
                generating fertilizer recommendations for selected crops by analysing the soil database developed.</p>
            <p>The software requires proportion of nutrients in soil, land type, and crop type and variety information to generate
                crop-specific instant fertilizer recommendation.</p>
        </div>
    </section>

    <section id="ourTeam">
        <h2>Team Blank</h2>
        <div id="parentDivOfTeam">
            <div>
                <h2>Fahim Arefin</h2>
                <span>Leader</span>
                <p>4th year student in UIU</p>
                <p>department of computer science and engineering </p>
                
            </div>
            <div>
                <h2>Jawad Tanjim</h2>
                <span>Member</span>
                <p>3rd year student in UIU</p>
                <p>department of computer science and engineering </p>
                
            </div>
            <div>
                <h2>Samiul Islam Samin</h2>
                <span>Member</span>
                <p>4th year student in UIU</p>
                <p>department of computer science and engineering </p>
                
            </div>


        </div>
    </section>



    <?php include('footer.html') ?>
    <script src="js/navbarColor.js"></script>

</body>

</html>