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
	  width: 25%;
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

$(function() {

  $(".progress").each(function() {

    var value = $(this).attr('data-value');
    var left = $(this).find('.progress-left .progress-bar');
    var right = $(this).find('.progress-right .progress-bar');

    if (value > 0) {
      if (value <= 50) {
        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
      } else {
        right.css('transform', 'rotate(180deg)')
        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
      }
    }

  })

  function percentageToDegrees(percentage) {

    return percentage / 100 * 360

  }

});

</script>
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
	<div class="col-sm-5" style="margin-left: 5%; margin-right: 5%;">
		<img src="images/logo2.png" class="logo center">
	</div>
</div>
</div>
<br>
<?php
$quiz_id=$_GET['quiz_id'];
$email=base64_decode($quiz_id);
$result=$_GET['result'];
$result=base64_decode($result);
$_SESSION['result']=$result;
$result_in_percent=$result*10;
$quiz_author_qry="SELECT * FROM users WHERE email='".$email."'";
$run_quiz_author_qry=mysqli_query($connect,$quiz_author_qry);
$quiz_author=mysqli_fetch_array($run_quiz_author_qry);
?>
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
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
            } ?>
		<div class="panel panel-default box">
		<div class="panel-heading" style="border-radius: 18px 0px 0px 0px;"">
			<?php if($result>=0 && $result<=3)
			{?>
			<span class="heading1" style="text-align: justify; text-justify: inter-word; color: #999999;">
			SERIOUSLY ?</span>
			<?php }
			if($result==4)
			{?>
			<span class="heading1" style="text-align: justify; text-justify: inter-word; color: #e62e00;">
			BAD FRIEND</span>
			<?php }
			if($result>=5 && $result<=6)
			{?>
			<span class="heading1" style="text-align: justify; text-justify: inter-word; color: #e6b800;">
			REGULAR FRIEND</span>
			<?php }
			if($result>=7 && $result<=8)
			{?>
			<span class="heading1" style="text-align: justify; text-justify: inter-word; color: #007399;">
			GOOD FRIEND</span>
			<?php }
			if($result==9)
			{?>
			<span class="heading1" style="text-align: justify; text-justify: inter-word; color: #00cc66;">
			REAL FRIEND</span>
			<?php }
			if($result==10)
			{?>
			<span class="heading1" style="text-align: justify; text-justify: inter-word; color: #ff0080;">
			YOU'RE THE ONE</span><br><br>
			<?php } ?>
			<br><br><br>
			<center>
			 <!-- Progress bar 1 -->
        <div class="progress mx-auto" data-value='<?php echo $result_in_percent; ?>'>
          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
          </span>
          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
          </span>
          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
            <div class="heading1"><?php echo $result; ?><sub class="heading1" style="color: Black;">/10</sub></div>
          </div>
        </div>
        <!-- END -->
    	</center>
		</div>
		<div class="panel-body" style="background-color: #002233;  border-radius: 0px 0px 25px 0px;">
			<?php if($result>=0 && $result<=3)
			{?>
			<span class="heading2" style="color: White;">
			Meeh... You scored <?php echo $result; ?>/10<br>You don't know <?php echo $quiz_author['name']; ?></span>
			<?php }
			if($result==4)
			{?>
			<span class="heading2" style="color: White;">
			That's low... You scored <?php echo $result; ?>/10<br><?php echo $quiz_author['name']; ?> won't like it</span>
			<?php }
			if($result>=5 && $result<=6)
			{?>
			<span class="heading2" style="color: White;">
			Well... You scored <?php echo $result; ?>/10<br>Hope <?php echo $quiz_author['name']; ?> likes it</span>
			<?php }
			if($result>=7 && $result<=8)
			{?>
			<span class="heading2" style="color: White;">
			Cool! You scored <?php echo $result; ?>/10 <?php echo $quiz_author['name']; ?> will like it!</span>
			<?php }
			if($result==9)
			{?>
			<span class="heading2" style="color: White;">
			YES! You scored 9/10<br><?php echo $quiz_author['name']; ?> will be pretty happy!</span>
			<?php }
			if($result==10)
			{?>
			<span class="heading2" style="color: White;">
			WOW! You scored 10/10<br><?php echo $quiz_author['name']; ?> will not believe it!</span><br><br>
			<?php } ?>

		</div>
		</div>
		</div>
