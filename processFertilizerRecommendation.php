<?php
session_start();

$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];
$moisture = $_POST['moisture'];
$soilType = $_POST['soilType'];
$cropType = $_POST['cropType'];

//40-70 humidity
//20-70 moisture
//20-45 degree temparature


//all input field validity check
if (is_numeric($temperature) && is_numeric($humidity) && is_numeric($moisture)) {
    if ($temperature >= 20 && $temperature <= 45) {
        if ($humidity >= 40 && $humidity <= 70) {
            if ($moisture >= 20 && $moisture <= 70) {

                //success state
                include_once "dbconnection.php";
                $manhattanDistance = array();
                $min = 100000;
                $sql =      "SELECT *
                             FROM fertilizer_prediction
                             WHERE SoilType='$soilType' and CropType='$cropType'";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {

                        $Temparature = $rows['Temparature'];
                        $Humidity = $rows['Humidity'];
                        $Moisture = $rows['Moisture'];
                        $id = $rows['id'];

                        $dist = abs($temperature - $Temparature) + abs($humidity - $Humidity) + abs($moisture - $Moisture);
                        $manhattanDistance[$dist] = $id;
                        if ($dist < $min) {
                            $min = $dist;
                        }
                    }
                    // print_r($manhattanDistance);
                    // echo "<br>";
                    // echo $min;
                    // arsort($manhattanDistance, SORT_REGULAR);
                    // echo "<br>";
                    // print_r($manhattanDistance);

                    $targetResultId = $manhattanDistance[$min];

                    $_SESSION['fertilizerId'] = $targetResultId;
                    header("Location: fertilizerResultPage.php");
                    exit;
                } else {
                    // echo "No data found";
                    $_SESSION['errorMessage'] = "Please input correct crop type for selected soil.This type of crop needs different soil to grow.";
                    header("Location: FR_inputValidationError.php");
                    exit;
                }
            } else {
                // echo "please enter Moisture between '20 to 70' percent only";
                $_SESSION['errorMessage'] = "Please enter moisture between '20 to 70' percent. All plants need to be in a specific soil moisture range — the majority of plants thrive in soil with a moisture level that ranges between 20% and 70%.";
                header("Location: FR_inputValidationError.php");
                exit;
            }
        } else {
            // echo "please enter Humidity between '40 to 70' percent only";
            $_SESSION['errorMessage'] = "Please enter Humidity between '40 to 70' percent. An ideal humidity range for most mature plants is 40% to 70%.";
            header("Location: FR_inputValidationError.php");
            exit;
        }
    } else {
        // echo "please enter temparature between '20 to 45' degree only";
        $_SESSION['errorMessage'] = "Please enter temparature between '20 to 45' degree. Most plants tolerate normal temperature fluctuations. In general, foliage plants grow best between 20 degrees and 45 degrees celsius. ";
        header("Location: FR_inputValidationError.php");
        exit;
    }
} else {
    // echo "please enter only Numeric value in the input fields";
    $_SESSION['errorMessage'] = "please enter only Numeric value in the input fields";
    header("Location: FR_inputValidationError.php");
    exit;
}
