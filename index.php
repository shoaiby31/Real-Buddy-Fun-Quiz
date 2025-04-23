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
<title>How well do your<br>friends know you?</title>
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
		border-radius: 25px 0px 25px 0px;
		text-align: center;
		padding-top: 4%;
		
	}
	.heading1
	{
		font-family: impact;

		font-size: 40px;
	}
	.heading2
	{
		font-family: sans-serif;
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
		100%	        { background-color: #ff66cc;}
	}
	.panel{
		box-shadow: 1px 0px 20px 9px #193367;
	}
</style>
<script>
	function myFunction()
{
  var x = document.getElementById("adminlogin");
  if (x.style.display === "none")
  {
    x.style.display = "block";
  }
  else
  {
    x.style.display = "none";
  }
}
function myFunction1()
{
  var x = document.getElementById("adminlogin");
  if (x.style.display === "display")
  {
    x.style.display = "none";
  }
  else
  {
    x.style.display = "none";
  }
}
</script>
<body>
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
		<div class="col-sm-6" >
		<div class="panel panel-default box">
		<div class="panel-heading" style="border-radius: 25px 0px 0px 0px;">
			<span class="heading2" style="font-size:25px;">How well do your friends know you?</span>
		</div>
		<div class="panel-body">
			<div class="numberCircle inline" style="border-color: #007a99; color: #007a99; margin-left:-4%;">1</div><span class="heading2" style="; color: #007a99;">&nbsp;&nbsp;Let's make your quiz for friends</span>
			<br><br>
			<div class="numberCircle inline" style="border-color: #005c99; color: #005c99; margin-left:-4%;">2</div><span class="heading2" style="color: #005c99;">&nbsp;&nbsp;Then share it with your friends &nbsp;</span>
			<br><br>
			<div class="numberCircle inline" style="border-color: #193367; color: #193367; margin-left:-4%;">3</div><span class="heading2" style="color: #193367;">&nbsp;&nbsp;And see who is your best friend</span>
			<br><br>
		</div>
		</div>
		</div>
</div>
</div>

<br>

<div class="container" onclick="myFunction1();">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<div class="panel panel-default box">
		<div class="panel-body">


		<form method="post" action="">
  		<div class="form-group box-style">
  			<?php
  			if(isset($_GET['errormsg']))
                  {
              ?>
                <div class="alert alert-danger" role="alert">
              <?php
                echo base64_decode($_GET['errormsg']);
              ?>
                </div>
            <?php 
            }
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
              ?>
    	<label for="name">Full Name:</label>
    	<input type="text" class="form-control" name="name" placeholder="Enter name....." required>
  		</div>
  		<div class="form-group box-style">
	    <label for="email">Email Address:</label>
	    <input type="email" class="form-control" name="email" placeholder="Enter email....." required>
  		</div>
  		<input type="submit" class="btn btn-default" name="submit-btn" value="&nbsp;&nbsp;&nbsp;&nbsp; Get Started &nbsp;&nbsp;&nbsp;&nbsp;" style="background-image: linear-gradient(to left, #33adff, #007acc 50%); clip-path: polygon(20% 0%, 80% 0%, 100% 50%, 100% 50%, 80% 100%, 20% 100%, 0 51%, 0 51%); color: white;">
  		
  		<?php
  		if(isset($_POST['submit-btn']))
  		{
  			$name=$_POST['name'];
  			$email=$_POST['email'];
  			$_SESSION['name']=$name;
  			$check_qry="SELECT * FROM users WHERE email='".$email."'";
  			$run_check_qry=mysqli_query($connect,$check_qry);
  			$total_record=mysqli_num_rows($run_check_qry);

  			$q_qry="SELECT * FROM quiz_questions WHERE user_email='".$email."'";
  			$run_q_qry=mysqli_query($connect,$q_qry);
  			$fetch_q_qry=mysqli_num_rows($run_q_qry);
  			if($total_record==0)
  			{
  			
  			$insertqry="INSERT INTO users VALUES('$email','$name')";
  			$run_insertqry=mysqli_query($connect,$insertqry);
  			$_SESSION['email']=$email;
  			header("Location:make-quiz.php");
  			}
  			elseif ($fetch_q_qry==0)
  			{
  				$_SESSION['email']=$email;
  				header("Location:make-quiz.php");
  			}
  			else
  			{
  				$okrmsg= base64_encode("Quiz already existing on this email. Please choose different email for new quiz:");
                header("Location:admin_dashboard.php?okrmsg=$okrmsg&&email=$email");
  			}
  		}
  		?>
		</form>
		<br><br>



		</div>
		</div>
		</div>
</div>
</div>
<br>
<div class="container" id="adminlogin" style="display: none;">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<div class="panel panel-default box" style="background-color: #193367; border-radius: 18px 0px 18px 0px;">
			<div class="panel-heading" style="background-color: #193367; text-align: center; color: White; border-radius: 17px 17px 0px 0px;">
				<span class="heading2">Admin Login Panel</span>
			</div>
		<div class="panel-body" style="background-color: White; border-radius: 0px 0px 17px 0px;">


		<form method="post" action="">
  		<div class="form-group box-style">
  			<?php
  			if(isset($_GET['errormsg1']))
                  {
              ?>
              <script type="text/javascript"> myFunction(); </script>
                <div class="alert alert-danger" role="alert">
              <?php
                echo base64_decode($_GET['errormsg1']);
              ?>
                </div>
            <?php 
            }
            if(isset($_GET['okmsg1']))
                  {
              ?>
                <div class="alert alert-success" role="alert">
              <?php
                echo base64_decode($_GET['okmsg1']);
              ?>
                </div>
               <?php 
                 }
              ?>
    	<label for="name">Email:</label>
    	<input type="email" class="form-control" name="admin-email" placeholder="Enter email....." required>
  		</div>
  		<div class="form-group box-style">
	    <label for="email">Password:</label>
	    <input type="password" class="form-control" name="admin-password" placeholder="Enter password....." required>
  		</div>
  		<input type="submit" class="btn btn-default" name="admin-submit-btn" value="&nbsp;&nbsp;&nbsp;&nbsp; Get Started &nbsp;&nbsp;&nbsp;&nbsp;" style="background-image: linear-gradient(to left, #33adff, #007acc 50%); clip-path: polygon(20% 0%, 80% 0%, 100% 50%, 100% 50%, 80% 100%, 20% 100%, 0 51%, 0 51%); color: white;">
  		<?php
  		if(isset($_POST['admin-submit-btn']))
  		{
  			$admin_password=$_POST['admin-password'];
  			$admin_email=$_POST['admin-email'];
  			$admin_check_qry="SELECT * FROM admin WHERE email='".$admin_email."' AND password='".$admin_password."'";
  			$run_admin_check_qry=mysqli_query($connect,$admin_check_qry);
  			$total_record=mysqli_num_rows($run_admin_check_qry);
  			if($total_record!=0)
  			{
  				$_SESSION['admin-email']=$admin_email;
  				header("Location:admin_panel.php");
  			}
  			else
  			{
  				$errormsg1= base64_encode("Invalid Email or Password! Please try again");
                header("Location:index.php?errormsg1=$errormsg1");
  			}
  		}
  		?>
		</form>
		<br><br>



		</div>
		</div>
		</div>
</div>
</div>
<div class="text-center" style="margin-left: 6%; margin-right: 5%;">
	<button type="button" class="link" onclick="myFunction();" style="background-color: transparent; border: none;"><u>Login as Admin</u></button>					
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
</body>
</html>