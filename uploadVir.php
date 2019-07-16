<?php

session_start();

//Recieving User Data
if (isset($_GET["submitButt"])) {

  $virName = $_GET["virName"];
  $virPrice = $_GET["price"];
  $virDesc = $_GET["virDesc"];
  $virType = $_GET["virType"];
  $virPurp = $_GET["virPurp"];
  $virPack = $_GET["virPack"];
  $virUploader = $_SESSION["user_id"];

  include 'DB.php';
  include 'urlSet.php';

  // Attempt insert query execution
  $sql = "INSERT INTO tb_virus_205 (vir_name, uploader_id, vir_price, vir_desc,	vir_type,	vir_act_type,vir_pack_id) VALUES ('$virName','$virUploader' , $virPrice, '$virDesc', '$virType', '$virPurp', $virPack)";
  if (mysqli_query($connection, $sql)) {
      // Close connection and move to MyPage
    mysqli_close($connection);
    header('Location: ' . URL .'g_myPage.php');
    exit();
  } else {

  // Close connection and return to home page
  // SHOW ERROR!
  mysqli_close($connection);
    header("Location" . URL . "index.php");
    exit();
  }

};
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

  <!-- Header + Nav -->

  <?php include 'headerconst.php' ?>

  <div id="wrapper">



    <!-- Breadcrumbs -->


    <!-- Main -->

    <main>
      <div id="uploadVir">
        <form method="GET" action="#">
          <!-- Step 1 -->
          <!--Dragon Drop-->

          <div class="container stepone">
            <div class="row">
              <div class="col-md-6">

                <div class="form-group files">
                  <label>Upload Your File </label>
                  <input type="file" class="form-control" multiple="">
                </div>

              </div>



              <div class="col">
                <!--Virus Name-->
                <div class="form-group">
                  <label for="exampleFormControlInput1">Virus Name</label>
                  <input type="text" required name="virName" class="form-control" id="exampleFormControlInput1" placeholder="Virus1">
                </div>
                <!--Virus Description-->

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" name="virDesc" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <!--Virus Type-->
                <label for="exampleFormControlSelect1">Type</label>
                <select class="form-control" name="virType" id="exampleFormControlSelect1">
                  <option>Misc.</option>
                  <option>Trojan Horse</option>
                  <option>Worm</option>
                  <option>Polymorphic</option>
                  <option>Direct Action</option>
                </select>

                <label for="exampleFormControlSelect2">Purpose</label>
                <select class="form-control" name="virPurp" id="exampleFormControlSelect2">
                  <option>General</option>
                  <option>Revenge</option>
                  <option>Money Making</option>
                  <option>Device Take Over</option>
                  <option>Troll</option>
                </select>

              </div>
            </div>

            <!--Progress Bar 33%-->
            <div class="progress" id="prog1">
              <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <!--Submit Step-->
            <div class="row">
              <div class="btn btn-primary" id="stepone-done"><i class="fa fa-thumbs-down fa-3x" aria-hidden="true"></i></button>
              </div>
            </div>

            <!-- Step 2 -->


            <div class="container hide" id="stepTwo">

              <div class="row">


                <!--Basic Pack-->

                <div class="col">
                  <div class="packTitle">
                    <p>Basic</p>
                  </div>
                  <div class="packDesc">
                    <p>>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>>Fusce varius metus sit amet nibh lobortis tempor. </p>
                    <p>>Donec efficitur tellus quis venenatis finibus.</p>
                  </div>
                  <div class="form-check center-radio">
                    <input class="form-check-input" type="radio" name="virPack" id="exampleRadios1" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    </label>
                  </div>

                </div>


                <!--A.I Pack-->
                <div class="col">
                  <div class="packTitle">
                    <p>A.I.</p>
                  </div>
                  <div class="packDesc">
                    <p>>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <p>>Fusce varius metus sit amet nibh lobortis tempor. </p>
                    <p>>Donec efficitur tellus quis venenatis finibus. </p>
                    <p>>Phasellus eu lectus ut augue hendrerit ultrices. </p>
                    <p>>Ut hendrerit tortor id ligula varius, nec malesuada ipsum rutrum.</p>
                  </div>
                  <div class="form-check center-radio">
                    <input class="form-check-input" type="radio" name="virPack" id="exampleRadios2" value="2">
                    <label class="form-check-label" for="exampleRadios2">
                    </label>
                  </div>
                </div>

                <!--Personal Pack-->
                <div class="col">
                  <div class="packTitle">
                    <p>Personal</p>
                  </div>
                  <div class="packDesc">
                    <p>>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <p>>Fusce varius metus sit amet nibh lobortis tempor. </p>
                    <p>>Donec efficitur tellus quis venenatis finibus. </p>
                    <p>>Phasellus eu lectus ut augue hendrerit ultrices. </p>
                    <p>>Ut hendrerit tortor id ligula varius, nec malesuada ipsum rutrum. </p>
                    <p>>Integer commodo ante ac lacus rhoncus egestas. </p>
                    <p>>Morbi vulputate lorem sit amet massa tincidunt, in hendrerit urna euismod. </p>
                    <p>>Aenean ut dui nec tortor gravida fringilla.</p>
                  </div>
                  <div class="form-check center-radio">
                    <input class="form-check-input" type="radio" name="virPack" id="exampleRadios3" value="3">
                    <label class="form-check-label" for="exampleRadios3">
                    </label>
                  </div>
                </div>
              </div>

              <div class="row range">

                <div class="col-2"> <label for="customRange1">Price: <label id="rangePrice"></label> </label> </div>
                <div class="col-10"> <input type="range" name="price" min="1" max="10000" value="500" class="custom-range" id="customRange1"></div>
              </div>




              <!--Progress Bar 67%-->
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>

              </div>

              <div class="row">

                <!--Submit Step-->

                <button type="submit" name="submitButt" class="btn btn-primary">Submit</button>
              </div>

            </div>
        </form>

      </div>
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
  <script src="includes/uploadSubmit.js"></script>
</body>




</html>