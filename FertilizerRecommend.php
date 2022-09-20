<?php
// Start the session
session_start();
include_once "dbconnection.php";
$sql = "SELECT SoilType 
        FROM fertilizer_prediction 
        GROUP BY SoilType;";

$result = $conn->query($sql);

$sql = "SELECT CropType 
        FROM fertilizer_prediction 
        GROUP BY CropType;";
$result2 = $conn->query($sql);
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
    <link rel="stylesheet" href="style/fertilizerRecommend.css">

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
        <span id="info">Home / fertilizer Recommendation</span>
    </div>

    <h1 id="heading">Please Fill The Form Below</h1>

    <form action="processFertilizerRecommendation.php" method="POST">
        <label for="temperature">Temperature:</label>
        <input type="text" name="temperature" id="temperature" required>

        <label for="humidity">Humidity:</label>
        <input type="text" name="humidity" id="humidity" required>

        <label for="moisture">Moisture:</label>
        <input type="text" name="moisture" id="moisture" required>

        <label for="soilType">Soil Type:</label>
        <select name="soilType" id="soilType">
            <?php
            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
            ?>
                    <option value="<?php echo $rows['SoilType'] ?>"><?php echo $rows['SoilType'] ?></option>
            <?php
                }
            } else {
                echo "No data found";
            }
            ?>
        </select>

        <label for="cropType">Crop Type:</label>
        <select name="cropType" id="cropType">
            <?php
            if ($result2->num_rows > 0) {
                while ($rows = $result2->fetch_assoc()) {
            ?>
                    <option value="<?php echo $rows['CropType'] ?>"><?php echo $rows['CropType'] ?></option>
            <?php
                }
            } else {
                echo "No data found";
            }
            ?>
        </select>

        <button>Search</button>
    </form>

    <?php include('footer.html') ?>
    <script src="js/navbarColor.js"></script>

</body>

</html>