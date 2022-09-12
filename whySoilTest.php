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
    <link rel="stylesheet" href="style/whySoilTest.css">

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
        <h1>Why Soil Test</h1>
    </section>
    <div id="tabBar">
        <span id="info">Home / Why Soil Test </span>
    </div>

    <section id="aboutSoilTest">

        <article class="information">
            <h2>Gain knowledge about the soil condition and how to improve it</h2>
            <p>Fertile soils are necessary to grow healthy crops. To improve soil fertility, it needs to be measured first. Soil
                fertility is determined by the chemical, physical and biological properties of soil. Properties such as soil texture,
                colour and structure are visible. However, it is impossible to see the chemical composition of soil. This is what needs
                to be measured and why soil sampling is essential. Soil tests are used to determine the nutrient content and pH level of
                a soil. With this information the exact type and quantity of fertiliser that needs to be applied to improve soil
                fertility can be defined.</p>
        </article>

        <article class="information">
            <h2>It is the first step into soil fertility management</h2>
            <p>With a proper soil fertility management strategy, farmers can maximize the efficiency of nutrients and water use and
                improve their agricultural productivity. Soil testing is the first step towards proper soil fertility management. Soil
                testing gives valuable information and helps you improve your soil’s health.</p>
        </article>

        <article class="information">
            <h2>Minimise fertiliser expenditures</h2>
            <p>You will not waste money on unnecessary fertilisers if the exact type and quantity of fertilisers your soil and crops
                need is known. Moreover, inorganic fertilisers in general and nutrients such as phosphorus and potassium are limited
                resources. Their prices are increasing over the years and because this trend is set to last it is clever to adapt now to
                the inevitable changes.</p>
        </article>

        <article class="information">
            <h2>Avoid over-fertilisation</h2>
            <p>Applying fertiliser without knowing the actual nutrient needs of your soil might lead to over-fertilisation. By testing
                your soils and receiving fertiliser recommendations, you can avoid using an excessive amount of fertiliser. This is
                better for your crops and the environment. Fertiliser burn and leaves turning yellow is the outcome of
                over-fertilisation for crops. It might also result in nutrient leaching, water pollution and irreversible damages to the
                surrounding aquatic life.</p>
        </article>

        <article class="information">
            <h2>Avoid soil degradation</h2>
            <p>Soil degradation is a threat to every farmer. It is estimated that each year 24 billion tonnes of fertile soil are lost
                due to erosion which is a result of unbalanced soil management. A proper soil management is guaranteed by soil tests
                followed by the application of the right fertilisers at the right moment. Besides avoiding risks of soil degradation, it
                is a more efficient and financially more interesting practice. Moreover, soil restoration is a difficult, costly and
                time-consuming process.</p>
        </article>

    </section>

    <?php include('footer.html') ?>
    <script src="js/navbarColor.js"></script>

</body>

</html>