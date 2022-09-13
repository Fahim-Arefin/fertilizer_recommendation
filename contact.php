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
    <link rel="stylesheet" href="style/contact.css">

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
        <h1>Contact Us</h1>
    </section>
    <div id="tabBar">
        <span id="info">Home / Contact</span>
    </div>

    <div class="col-lg-4 mb-4 contact-right" id="contactDetails">
        <h2>Contact Details</h2>
        <p>
            United International University, satarkul road,
            Dhaka
        </p>
        <p>
            <abbr title="Phone">P</abbr>: +91 9876543210
        </p>
        <p>
            <abbr title="Email">E</abbr>:
            <a href="mfahim181238@bscse.uiu.ac.bd">response-team-mfahim181238@bscse.uiu.ac.bd
            </a>
        </p>
        <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
    </div>

    <section id="formSection">
        <h2>send us a Message</h2>
        <form action="processContact.php" method="POST">
            <div>
                <label for="fullName">Full Name:</label>
                <input type="text" name="fullName" id="fullName" required>
            </div>

            <div>
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" name="phoneNumber" id="phoneNumber" required>
            </div>

            <div>
                <label for="email">Email Address:</label>
                <input type="text" name="email" id="email" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea required id="message" name="message" rows="10" cols="50"></textarea>
            </div>
            <button >Send Message</button>
        </form>
    </section>


    <?php include('footer.html') ?>
    <script src="js/navbarColor.js"></script>

</body>

</html>