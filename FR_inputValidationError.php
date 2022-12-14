<?php
session_start();
// echo $_SESSION['errorMessage'];
$error = $_SESSION['errorMessage'];
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
    <link rel="stylesheet" href="style/FR_inputValidationError.css">

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
        <h1>Fertilizer Recommendation</h1>
    </section>

    <div id="tabBar">
        <span id="info">Home / Fertilizer Recommendation </span>
    </div>


    <section id="errorSection">
        <h2>Error!!</h2>
        <p> <?php echo $error?> </p>
        <a href="FertilizerRecommend.php">try again</a>
    </section>

    <?php include('footer.html') ?>
    <script src="js/navbarColor.js"></script>
</body>

</html>