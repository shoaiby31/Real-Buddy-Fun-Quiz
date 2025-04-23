<?php
include("config/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Do your Friends Really, Really Know You?</title>
</head>
</head>
<style type="text/css">
	body
	{	
		color: white;
		background-image: linear-gradient(to top, #193367, black 16%);
		height: 100%;
	}
	.center
	{
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
	  width: 42%;
	  margin-top: -4.96%;
	}
	.box
	{
		background-color: #f2f2f2;
		color: Black;
		border-radius: 25px;
		text-align: center;
		padding-top: 4%;
		border-bottom: 10px solid #004d39;
	}
	.heading1
	{
		font-family: arial;
		font-weight: bold;
		font-size: 28px;
	}
	.heading2
	{
		font-family: arial;
		font-weight: bold;
		font-size: 18px;
	}
	.numberCircle
	{
    width: 45px;
    line-height: 35px;
    border-radius: 50%;
    text-align: center;
    font-weight: bold;
    font-size: 18px;
    border: 5px solid #004d39;
	}
	.inline{
		display:inline-block;
		/*margin-left: -100px;*/
	}
	.box-style
	{
		margin: 4%;
		font-family: arial;
		font-weight: bold;
		font-size: 16px;
	}
	.blink-bg{
		background-color: #f2f2f2;

		color: Black;
		width: 100%;
		color: #fff;
		padding: 10px;
		display: inline-block;
		border-radius: 5px;
		animation: blinkingBackground 3s infinite;
	}
	@keyframes blinkingBackground{
		0%		{ background-color: #f2f2f2;}
		25%		{ background-color: #99ffff;}
		50%		{ background-color: #00cccc;}
		75%		{ background-color: #b3ff99;}
		100%	{ background-color: #ff66cc;}
	}
	.question-no-box
	{	
		width: 35%;
		margin-left: 2%;
		background-color: #00b386;
		font-family: Calibri (Body);
		font-weight: bold;
		font-size: 17px;
		padding-top: 1.5%;
		color: White;
		border-radius: 20px 20px 0px 0px;
		text-align: center;
	}

/* nice bootstrap ready facebook share button http://justincron.com */

.btn-facebook {
	color: #fff;
	background-color: #4C67A1;
}
.btn-facebook:hover {
	color: #fff;
	background-color: #405D9B;
}
.btn-facebook:focus {
	color: #fff;
}
</style>
<script>
	function myFunction()
	{
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */

}
</script>
<body>
<div class="navbar center">
	<img src="images/logo2.png" class="logo center">
</div>
<br>
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-5" style="margin-left: 4%; margin-right: 4%;">
		<div class="panel panel-default box">
		<div class="panel-body">
			<span class="heading2" style="text-align: justify; text-justify: inter-word;">
				<i class="fa fa-refresh fa-spin" style="font-size:24px; color:#00b386;"></i>
			Please reload this page in a few minutes<br>to see your friends results</span><br><br>
		</div>
		</div>
		</div>
</div>
</div>

<br>

<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-5" style="margin-left: 4%; margin-right: 4%;">
			<?php
			$quiz_id=$_GET['quiz_id'];
			$email= base64_decode($quiz_id);
			$username=$_GET['username'];
			$username= base64_decode($username);
			$result_qry="SELECT * FROM result WHERE quiz_author='".$email."' && quiz_username='".$username."'";
			$run_result_qry=mysqli_querry($connect,$result_qry);
			
			?>
		</div>
</div>
</div>
<br><br>




<div class="container">
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<div class="panel panel-default blink-bg">
		<div class="panel-body image">
			<div class="responsive-logo-white rotate" style=" background-image: url('images/logo3.png');background-repeat: no-repeat; background-size: 15% 100%;">
			<h5 class="heading2" style="margin-left: 17%;padding-top: 3%; color: Black;">Download the #1 Affirmation app and manifest your Dream Life</h5>
			<br>


		</div>
		</div>
		</div>
</div>
</div>
<br><br>
</body>
</html>