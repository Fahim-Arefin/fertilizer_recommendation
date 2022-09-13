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
    <link rel="stylesheet" href="style/FAQ.css">

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
        <h1>Frequently Asked Questions</h1>
    </section>
    <div id="tabBar">
        <span id="info">Home / FAQ</span>
    </div>

    <section id="FAQ">
        <div>
            <h2>Why should you use recommended fertilizer for your crops?</h2>
            <p class="activeAns">



                Different crops need different proportion of basic nutrients i.e. different need of Nitrogen, Potassium and Phosphorous
                for their proper growth and soil also degrades after every crop produced. It js important to know how much of nutrients
                are already present in the soil and how much we should add for a particular crop of your choice to be grown so as to
                ensure there is no excess fertiliser in the soil and hence preventing various soil hazards caused due to excess
                fertilisers.



            </p>
        </div>
        <div>
            <h2>a What are the outcome of a soil test?</h2>
            <p class="activeAns">


                The owner of the land will get to know how much of Nitrogen-Phosphorous-Potassium is present in the soil. Moreover, the
                farmer will get to know about the pH value of the soil which is another important factor in determining the produce of a
                grown crop. There are several other tests to know about many other kind of elements in the soil.



            </p>
        </div>
        <div>
            <h2>How is technology involved in recommending fertilizers?</h2>
            <p class="activeAns">


                To recommend a fertiliser we need two things. First, the soil test data and the parameters of the soil(such as N, P, K,
                pH etc.). Secondly, the valid data through which anyone can make a model to recommend the fertiliser needed for any
                crop. Therefore, to process the huge data set and to recommend a solution technology plays a pivotal role.



            </p>
        </div>
        <div>
            <h2>How farmers be benefited from this website?</h2>
            <p class="activeAns">



                Farmer can get his soil tested and can get various parameters required to give as an input to our web application.
                Thereby he by himself enter the values or he can go to any person who knows how to handle the website and enter the
                inputs in the website. He will then get the fertiliser he would use depending on the parameters he has entered into the
                website. That would ensure that there won’t be any excess fertiliser loss and most importantly he will get maximised
                produce with no excess fertilizers.



            </p>
        </div>
        <div>
            <h2>Who can use this service?</h2>
            <p class="activeAns">

                Since it is free of cost it can be used by anyone who is able to use search engines.


            </p>
        </div>
    </section>


    <?php include('footer.html') ?>
   

    <script src="js/navbarColor.js"></script>
    <script src="js/FAQ.js"></script>

</body>

</html>