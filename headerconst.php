<?php
session_start();
?>

<div id="fixedHead">

    <header>

        <!-- Logo -->
        <a id="logo" href="index.php"></a>

        <!-- Search Bar -->
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" id="searchBar">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group" id="category">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Category</option>
                                <option>Revenge</option>
                                <option>Device Takeover</option>
                                <option>Money Making</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group" id="category">
                            <button type="button" class="btn btn-secondary" id="searchButton">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </header>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand navIMG" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="RevengePage.php">Browse</a>
                </li>
                <?php
                    if($_SESSION["user_id"]){
                         echo '                <li class="nav-item">
                         <a class="nav-link" href="uploadVir.php">Upload</a>
                     </li>';
                    }
                ?>

                <?php
                    if($_SESSION["user_id"]){
                         echo '                <li class="nav-item">
                         <a class="nav-link" href="#">Sell</a>
                     </li>';
                    }
                ?>


    <!-- REMEMBER TO SWITCH BACK!!!! -->
                <?php
                    if($_SESSION["user_id"]){
                         echo '               <li class="nav-item">
                         <a class="nav-link" href="admin.php">My Page</a>
                     </li>';
                    }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Cart</a>
                </li>
                <?php
                    if($_SESSION["is_admin"]==1)
                    {
                        echo '                <li class="nav-item">
                        <a class="nav-link active" href="admin.php">Admin</a>
                    </li>';
                    }
                ?>
                <li class="nav-item">
                    <?php
                    if($_SESSION["user_id"]){
                        echo '<a class="nav-link" href="logout.php">Logout</a>';
                    }
                    else {
                        echo '<a class="nav-link" href="login.php">Login</a>';
                    }
                    ?>
                    
                </li>
            </ul>
        </div>
    </nav>
</div>