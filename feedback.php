<?php
session_start();

$_SESSION["name"] = null;
$_SESSION["email"] = null;
$_SESSION["info"] = null;
$_SESSION["dis"] = null;
?>

<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="includes/styles.css">
    <title>Thank You For Purchase</title>
    <link rel="icon" type="image/ico" href="https://addons-content.teamspeak.com/cb11d3a7-593f-4b56-a1ea-14ca632e70ed/images/648_366/8Fcd0bji.jpg" />


</head>

<body id="Checkout">


    <!-- Header + Nav -->

    <?php include 'headerconst.php' ?>

    <!-- Main -->

    <main>

        <div id="wrapper">


    <!-- Breadcrumbs -->


            <h1 id="pageH1">Victim's Info</h1>
            <div class="con">
                <h1>Purchase <br>Successful</h1>
                <button type="button" class="btn btn-secondary btn-lg" onclick="window.location.href ='index.php';">Continue Shopping</button>

            </div>
            <div class="clear"></div>
    </main>




    </div>

    <!--

    <footer>
        <h6>&copy; Not Russian Mafia</h6>
    </footer>

-->


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="includes/main.js"></script>
</body>


</html>
