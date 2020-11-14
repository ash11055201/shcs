<?php 
	header("Content-type: text/css");
?>
html { 
  background: url(doc.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.form-box{
	width: 380px;
	height: 630px;
	position: relative;
	margin: 6% auto;
	background: #D0D3D4;
	padding: 5px;
	overflow: hidden;
}
.button-box{
	width: 300px;
	margin: 35px auto;
	position: relative;
	
	
}
.toggle-btn{
	padding: 10px 30px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
}
#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: linear-gradient(to right, #ff105f,#ffad06);
	border-radius:30px;
	transition: .5s;
}
.input-group{
	top:100px;
	position: absolute;
	width: 280px;
	transition: .5s;
}
.input-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 0;
	border-left: 0;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
}
.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right, #ff105f,#ffad06);
	border:0;
	outline: none;
	border-radius: 30px;
}
.check-box{
	margin: 30px 10px 30px 0;
}
.text-center{
	margin: 30px 10px 30px 0;
}
span{
	color: #777;
	font-size: 12px;
	bottom: 68px;
	position: absolute;
}
#login{
	left: 50px;
}
#register{
	left: 450px;
}
.transparent {
    background-color: transparent !important;
    box-shadow: inset 0px 1px 0 rgba(0,0,0,.075);
 }
 .left-border-none {
    border-left:none !important;
    box-shadow: inset 0px 1px 0 rgba(0,0,0,.075);
 }