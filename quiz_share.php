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

<title>How well do your friends know you?</title>
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
	  margin-top: -16.5%;
	}
	.box
	{
		background-color: #f2f2f2;
		color: Black;
		border-radius: 25px;
		text-align: center;
		padding-top: 4%;
		border-radius: 25px 0px 25px 0px;
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
		width: 37%;
		background-color: #193367;
		font-family: Calibri (Body);
		font-weight: bold;
		font-size: 15px;
		padding-top: 1%;
		text-align:center;
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
.panel{
		box-shadow: 1px 0px 20px 9px #193367;
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="MajmpMCs"></script>


<?php
if(!isset($_GET['quiz_id']))
{
	$okmsg= base64_encode("Please Enter Your Name & Email:");
    header("Location:index.php?okmsg=$okmsg");
}
else
{
    $email1=$_GET['quiz_id'];
	$email1=base64_decode($email1);
	$result_qry="SELECT * From result WHERE quiz_author='".$email1."'";
	$run_result_qry=mysqli_query($connect,$result_qry);
	$fetch_result=mysqli_num_rows($run_result_qry);
	if($fetch_result!=0)
	{
		$result=base64_encode($result);
        header("Location:admin_dashboard.php?email=$email1");
	}
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
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<div class="panel panel-default box">
		<div class="panel-heading" style="border-radius: 18px 0px 18px 0px;">
			<span class="heading2" style="padding-top:-6%; text-align: justify; font-size:15px; text-justify: inter-word;">
				<i class="fa fa-refresh fa-spin" style="font-size:24px; color:#1a75ff;"></i>
			Please reload this page in a few minutes to see your friends results</span><br>
		</div>
		</div>
		</div>
</div>
</div>

<br>

<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<div class="panel panel-default box">
			<div class="panel-heading" style="border-radius: 18px 0px 0px 0px;">
				<span class="heading2">Your Quiz is Ready</span>
			</div>
			
		<div class="panel-body">

			<?php 
			 if(isset($_GET['okmsg']))
                  {
              ?>
                <div class="alert alert-success" role="alert">
              <?php
                echo base64_decode($_GET['okmsg']);
              ?>
                </div>
               <?php 
                 }
			$email=$_GET['quiz_id'];?>
			<i class="fa fa-share-alt" style="font-size:24px; margin-left: 0%; color: #1a75ff;"></i><span class="heading2" style="line-height: 2px; font-size: 14px; text-align: left;">&nbsp; Now simply share yoour quiz link with all your friends</span><br><br>
			<i class="fa fa-tasks" style="font-size:22px; margin-top: 4px; margin-left: 0%;  color: #1a75ff;"></i><span class="heading2" style="line-height: 2px; font-size: 14px; text-align: left;">&nbsp; Your friends will try to match your answers & get a score out of 10.</span>
		<br><br>
		<div class="question-no-box" style="margin-left: 0%;">Your Quiz Link<br><br></div>
		<input type="text" name="quiz_link" class="form-control heading3" id="myInput" value="http://localhost/fb_quiz/user-dashboard.php?quiz_id=<?php echo $email; ?>" style="margin-top: -3.8%; padding:6%; border-radius: 16px 16px 16px 16px;">
		<button onclick="myFunction()" class="btn btn-default" style="color: White; margin-left: 68.9%; margin-top: 1%; background-color: #193367;">Copy Link</button>
		

		<!-- Sharingbutton Facebook -->
	<div class="fb-share-button" data-href="http://localhost/fb_quiz/user-dashboard.php?quiz_id=<?php echo $email; ?>=" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgrandrisingquiz.com%2Fuser-dashboard.php%3Fquiz_id%3D<?php echo $email; ?>%253D&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> 


		<br><br>
		<p style="font-size: 14px; background-color: #193367; font-weight: bold; text-align: left; color: White; text-align: center;">You can see the results when you open your quiz link in this browser only.</p>
		<p style="font-size: 14px; background-color: #193367; font-weight: bold; text-align: left; color: White; text-align: center;">See results of your Quiz</p>



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