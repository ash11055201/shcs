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
    <link rel="stylesheet" type="text/css" href="sstyle.css" media="screen"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
  <?php 
        include 'dbcon.php';
        if(isset($_POST["submit1"])){
            if(isset($_POST['consult1'])){
                if(isset($_POST['consult2'])){
            $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            $consult1 = $_POST['consult1'];
            $consult2 = $_POST['consult2'];
            $text = $_POST['note'];
            mysqli_query($con,"insert into schedule (image1,consult1,consult2,note) values ('$image','$consult1','$consult2','$text')"); 
            ?>
            <script>
                location.replace("patientdetails.php");
            </script>
            <?php
            }
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
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" >
    
        <div class="featured">
            <h1>Schedule</h1><br><br>
        </div>
        <div class="question">   <h3 style="font-size: 2.5rem;">What would you like to book for?</h3></div>
        
        <div class="sbox">
        <select id="slct1" name="consult1" onchange="populate(this.id,'slct2')" required>
          <option value="">Select Consultation:</option>
          <option value="Primary care">Primary care</option>
          <option value="Lifestyle Diseases">Lifestyle Diseases</option>
          <option value="Private Issues">Private Issues</option>
          <option value="Other Consultation">Other Consultation</option>
        </select>
        <hr/>
        </div>
        <div class="sbox2">
            <select id="slct2" name="consult2" required></select>
        <hr/>
        </div>
        <div class="cquestion">   <h3 style="font-size: 2.5rem;">Mode of consultation.</h3></div>
        <a href="#" class="button" style="position: absolute;top:100%;left: 45%;"><span class="glyphicon glyphicon-facetime-video" >  Video</span></a>
        <div class="aquestion">   <h3 style="font-size: 2.5rem;">Additional Info <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-original-title="Please feel free to share your comments or upload documents that can help you during the consultation.
    As per strict legal policies, we ensure complete confidentiality of all information and data."></span></h3></div>
        <div class="md-form amber-textarea active-amber-textarea-2 nquestion">
          <textarea id="form16" class="md-textarea form-control" rows="3" name="note" required></textarea>
          <label for="form16"></label>
        </div>
      <input type="file" name="file" id="real-file" style="display:none" />
        <button type="button"  id="custom-button"  >CHOOSE A FILE</button>
        <span id="custom-text" >No file chosen, yet.</span><br>  
        <button type="submit" name="submit1" class="button" style="position: absolute;top:145%;left: 25%;width: 830px;font-size: 2rem;text-align: center;"name=""> NEXT   <span class="glyphicon glyphicon-chevron-right" ></span></button>

</div>
</form>


<script>
    function populate(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value == "Primary care"){
        var optionArray = ["|","Acne|Acne","Allergies|Allergies","Fever|Fever","Cold, Flu & RTIs|Cold, Flu & RTIs","Sinusitis|Sinusitis","Bruising|Bruising","Childhood Infections|Childhood Infections","Eye Problems|Eye Problems","Conjunctivitis|Conjunctivitis","Nausea/ Vomiting|Nausea/ Vomiting","ENT Infections|ENT Infections","Acidity|Acidity","Food Poisoning|Food Poisoning","Dengue|Dengue","Stomach Pain & Ulcers|Stomach Pain & Ulcers","Indigestion & Digestive Problems|Indigestion & Digestive Problems","Chicken Pox Treatment|Chicken Pox Treatment","Muscle Strain & Muscle Pain|Muscle Strain & Muscle Pain","Headache & Migraines|Headache & Migraines","Joint pains & Osteoporosis|Joint pains & Osteoporosis","Chest Pain|Chest Pain"];
    } else if(s1.value == "Lifestyle Diseases"){
        var optionArray = ["|","Asthma|Asthma","Diabetes|Diabetes","Hypertension|Hypertension","Obesity|Obesity","Pneumonia|Pneumonia","Heart Diseases|Heart Diseases","Insomnia|Insomnia","Cancer|Cancer","Appendicitis|Appendicitis","Backache|Backache","Malaria & Typhoid|Malaria & Typhoid","Digital Eye Strain|Digital Eye Strain","Addictions|Addictions","High Cholesterol|High Cholesterol"];
    } else if(s1.value == "Private Issues"){
        var optionArray = ["|","Hair Fall|Hair Fall","Itchy Scalp|Itchy Scalp","Oily SKin|Oily SKin","Constipation|Constipation","Bad Breath|Bad Breath","Urinary Infection|Urinary Infection","Sexual Problems|Sexual Problems","Lumps|Lumps","Anal Itching & Piles|Anal Itching & Piles"];
    }
    else if(s1.value == "Other Consultation"){
        var optionArray = ["|","Nutrition & Diet|Nutrition & Diet","Depression|Depression","Mental Health Disorder|Mental Health Disorder","Women’s Health|Women’s Health","Breast Cancer|Breast Cancer","Cervical Cancer|Cervical Cancer","Mother & Child Health during and after Pregnancy|Mother & Child Health during and after Pregnancy","Blood Pressure|Blood Pressure","Kidney Stones|Kidney Stones"];
    }
    for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});
</script>
<script>
 const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});

</script>
</body>
</html>