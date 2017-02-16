<?php
include("db.php");
session_start();
$username = $_SESSION['login_user'];
?>

<!DOCTYPE html >
<html>
</div>
<style type="text/css"></style>
    
  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title> Things of airbnb</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/product.css" type="text/css" media="all" />
    <!-- JS -->
    <script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>   
    <script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>  
    <script src="js/jquery-func.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <!-- End JS -->
</head>



<body>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Airbnb Of Things</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="airbnb.html">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Find Items</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Rent Items</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Reservation</a>
                    </li>
                    <?php
                    if (!$_SESSION['login_user']){ ?>
                      <li>
                          <a class="page-scroll" href="login.html">Login</a>
                      </li>
                       <li>
                          <a class="page-scroll" href="signup.html">Sign up</a>
                      </li>
                    <?php } else {?>
                      <li>
                          <a class="page-scroll" href="myitem.php">My Item</a>
                      </li>
                      <li>
                          <a class="page-scroll" href="logout.php">Log Out</a>
                      </li>
                    <?php } ?>
                </ul>
                
                <form class="navbar-form navbar-left" role="search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

                     <!-- Text Cols -->
                <div class="cols">
                    <div class="cl">&nbsp;</div>

                    <div class="col">
                        <h3 class="ico ico1">Track Orders</h3>
                        <p> Know where your ordered Items have arrived.</p>
                        <p class="more"><a href="#" class="bul">Enter Details</a></p>
                    </div>

                    <div class="col">
                        <h3 class="ico ico2">Facebook</h3>
                        <p> Meet other people on our Facebook community.</p>
                        <p class="more"><a href="#" class="bul">Join</a></p>
                    </div>

                    <div class="col">
                        <h3 class="ico ico3">Twitter</h3>
                        <p> Get the latest updates about on our store.</p>
                        <p class="more"><a href="#" class="bul">Follow</a></p>
                    </div>

                    <div class="col col-last">
                        <h3 class="ico ico4"> YouTube</h3>
                        <p>Watch Gameplays and Walkthroughs from our experts.</p>
                        <p class="more"><a href="#" class="bul">Subscribe</a></p>
                    </div>

                    <div class="cl">&nbsp;</div>
                </div>
                <!-- End Text Cols -->
           

                    <ul>
                    <h1>Spectacular Mountain</h1>
                        <img src="5500213fc9c3e-motorcycle-0110-s3.jpg" alt="Items" style="width:304px;height:228px;">
                    <h2>Spectacular Mountain</h2>
                         <img src="DSC01298.JPG" alt="Items" style="width:304px;height:228px;">
                    <h3>Spectacular Mountain</h3>
                         <img src="magnum.png" alt="Mountain View" style="width:304px;height:228px;">
                   <h4>Spectacular Mountain</h4>
                         <img src="images.jpeg" alt="Mountain View" style="width:304px;height:228px;">
                    

                    <footer class="text-muted well" id="last-footer">
    <section>
    <div class="row" style="font-size:11px;">
    <div class="container">
    <h3 class="subhead" style="text-align:center;">Thanks for visiting our website</h3>
       <div class="col-md-9">
        <div class="row" >
      <div class="col-md-3">
      <div class="row footlinks">
      <div class="col-xs-12">
      <h5>About US</h5>
      <h7 allign="Justify">AirBnb of things is a cummunity marketplace which allows the people to browse, rent and hier the secondhand products. Funded in 2017, this company is currently based on renting and hireing the products inside the Oulu city, Finland. We provide the website platform, which will give our users the oppertunity to rent their second hand items by uploading the pictures, date/time, and other informations through our website. Similarly, users can also browse the available items, select them and hier them. We provide the trusted payment method via paypal and other similar otoher platforms.</h7>
      </div>
      </div>
      </div>
      <div class="col-md-3">
      <div class="row footlinks">
      <div class="col-xs-12">
      <h5>Contact US</h5>
      <h7 allign="justify">Airbnb of Things (Main office) <br>Kotkantie 1, 90250<br>Oulu, Finland</h7>
      </div>
      </div>
      </div>
      <div class="col-md-3">
      <div class="row footlinks">
      <div class="col-xs-12">
      <a href="FAQs.html"><h5>Faqs</h5></a>
      </div>
      </div>
      </div>
      <hr/>     
        </div><!--/.row inner--> 
    </div>
    
          </ul>   
        </form>   
    </div></div>    
     </div>
    
    
    <footer>  <div class="row">
      <div class="container text-center">
        <h5>All Rights Reserved © 2017.</h5>
      </div>
      </div></footer>
       </div><!--/.container--> 
       </div><!--/.row outer--> 
    </section>
        </footer>


</body>
</html>