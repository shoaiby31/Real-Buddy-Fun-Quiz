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
	}
	.box
	{
		background-color: #f2f2f2;
		color: Black;
		border-radius: 25px;
		text-align: center;
		padding-top: 4%;
		border-radius: 25px 0px 25px 0px;
		border-color: #002233;
	}
	.heading1
	{
		font-family: Arial;
		font-weight: bold;
		font-size: 28px;
	}
	.heading2
	{
		font-family: Arial;
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
	.btn-style
	{
		width: 100%;
		font-weight: bold;
		font-size: 24px;
		border-color: transparent;
		background-color: #00b8e6;
		border-radius: 15px 15px 15px 15px;
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

/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.progress {
  width: 150px;
  height: 150px;
  background: none;
  position: relative;
}

.progress::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid #eee;
}

.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.progress .progress-left {
  left: 0;
}

.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  background-color: transparent;
  border-width: 12px;
  border-style: solid;
  border-color: Black;
  position: absolute;
  top: 0;
}

.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}

.progress .progress-right {
  right: 0;
}

.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}

.progress .progress-value {

  margin-top: 35%;
  margin-left: 8%;
}

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/



.rounded-lg {
  border-radius: 1rem;
}

.text-gray {
  color: #aaa;
}

div.h4 {
  line-height: 1rem;
}
.panel{
		box-shadow: 1px 0px 20px 9px #193367;
	}

</style>
<body>
	<?php
	if(!isset($_GET['id']))
	{
		$errormsg= base64_encode("Please Login to Continue:");
    	header("Location:index.php?errormsg=$errormsg");
	}
	else
	{
	?>
<div class="container">
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<img src="images/logo2.png" class="logo center">
	</div>
</div>
</div>
<br>
<?php
$useremail=base64_decode($_GET['id']);
$slct_option_qry="SELECT * FROM user_dmc WHERE user_email='".$useremail."'";
$run_slct_option_qry=mysqli_query($connect,$slct_option_qry);
$qload="SELECT * From questions";
$runqload=mysqli_query($connect,$qload);
?>
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-default box" style="background-color: #193367; border-color: White; border-radius: 18px 0px 18px 0px;">
				<div class="panel-heading align" style="background-color: #193367; text-align: center; color: White; border-radius: 17px 17px 0px 0px;">
					<span class="heading1">Attempted Quiz Details</span>
				</div>
			<div class="panel-body align" style="color: Black; display: block; background-color: White; border-radius: 0px 0px 18px 0px;">
				<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>Question</th>
				        <th style="text-align: center;">Selected Option</th>
				        <th style="text-align: center;">Correct Option</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php
				    	while($fetchq=mysqli_fetch_array($runqload) AND $fetch_slct_option=mysqli_fetch_array($run_slct_option_qry))
						{ ?>
				    	<tr>
				    		<td style="font-size:10px;"><?php echo $fetchq['question_part_a']," ",$quiz_author['name']," ", $fetchq['question_part_b']; ?></td>
<?php if($fetch_slct_option['selected_option']==$fetch_slct_option['correct_option'])
{?>
<td style="background-color:#4dffb8; font-size:10px;"><?php echo $fetch_slct_option['selected_option']; ?></td>
<td style="background-color:#4dffb8; font-size:10px;"><?php echo $fetch_slct_option['correct_option']; ?></td>
<?php } 
else
{
?>
				    		<td style="background-color:#ff8080; font-size:10px;"><?php echo $fetch_slct_option['selected_option']; ?></td>
				    		<td style="background-color:#ff8080; font-size:10px;"><?php echo $fetch_slct_option['correct_option']; ?></td>
				    		<?php } ?>
				    	</tr>
				    	<?php } ?>
				    </tbody>
				</table>

			</div>
		</div>
</div>
</div>
</div>

<br>

<div class="container">
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8" >
		<div class="panel panel-default" style="box-shadow: none;">
			<a href="https://grandrising.app/">
			<img src="images/ad1.png" style="width: 100%;">
			</a>
		</div>
		</div>
</div>
</div>
<?php } ?>
</body>
</html>