<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="includes/styles.css">
    <title>Buy Now</title>
    <link rel="icon" type="image/ico" href="https://addons-content.teamspeak.com/cb11d3a7-593f-4b56-a1ea-14ca632e70ed/images/648_366/8Fcd0bji.jpg" />


</head>

<body id="buynow">

    <!--Header + Nav -->

    <?php include 'headerconst.php' ?>

    <!-- Main -->

    <div id="wrapper">
    
    <?php
        if ($_SESSION["dis"] == "on")
            $ck = "checked";
        else $ck = "unchecked";
    ?>

    <!-- Breadcrumbs -->
        <main>
            <h1 id="pageH1">Victims info</h1>
            <div class="con">
                <form action="buynow2.php" method="GET" id="victim_info">
                    <div class="form-group row">
                        <label for="inputfullname" class="col-sm-2 col-form-label">Full name</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputfullname" name="fullname" placeholder="Full name" value= '<? echo $_SESSION["name"]?>' required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value= '<?php echo $_SESSION["email"]?>' required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="textbox" class="col-sm-2 col-form-label">More Info</label>
                        <div class="col-sm-7">
                            <textarea name="info" rows="5" id="textbox" form="victim_info" placeholder="Any info you want to use against the victim"><?php echo $_SESSION["info"] ?></textarea>
                        </div>
                    </div>
                    <div class='col-auto my-1'>
                        <div class='custom-control custom-checkbox mr-sm-1'>
                            <input type='checkbox' class='custom-control-input' name="dis" id='customControlAutosizing' <?php echo $ck ?> >
                            <label class='custom-control-label' for='customControlAutosizing'>Download and Send yourself <p>10% Discount</p></label>
                        </div>
                    </div>

                </form>
                <h3> Payment Info</h3>
                <div class="submit_buttons ">
                    <br>
                    <button type="submit" form="victim_info" value="submit" class="btn btn-secondary btn-lg btn-block">I Have Bitcoin</button>
                    <button type="submit" form="victim_info" value="submit" class="btn btn-secondary btn-lg btn-block">Buy Bitcoin <br> With Paypal</button>
                    <button type="submit" form="victim_info" value="submit" class="btn btn-secondary btn-lg btn-block">Use Paypal</button>
                </div>
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