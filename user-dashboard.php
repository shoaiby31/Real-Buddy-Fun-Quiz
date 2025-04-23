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
		width: 35%;
		margin-left: 1%;
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
.panel{
		box-shadow: 1px 0px 20px 9px #193367;
	}
</style>
<body>
<?php
if(!isset($_GET['quiz_id']))
{
	$okmsg= base64_encode("Please Enter Your Name & Email:");
    header("Location:index.php?okmsg=$okmsg");
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
<div class="container">
<div class="row">
	<?php
	$quiz_id=$_GET['quiz_id'];
	$email= base64_decode($quiz_id);
	$name_qry="SELECT * FROM users WHERE email='".$email."'";
	$run_name_qry=mysqli_query($connect,$name_qry);
	$fetch_name=mysqli_fetch_array($run_name_qry);
	?>
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<div class="panel panel-default box">
			<div class="panel-heading">
				<span class="heading2" style="font-size: 22px;">Prove how well you know</span><br>
				<span class="heading1"><?php echo $fetch_name['name']; ?></span>
			</div>
		<div class="panel-body">
			<form method="post" action="">
  			<div class="form-group box-style">
	    	<label for="name">Name</label>
	    	<input type="text" class="form-control" name="user-name" placeholder="Enter name....." style="padding:6%; border-radius: 18px 18px 18px 18px;">
	    	<label for="name">Email</label>
	    	<input type="email" class="form-control" name="user-email" placeholder="Enter email....." style="padding:6%; border-radius: 18px 18px 18px 18px;">
	  		</div>
	  		<input type="submit" class="btn btn-default" name="submit-btn" value="&nbsp;&nbsp;&nbsp;&nbsp; Get Started &nbsp;&nbsp;&nbsp;&nbsp;" style="background-color: #00a3cc;  border-radius: 15px; width: 90%; color: White; font-weight: bold; font-size: 16px;">
			<?php
			if(isset($_POST['submit-btn']))
			{
				$username=$_POST['user-name'];
				$useremail=$_POST['user-email'];
				$slct_option_qry="SELECT * FROM user_dmc WHERE user_email='".$useremail."'";
				$run_slct_option_qry=mysqli_query($connect,$slct_option_qry);
				$fetch_data=mysqli_num_rows($run_slct_option_qry);
				if($fetch_data!=0)
				{
				$username = base64_encode($username);
				$useremail = base64_encode($useremail);
				header("Location:result.php?quiz_id=$quiz_id&&useremail=$useremail&&username=$username");

				}
				$username = base64_encode($username);
				$useremail = base64_encode($useremail);
				header("Location:test.php?quiz_id=$quiz_id&&useremail=$useremail&&username=$username");
			}
			?>

		</div>
		</div>
		</div>
</div>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
<br>

<?php } ?>
<br>
</body>
</html>