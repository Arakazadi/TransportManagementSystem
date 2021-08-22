<?php 
 session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Give Your Feedback </title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    
    </head>

    <body>
        
    <?php include 'navbar.php';?>
    <div class="page-header foo">
            <h1 style="text-align: center;">Feedback</h1>      
      </div> 

    <form>
        
        <h1 style="text-align: center; font-size:22px;">Give Your Feedback</h1>

        <div class="container">

        <input type="text" placeholder="Full Name" id="full_name" name="full_name"> <br> <br>
        <input type="text" placeholder="Email Address" id="email_add" name="email_add"> <br> <br>
        
        Enter Your Feedback: <br>
        <textarea cols="120" rows="8" placeholder="Enter Your Feedback" id="FB" name="FB">  </textarea> <br>
            
        </div>

        <input type="submit" value="Submit">
        

    </form>
    
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    </body>
</html>