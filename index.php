<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
    <link href="includes/styles.css" rel="stylesheet">
    <title>HackerBoi</title>
    <link rel="icon" type="image/ico" href="https://addons-content.teamspeak.com/cb11d3a7-593f-4b56-a1ea-14ca632e70ed/images/648_366/8Fcd0bji.jpg" />


</head>

<body>

    <div id="wrapper">


        <!--Header + Nav -->

        <?php include 'headerconst.php' ?>


        <!--Slogan-->

        <div id="siteSlogan"></div>
        <main>

            <!--Content-->
            <div></div>


            <div class="popType">
                <h2>Popular Infection Types</h2>
                <a href="#"><img src="images/Trojan_Horse_ico.png" alt="Trojan Horse"></a>
                <a href="#"><img src="images/Worm_ico.png" alt="Worm"></a>
                <a href="#"><img src="images/Poly_ico.png" alt="Polymorphic"></a>
                <a href="#"><img src="images/Direct_Action_ico.png" alt="Direct Action"></a>
            </div>


            <div class="popObj">
                <h2>Popular Objective Types</h2>
                <a href="RevengePage.php"><img src="images/Revenge_ico.png" alt="Revenge"></a>
                <a href="#"><img src="images/DTO_ico.png" alt="Device Take Over"></a>
                <a href="#"><img src="images/Money_Making_ico.png" alt="Money Making"></a>
            </div>

            <div class="clear"></div>

        </main>

        <!--

    <footer>
        <h6>&copy; Not Russian Mafia</h6>
    </footer>

-->

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="includes/main.js"></script>
</body>


</html>