</div>
</div>
<br>
<?php
$useremail=$_GET['useremail'];
$slct_option_qry="SELECT * FROM user_dmc WHERE user_email='".$useremail."'";
$run_slct_option_qry=mysqli_query($connect,$slct_option_qry);

$qload="SELECT * From questions";
$runqload=mysqli_query($connect,$qload);
?>
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-default box">
			<div class="panel-body">
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



<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-default box">
			<div class="panel-body">
				<span class="heading1" style="color: #00b8e6;">CREATE YOURS NOW!</span><br>
				<span class="heading2" style="color: #404040;">Now, it's your turn. Create your quiz and send it to your friends!</span><br><br>
				<form method="post" action="index.php">
				<input type="submit" name="make-quiz-btn" class="btn btn-default btn-style" value="Create Your Quiz"><br><br>
				</form>
				<span class="heading2" style="color: #bfbfbf;">Make sure that you use your preferred browser while creating your Quiz.</span><br>
			</div>
		</div>
</div>
</div>
</div>
<br>
<?php
$result_qry="SELECT * FROM result WHERE quiz_author='".$email."' ORDER BY marks DESC";
$run_result_qry=mysqli_query($connect,$result_qry);
?>
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-default box">
			<div class="panel-body">
				<span class="heading1" style="font-family: Arial Black; font-size: 20px; text-align: justify; text-justify: inter-word;">TOP FRIENDS OF <?php echo strtoupper($quiz_author['name']); ?></span><br>
				 <table class="table table-bordered">
				    <thead>
				      <tr>
				        <th style="width: 70%;">Name</th>
				        <th style="text-align: center;">Score</th>
				      </tr>
				    </thead>
				    <tbody>
				    <?php
					while($fetch_results=mysqli_fetch_array($run_result_qry))
					{
						if($fetch_results['marks']==10)
						{ ?>
				      <tr style="background-color: #ffb31a; font-weight: bold; font-size: 14px;">
				        <td style="text-align: left;"><?php echo $fetch_results['quiz_username']; ?></td>
				        <td><?php echo $fetch_results['marks']; ?></td>
				      </tr>
				  	<?php }
				  	elseif($fetch_results['marks']==9)
						{ ?>
				      <tr style="background-color: #ffbb33; font-weight: bold; font-size: 14px;">
				        <td style="text-align: left;"><?php echo $fetch_results['quiz_username']; ?></td>
				        <td><?php echo $fetch_results['marks']; ?></td>
				      </tr>
				  	<?php }
				  	elseif($fetch_results['marks']==8)
						{ ?>
				      <tr style="background-color: #ffc34d; font-weight: bold; font-size: 14px;">
				        <td style="text-align: left;"><?php echo $fetch_results['quiz_username']; ?></td>
				        <td><?php echo $fetch_results['marks']; ?></td>
				      </tr>
				  	<?php }
				  	elseif($fetch_results['marks']==7)
						{ ?>
				      <tr style="background-color: #ffcc66; font-weight: bold; font-size: 14px;">
				        <td style="text-align: left;"><?php echo $fetch_results['quiz_username']; ?></td>
				        <td><?php echo $fetch_results['marks']; ?></td>
				      </tr>
				  	<?php }
				  	else
				  	{ ?>
				  	 <tr style="font-weight: bold; font-size: 14px;">
				        <td style="text-align: left;"><?php echo $fetch_results['quiz_username']; ?></td>
				        <td><?php echo $fetch_results['marks']; ?></td>
				      </tr>
				  	<?php }
				}?>
				    </tbody>
  				</table>
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