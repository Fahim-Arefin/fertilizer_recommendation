<!-- recieved data by post method from same php file-->
<?php

$confirmpasserr = $institutionerr = $usernameErr = $emailErr = $passwordErr = $fullNameErr = "";
$confirmpass = $institution = $username = $email = $password = $fullName = "";

$successfulInsert = false;
$usernameflag = false;
$emailflag = false;
$passwordflag = false;
$confirmpasswordflag = false;
$fullNameflag = false;
$institutionflag = false;


//checking empty,invalid inputs

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = input_filter($_POST['username']);
    //pattern check 
    //use flag
    if (!preg_match("/^[a-zA-Z0-9\_]*$/", $username)) {
        $usernameErr = "Only letters and digits and underscore allowed";
    } else {
        $usernameflag = true;
    }


    $email = input_filter($_POST['email']);
    //pattern check 
    //useflag
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $emailflag = true;
    }


    $password = input_filter($_POST['password']);
    //pattern check 
    //useflag


    $fullName = input_filter($_POST['fullname']);
    //pattern check 
    //useflag

    $institution = input_filter($_POST['institution']);
    //pattern check 
    //useflag

    $confirmpass = input_filter($_POST['comfirmPassword']);
    //pattern check 
    //useflag


}

//after passing empty and valid input check



if ($usernameflag && $emailflag && ($password == $confirmpass)) {


    //establishing connection
    include_once "dbconnection.php";


    $username = input_filter($_POST['username']);
    $email = input_filter($_POST['email']);
    $password = input_filter($_POST['password']);
    $fullName = input_filter($_POST['fullname']);
    $institution = input_filter($_POST['institution']);

    $sql = "INSERT INTO user (fullname,username,password,email,instituteName)
                    VALUES ('$fullName ', '$username', '$password','$email','$institution')";

    if ($conn->query($sql) === TRUE) {

        //successfull Insert


?>
        <!-- php off then write other language then again php on -->

        <!-- going to login page-->

        <script>
            window.location.assign('regsuccesspage.php')
        </script>

<?php

    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<br>Username taken";
    }

    $conn->close();
} else {
    if ($password != $confirmpass) {
        echo "<br>type correct password ";
    }
    if (!$usernameflag || !$emailflag) {
        echo "<br>invalid input";
    }
}

//input filtering function
function input_filter($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>