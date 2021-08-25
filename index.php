<?php 
//  $connection=mysqli_connect("localhost","root","","heroku_5e97e1a347139a9");
//$connection= mysqli_connect("localhost","root","","vehicle_management");

$connection= mysqli_connect("host","user","pass","heroku_5e97e1a347139a9");
  //Get Heroku ClearDB connection information
    //Get Heroku ClearDB connection information
    $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
    $active_group = 'default';
    $query_builder = TRUE;
    // Connect to DB
    $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

 session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Transport management system</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    

 
</head> 
<style>
    
.parallax {
    /* The image used */
    background-image: url("image.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("image3.jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   

    <div class="parallax foo">
       <?php include 'navbar.php';?>
    
        <div class="hero-text" style="font-size:50px; text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">
           
            <h1 class="animated rubberBand" >Bus Transport Management System</h1>
            <p>A management system where you can easily manage Transport</p>
            
            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="buslist.php">Check Bus List</a>
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Check Bus List</a> 
            <?php } ?>
			
			<?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="Statuslist.php">Check Status</a>
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Check Status</a> 
            <?php } ?>
            
          </div>
    </div>                 
    
    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus Route</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6 foo">
                <p><b>We have about ten buses in Ruet, each of which is well run. These buses run in various directions across the city and can be employed...</b></p>
                <img src="image2.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6">
                  <br>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.294420466!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1620064640060!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                   <p>The Bus Route</p>
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center">Driver</h1>      
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
          <div class="row">
              <div class="col-md-12">
                  <p style="font-size:24px; text-align: center;">
                  Ruet's drivers are always on time and have excellent support. 
                  Every single one of them is a consummate professional who excels 
                  in what they do. Drivers are friendly and always enjoy while 
                  doing their jobs which also makes the customers happy and motivated.
                </p>

                <p style="font-size:22px; text-align: center; color: green;">
                  <strong>
                  We believe in customers satisfaction and customer safety is our priority.
                  </strong>
                </p>
                  
              </div>
          </div>
               
        </div>
        
        <br>
        <br>
        
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                
                <img src="image4.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:24px; text-align: justify;">
                    We have about ten buses in Ruet, each of which is well run. 
                    These buses run in various directions across the city and can be employed.

                </p>
                  <p style="font-size:24px; text-align: justify;">
                  The buses are well maintained and always up-to-date with all the functionality. 
                  Highly safe features are installed which ensure the customer's safety. 
                  </p>

                  <p style="font-size:22px; text-align: justify; color: green;">
                  
                  We believe in customers satisfaction and customer safety is our priority. 
                  We always take customer's feedback to make our services better and better 
                  and always try to make our customers happy.
                 
                </p>

              </div>
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        
        <footer style="background-color: #2f2f2f;
          color: #fff; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center">
                <p>All rights reserved by IAF</p> 
        </footer>
        
        
        
        
    
    
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>
