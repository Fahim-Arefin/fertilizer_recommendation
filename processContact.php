<?php
// Start the session
session_start();

$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$message = $_POST['message'];

$phoneNumberFlag = false;
$emailAddressFlag = false;
$emailAddressFlagError = "";
$phoneNumberError = "";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailAddressFlagError = "Invalid email format";
} else {
    $emailAddressFlag = true;
}

if (!preg_match("/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/", $phoneNumber)) {
    $phoneNumberError = "number is not validate";
} else {
    $phoneNumberFlag = true;
}

if ($phoneNumberFlag) {
    if ($emailAddressFlag) {

        include_once "dbconnection.php";
        $sql = "INSERT INTO message (fullname,phoneNumber,email,message)
                    VALUES ('$fullName ', '$phoneNumber','$email','$message')";
        if ($conn->query($sql) === TRUE) {

            //successfull Insert
?>
            <!-- php off then write other language then again php on -->
            <!-- going to login page-->

            <script>
                window.location.assign('contactSuccess.php')
            </script>

        <?php

        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<br>query not ececute for some reason";
        }
    } else {
        echo $emailAddressFlagError;
    }
} else {
    echo $phoneNumberError;
}

?>