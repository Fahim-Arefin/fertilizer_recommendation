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
    <link rel="stylesheet" href="style/signUp.css">

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
    <section id="backGroundImage">

        <form action="processRegistrationForm.php" method="POST">
            <h1>Sign Up</h1>
            <div>
                <label for="fullname">Full name</label>
                <input type="text" name="fullname" id="fullname" required placeholder="fullname">
            </div>
            <div>
                <label for="username">username</label>
                <input type="text" name="username" id="username" required placeholder="username">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required placeholder="email">
            </div>
            <div>
                <label for="institution">institution name</label>
                <input type="text" name="institution" id="institution" required placeholder="institution">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="password">
            </div>
            <div>
                <label for="CPassword">Confirm Password</label>
                <input type="password" name="comfirmPassword" id="CPassword" required placeholder="password">
            </div>
            <button>Sign Up</button>
        </form>
    </section>

    <script src="js/navbarColor.js"></script>
</body>

</html>