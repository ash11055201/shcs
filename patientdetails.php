<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>MediSeva</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pstyle.css" media="screen"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
    <?php 
        include 'dbcon.php';
        if(isset($_POST["submit1"])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $bloodgroup = $_POST['bloodgroup'];
            $mobileno = $_POST['mobileno'];           
                    $insertquery = "INSERT INTO patientdetails(firstname,lastname,email,bloodgroup,mobileno) VALUES ('$firstname','$lastname','$email','$bloodgroup','$mobileno')";

                    $iquery = mysqli_query($con,$insertquery);
                    if($iquery){
                        ?>
                        <script>
                            location.replace("confirmation.php");
                        </script>
                         <!--    <script>
                                alert("Inserted Successful");
                            </script> -->
                        <?php

                    }else{
                        ?>
                            <!-- <script>
                                alert("Inserted UnSuccessful");
                            </script>    -->
                        <?php
                    }
                
                
            }
        
    ?>
	<header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                        <img src="logo.jpg" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="treat.php">What we Treat</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <li><a href="#blog">Blog</a></li>  
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a href="book.php"><button class="btn btn-success" >Book an Appointment</button></a>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <br><br><br>
    
<div class="white-box">
    <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" class="contactForm" >
    
        <div class="featured">
            <h1>Patient Details</h1><br><br>
        </div>
        <div class="question1" >  <h3 style="font-size: 2.5rem;">Enter your name :   </h3></div><br>
            <div class="inputBox" style="max-width:400px;margin:auto;">
                <input type="text" name="firstname" required=""/>
                <label><span class="glyphicon glyphicon-user"></span> First Name</label>
            </div>
             <div class="inputBox" style="max-width:400px;margin:auto;">
                <input type="text" name="lastname" required=""/>
                <label><span class="glyphicon glyphicon-user"></span> Last Name</label>
            </div><br><br>
            <div class="question2" >   <h3 style="font-size: 2.5rem;">Enter your email address :   </h3></div><br>
            <div class="inputBox" style="max-width:400px;margin:auto;">
                <input type="text" name="email" required=""/>
                <label><span class="glyphicon glyphicon-envelope"></span> Email Address</label>
            </div><br><br>
            <div class="question3" >   <h3 style="font-size: 2.5rem;">Enter your Blood Group :   </h3><br></div><br>
            <div class="inputBox" style="max-width:400px;margin:auto;">
                <input type="text" name="bloodgroup" required=""/>
                <label><span class="glyphicon glyphicon-heart"></span> Blood Group</label>
            </div><br><br>
            <div class="question4" >   <h3 style="font-size: 2.5rem;">Enter your Mobile Number :   </h3></div><br>
            <div class="inputBox" style="max-width:400px;margin:auto;">
                <input type="text" name="mobileno" required=""/>
                <label><i class="fa fa-mobile"></i> Mobile Number</label>
            </div><br><br>
        </div>
        <button type="submit" name="submit1" class="button" style="position: absolute;top:145%;left: 25%;
        height:50px;width: 840px;font-size: 2rem;text-align: center;color:white;background-color: green;"name=""> NEXT   <span class="glyphicon glyphicon-chevron-right" ></span></button>

</div>
</form>
  
</body>
</html>