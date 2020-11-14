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
    <link rel="stylesheet" type="text/css" href="cstyle.css" media="screen"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
    <?php 
        include 'dbcon.php';
        $selectquery = "select * from patientdetails ORDER BY patientid DESC LIMIT 1";
        $query = mysqli_query($con,$selectquery);
        $nums = mysqli_num_rows($query);
        $res = mysqli_fetch_array($query);
        $selectquery2 = "select * from schedule ORDER BY scheduleid DESC LIMIT 1";
        $query2 = mysqli_query($con,$selectquery2);
        $nums2 = mysqli_num_rows($query2);
        $res2 = mysqli_fetch_array($query2);
        
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
            <h1>Confirm Details</h1><br><br>
        </div>
        <div class="question1" >  <h3 style="font-size: 2.5rem;">Your name :   </h3></div><br><br><br>
            <div style="max-width:220px;margin:auto;position: absolute;left: 20%;">
            <label class="glyphicon glyphicon-user other"> <span style="color:green">
            <?php 
                echo $res[0];
            ?>
            </span></label>
            </div>
             <div style="max-width:220px;margin:auto;position: absolute;left: 32%;">
                <label class="glyphicon glyphicon-user other"> <span style="color:green">
                <?php 
                echo $res[1];
                ?>
            </span></label>
            </div>
            <div class="question2" ><h3 style="font-size: 2.5rem;">Your email address :</h3></div><br><br><br>
             <div style="max-width:220px;margin:auto;position: absolute;left: 59%; top: 56%;">
            <label class="glyphicon glyphicon-envelope other"><span style="color:green;font-size: 2rem; position: absolute;left: 100%;top: 15%;">
            <?php 
                echo $res[2];
            ?>
            </span></label>
            </div>
        <div class="question3" ><h3 style="font-size: 2.5rem;">Your Blood Group :</h3><br></div><br>
            <div style="max-width:400px;margin:auto;position: absolute;left: 25%; top: 77%;">
                <label class="glyphicon glyphicon-heart other"> <span style="color:green">
                <?php 
                    echo $res[3];
                ?>
            </span></label>
            </div>
            <div class="question4" >   <h3 style="font-size: 2.5rem;">Your Mobile Number :</h3></div><br>
            <div style="max-width:400px;margin:auto;position: absolute;left: 60%; top: 77%;">
                <label class="other"><i class="fa fa-mobile"></i> <span style="color:green">
                <?php 
                    echo $res[4];
                ?>
            </span></label>
        </div>
        <div class="question5" >   <h3 style="font-size: 2.5rem;">Your Consult1 :</h3></div><br>
            <div style="max-width:400px;margin:auto;position: absolute;left: 22%; top: 98%;">
                <label class="other"><i class="fa fa-stethoscope"></i> <span style="color:green">
                <?php 
                    echo $res2[1];
                ?>
            </span></label>
        </div>
        <div class="question6" >   <h3 style="font-size: 2.5rem;">Your Consult2 :</h3></div><br>
            <div style="max-width:400px;margin:auto;position: absolute;left: 60%; top: 98%;">
                <label class="other"><i class="fa fa-stethoscope"></i><span style="color:green">
                <?php 
                    echo $res2[2];
                ?>
            </span></label>
        </div>
         <div class="question7" >   <h3 style="font-size: 2.5rem;">Your Video :</h3></div><br>
            <div style="max-width:400px;margin:auto;position: absolute;left: 22%; top: 118%;">
               <label class="other"><i class="glyphicon glyphicon-facetime-video"></i><span style="color:green">
                <?php 
                    echo $res2[2];
                ?>
            </span></label>
        </div>
        <div class="question8" >   <h3 style="font-size: 2.5rem;">Your Note :</h3></div><br>
            <div style="margin:auto;position: absolute;left: 60%; top: 118%;">
                <label class="other" style=" width:350px; height: 150px;overflow: hidden;text-overflow: ellipsis; border: 1px solid #000000;display: inline-block;word-wrap: break-word;"><i class="fa fa-sticky-note"></i><span style="color:green"> 
                <?php 
                    echo $res2[3];
                ?>
            </span></label>
        </div>
        <button type="submit" name="submit1" class="button" style="position: absolute;top:145%;left: 25%;
        height:50px;width: 840px;font-size: 2rem;text-align: center;color:white;background-color: green;"name=""> CONFIRM   <span class="glyphicon glyphicon-chevron-right" ></span></button>

</div>
</form>
  
</body>
</html>