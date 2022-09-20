<?php
session_start();
$id = $_SESSION['fertilizerId'];
// echo $id;

include_once "dbconnection.php";
$sql = "SELECT *
            FROM fertilizer_prediction
            WHERE id=$id";

$result = $conn->query($sql);
$rows = $result->fetch_assoc();

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
    <link rel="stylesheet" href="style/fertilizerResultPage.css">

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

    <section id="result">
        <p> <a href="https://www.google.com/search?q=<?php echo $rows['FertilizerName']?>+fertilizer+details+description" id="descriptionLink"><span id="nameOfRecommendedFertilizer"> <?php echo $rows['FertilizerName'] ?></span></a>&emsp13; is the recommended fertilizer.   &emsp14;<a href="https://dir.indiamart.com/search.mp?ss=<?php echo $rows['FertilizerName']?>&mcatid=184123&catid=714&prdsrc=1" id="order">order</a></p>
        <br>
        <p>- This fertilizer <span id="highlight">works best</span> at <span id="Temparature">Temparature </span> = <?php echo $rows['Temparature'] ?>,&emsp;<span id="Humidity">Humidity </span> = <?php echo $rows['Humidity'] ?>&emsp;and&emsp;<span id="Moisture">Moisture </span> = <?php echo $rows['Moisture'] ?>.</p>
        <p>- This is the most popular grade among the farming community.</p>
        <p>- It contains <span id="column"><?php echo $rows['Nitrogen'] ?>% Nitrogen</span>, <span id="column"><?php echo $rows['Potassium'] ?>% Potassium</span>, <span id="column"><?php echo $rows['Phosphorous'] ?>% Phosphorous</span> in this fertilizer.</p>
        <p>- It is granular in nature and can be easily applied by broadcasting, placement or drilling.</p>
    </section>


    <?php include('footer.html') ?>
    <script src="js/navbarColor.js"></script>
</body>

</html>