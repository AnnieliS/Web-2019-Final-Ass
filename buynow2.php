<?php
session_start();
?>


<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="includes/styles.css">
    <link rel="icon" type="image/ico" href="https://addons-content.teamspeak.com/cb11d3a7-593f-4b56-a1ea-14ca632e70ed/images/648_366/8Fcd0bji.jpg" />

    <title>Buy Now</title>

</head>

<body id="buynow2">

    <!--Header + Nav -->

    <?php include 'headerconst.php' ?>

    <!-- Main -->

    <div class="clear"></div>
    <main>
        <!-- Breadcrumbs -->

        <!-- Main info -->


    <!-- Breadcrumbs -->


        <h1 id="pageH1">Victims info</h1>
        <div class="con">
            <?php
            $name = $_GET["fullname"];
            $email = $_GET["email"];
            $info = $_GET["info"];
            $checked = $_GET["dis"];
            $ck;
            if ($checked == "on")
                $ck = "checked";
            else $ck = "unchecked";
            echo "<form id='victim_info'>
            <fieldset disabled>
                <div class='form-group row'>
                    <label for='inputfullname' class='col-sm-2 col-form-label'>Full name</label>
                    <div class='col-sm-7'>
                        <input type='text' class='form-control' id='disabledinputfullnamedisabled' placeholder='Full name' value=' " . $name . " '>
                    </div>
                </div>
                <div class='form-group row'>
                    <label for='inputEmail3' class='col-sm-2 col-form-label'>Email</label>
                    <div class='col-sm-7'>
                        <input type='email' class='form-control' id='disabledinputEmail3disabled' placeholder='Email' value=' " . $email . " '>
                    </div>
                </div>
                <div class='form-group row'>
                        <label for='textbox' class='col-sm-2 col-form-label'>More Info</label>
                        <div class='col-sm-7'>
                                <textarea rows='5' cols='85' name='info' id='disabledtextbox' form='victim_info' placeholder='Any info you want to use against the victim'>" . $info . "</textarea>
                        </div>
                    </div>
                    <div class='col-auto my-1'>
                            <div class='custom-control custom-checkbox mr-sm-1'>
                              <input type='checkbox' class='custom-control-input' id='customControlAutosizing customCheckDisabled1' " . $ck . ">
                              <label class='custom-control-label' for='customControlAutosizing'>Download and Send yourself <p>10% Discount</p></label>
                            </div>
                          </div>
                          </fieldset>
        </form>";
            ?>
            <h3> Payment Info</h3>
            <h3>Total: 0.07 Bitcoin</h3>
            <div class="submit_buttons ">
                <br>

                <!-- ADD SESSION SO WONT DELET DATA ENTERED! -->

                <button type="button" class="btn btn-secondary btn-lg" onclick="window.location.href='Checkout.php';">Back</button>
                <button type="button" class="btn btn-secondary btn-lg" onclick="window.location.href='feedback.php';">Buy Now</button>
            </div>
        </div>
        <div class="clear"></div>
    </main>


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