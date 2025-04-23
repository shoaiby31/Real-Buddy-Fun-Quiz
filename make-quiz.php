<?php
include("config/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>How well do your friends know you?</title>
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
	}
	.heading1
	{
		font-family: arial;
		font-weight: bold;
		font-size: 28px;
		color: #193367;
	}
	.heading2
	{
		font-family: arial;
		font-weight: bold;
		font-size: 18px;
	}
	.heading3
	{
		font-family: arial;
		font-weight: bold;
		font-size: 14px;
		color: Black;
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
	.question-no-box
	{	
		width: 38%;
		margin-left: 7%;
		background-color: #00b8e6;
		font-family: Calibri (Body);
		font-weight: bold;
		font-size: 17px;
		padding-top: 1.5%;
		color: White;
		border-radius: 20px 20px 0px 0px;
		text-align: center;
	}
	.align
	{
		text-align: left;
		
	}
	.panel{
		box-shadow: 1px 0px 20px 9px #193367;
	}
</style>
<body>
<?php
if(!isset($_SESSION['email']))
{
	$okmsg= base64_encode("Please Enter Your Name & Email:");
    header("Location:index.php?okmsg=$okmsg");
}
else
{
	$email=$_SESSION['email'];
	$name_qry="SELECT * FROM users WHERE email='".$email."'";
	$run_name_qry=mysqli_query($connect,$name_qry);
	$fetch_name=mysqli_fetch_array($run_name_qry);

$quiz_check_qry="SELECT * FROM quiz_questions WHERE user_email='".$email."'";
$run_quiz_check_qry=mysqli_query($connect,$quiz_check_qry);
$fetch_data=mysqli_num_rows($run_quiz_check_qry);
if($fetch_data==0)
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
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<div class="panel panel-default box">
		<div class="panel-heading" style="border-radius: 18px 0px 0px 0px;">
			<span class="heading1"><?php echo $fetch_name['name']; ?>'s</span><br><span class="heading1">Law of Attraction Quiz</span>

		</div>
		<div class="panel-body">
			<i class="material-icons" style="font-size:20px;">mode_edit</i><span class="heading2">
				Edit and select the correct option for each of your questions
			</span>
			<br><br>
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

		<?php
		$qload="SELECT * From questions";
		$runqload=mysqli_query($connect,$qload);
		$i=1;
		while($fetchq=mysqli_fetch_array($runqload))
		{
		?>
			<div class="question-no-box">QUESTION <?php echo $i++; ?></div>
			<div class="panel panel-default box heading2">
				<div class="panel-heading align" style="border-radius: 18px 0px 0px 0px;">
				<?php echo $fetchq['question_part_a']," ",$_SESSION['name']," ", $fetchq['question_part_b'];?>
				</div>
				
			<div class="panel-body align" style=" display: block;" >
			<form method="post" action="insert_quiz.php">
  				<label class="radio-inline" style=" width: 100%;">
      				<input type="radio" name="radio[<?php echo $fetchq['question_id']; ?>]" value="1" style="margin-top: 2.5%;" required>
      				<input type="text" class="form-control heading3" name="option1[<?php echo $fetchq['question_id']; ?>]" value="<?php echo $fetchq['option1']; ?>">
  				</label>
  				<br><br>
  				<label class="radio-inline" style="width: 100%;">
      				<input type="radio" name="radio[<?php echo $fetchq['question_id']; ?>]" value="2" style="margin-top: 2.5%;" required>
      				<input type="text" class="form-control heading3" name="option2[<?php echo $fetchq['question_id']; ?>]" value="<?php echo $fetchq['option2']; ?>">
  				</label>
  				<br><br>
  				<label class="radio-inline" style="width: 100%;">
      				<input type="radio" name="radio[<?php echo $fetchq['question_id']; ?>]" value="3" style="margin-top: 2.5%;"required>
      				<input type="text" class="form-control heading3" name="option3[<?php echo $fetchq['question_id']; ?>]" value="<?php echo $fetchq['option3']; ?>">
  				</label>
  				<br><br>
  				<label class="radio-inline" style="width: 100%;">
      				<input type="radio" name="radio[<?php echo $fetchq['question_id']; ?>]" value="4" style="margin-top: 2.5%;"required>
      				<input type="text" class="form-control heading3" name="option4[<?php echo $fetchq['question_id']; ?>]" value="<?php echo $fetchq['option4']; ?>">
  				</label>
			
			<br><br>
			</div>
			</div><br>
		<?php
		}
		?>
		<center><input type="submit" name="question-submit" class="btn btn-default" value="Save And Share!" style="background-color: #00a3cc; color: White; font-size: 18px; font-weight: bold;"></center>
		</form>
		
		</div>
</div>
</div>
<br><br>


<br><br>
<?php
}
else
{
	$okmsg= base64_encode("Quiz already created, Now share it with friends");
	header("Location:quiz_share.php?okmsg=$okmsg&&quiz_id=$email");

}

}
?>
</body>
</html>