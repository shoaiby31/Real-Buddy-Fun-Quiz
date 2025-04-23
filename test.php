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
  <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
  <meta charset=utf-8 />
<title>Do your Friends Really, Really Know You?</title>
</head>
<body>
	<script type="text/javascript">
	$(document).ready(function () {
            $("#progbar").progressbar({ value: 0 });
        });
        //Declaring variable as global variable
        var pbVal = 0;
        //Wrapping your function inside a document ready block
        $(document).ready(function () {
            //Attach the click event on radio button
            $('[name*=radio]').click(function () {
                //Counter Variable for total value checked
                var totalChecked = 0;
                //Counter variable to hold the Radiobutton groups
                var totalRadioGroups = 0;
                var previousName = '';
                //For Each radio button list call the below function
                $.each($('[name*=radio]'), function (index, value) {
                    //Get the each radio button
                    var radioName = $(this).attr('name');
                    //Get the id of radio button
                    var radioId = this.id;
                    if (previousName != radioName) {
                        totalRadioGroups++;

                    }
                    //Increment the value if radio button is checked
                    if ($('#' + radioId).is(':checked')) {
                        totalChecked++;
                    }
                    previousName = radioName;
                });
                //Calculate the percentage of Radio button filled
                var percentage = (totalChecked / totalRadioGroups) * 100;
                //Assign the value to progress bar
                $("#progbar").progressbar("option", "value", percentage);
            });

        });
</script>
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
		width: 35%;
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
	    input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
.panel1{
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
	$quiz_id=$_GET['quiz_id'];
	$email= base64_decode($quiz_id);
	$username=$_GET['username'];
	$username= base64_decode($username);
	$useremail=$_GET['useremail'];
	$useremail= base64_decode($useremail);
if(!isset($_SESSION['result']))
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
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-5" style="margin-left: 5%; margin-right: 5%;">
		<?php
		$quiz_id=$_GET['quiz_id'];
		$email= base64_decode($quiz_id);
		$username=$_GET['username'];
		$username= base64_decode($username);
		$useremail=$_GET['useremail'];
		$useremail= base64_decode($useremail);

		$name_qry="SELECT * FROM users Where email='".$email."'";
		$run_name_qry=mysqli_query($connect,$name_qry);
		$fetch_name=mysqli_fetch_array($run_name_qry);

		?>
		<div class="panel panel-default panel1" style="background-color: #193367; border-radius: 18px 0px 18px 0px;">
		<div class="panel-heading" style="background-color: #193367; text-align: center; color: White; border-radius: 17px 17px 0px 0px;">
			<span class="heading1"><?php echo strtoupper($fetch_name['name']); ?>'S QUIZ</span>
		</div>
		<div class="panel-body" style="background-color: White; border-radius: 0px 0px 17px 0px;">
			<div id="progbar" runat="server" style="border-color: #00b8e6;"></div>
			<br>
		</div>
		</div>
		</div>
</div>
</div>

<br>

<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-5" style="margin-left: 5%; margin-right: 5%;">

		<?php
		$t=1;
		$qload="SELECT * From questions";
		$runqload=mysqli_query($connect,$qload);
		$i=1;
		while($fetchq=mysqli_fetch_array($runqload))
		{
		?>
			<div class="question-no-box">QUESTION <?php echo $i; ?></div>
			<form method="post" action="">
			<div class="panel panel-default box heading2 panel1" style="background-color: #193367; border-color: White; border-radius: 18px 0px 18px 0px;">
				<div class="panel-heading align" style="background-color: #193367; text-align: center; color: White; border-radius: 17px 17px 0px 0px;">
				<?php echo $fetchq['question_part_a']," ",$fetch_name['name']," ", $fetchq['question_part_b'];?>
				</div>
				
			<div class="panel-body align" style=" display: block; background-color: White; border-radius: 0px 0px 18px 0px;">
				<?php
				
				$options_qry="SELECT * FROM quiz_questions Where user_email='".$email."' AND question_id='".$i."'";
				$run_options_qry=mysqli_query($connect,$options_qry);
				while($fetch_options=mysqli_fetch_array($run_options_qry))
				{
					
				$j = range(1,4);
   				shuffle($j);
    			foreach($j as $j)
    			{
    				if($j==1)
    				{?>
  					<label class="radio-inline" style=" width: 100%; margin-left: 0%;">
      				<input type="radio" name="radio[<?php echo $fetchq['question_id']; ?>]" value="1" id="<?php echo $t; ?>" style="margin-top: 4.6%;" required>
      				<div class="panel panel-default" style="border-radius: 18px 18px 18px 18px; width: 95%; border-bottom: 5px solid #e6e6e6;">
      					<div class="panel-body heading3"><?php echo $fetch_options['correct_option']; ?></div>
      				</div></label>
  					<?php $t++; }
  					if($j==2)
    				{?>
  					<label class="radio-inline" style=" width: 100%; margin-left: 0%;">
      				<input type="radio" name="radio[<?php echo $fetchq['question_id']; ?>]" value="2" id="<?php echo $t; ?>" style="margin-top: 4.6%;" required>
      				<div class="panel panel-default" style="border-radius: 18px 18px 18px 18px; width: 95%; border-bottom: 5px solid #e6e6e6;">
      					<div class="panel-body heading3"><?php echo $fetch_options['wrong_option1']; ?></div>
      				</div>
  					</label>
  					<?php $t++; }
  					if($j==3)
    				{?>
  					<label class="radio-inline" style=" width: 100%; margin-left: 0%;">
      				<input type="radio" name="radio[<?php echo $fetchq['question_id']; ?>]" value="3" id="<?php echo $t; ?>" style="margin-top: 4.6%;" required>
      				<div class="panel panel-default" style="border-radius: 18px 18px 18px 18px; width: 95%; border-bottom: 5px solid #e6e6e6;">
      					<div class="panel-body heading3"><?php echo $fetch_options['wrong_option2']; ?></div>
      				</div>
  					</label>
  					<?php $t++; }
  					if($j==4)
    				{?>
  					<label class="radio-inline" style=" width: 100%; margin-left: 0%;">
      				<input type="radio" name="radio[<?php echo $fetchq['question_id']; ?>]" value="4" id="<?php echo $t; ?>" style="margin-top: 4.6%;" required>
      				<div class="panel panel-default" style="border-radius: 18px 18px 18px 18px; width: 95%; border-bottom: 5px solid #e6e6e6;">
      					<div class="panel-body heading3"><?php echo $fetch_options['wrong_option3']; ?></div>
      				</div>
  					</label>
  					<?php $t++; }
  				}
  				$t=$t+7;
  				}
  				?>
			<br><br>
			</div>
			</div><br>
		<?php
		$i++;
		}
		?>
		<center><input type="submit" name="answer-submit" class="btn btn-default" value="Submit Your Answers!" style="color: White; font-size: 18px; font-weight: bold; background-color: #00b8e6;"></center>
		</form>
		<?php
		if(isset($_POST['answer-submit']))
		{
			$count= count(($_POST['radio']));
		    $result=0;
		    $v=1;
		    $selected=$_POST['radio'];
		    $selectqry="SELECT * FROM quiz_questions WHERE user_email='".$email."'";
		    $runselectqry=mysqli_query($connect,$selectqry);
		     while($getstudents=mysqli_fetch_array($runselectqry))
       	 		{
		            if($selected[$v]==1)
		            	{
		            		$result++;
		            		$slct_option_qry="SELECT * FROM quiz_questions WHERE user_email='".$email."' AND question_id='".$v."'";
		    				$run_slct_option_qry=mysqli_query($connect,$slct_option_qry);
		    				$get_slct_option=mysqli_fetch_array($run_slct_option_qry);
		    				$selected_option= $get_slct_option['correct_option'];
		            		$insert_qry="INSERT INTO user_dmc VALUES(NULL,'$useremail','$v','$selected_option','$selected_option')";
        					$run_insert_qry=mysqli_query($connect,$insert_qry);
		            	}
		            	elseif($selected[$v]==2)
		            	{
		            		$slct_option_qry="SELECT * FROM quiz_questions WHERE user_email='".$email."' AND question_id='".$v."'";
		    				$run_slct_option_qry=mysqli_query($connect,$slct_option_qry);
		    				$get_slct_option=mysqli_fetch_array($run_slct_option_qry);
		    				$selected_option= $get_slct_option['wrong_option1'];
		    				$correct_option= $get_slct_option['correct_option'];
		            		$insert_qry="INSERT INTO user_dmc VALUES(NULL,'$useremail','$v','$selected_option','$correct_option')";
        					$run_insert_qry=mysqli_query($connect,$insert_qry);
		            	}
		            	elseif($selected[$v]==3)
		            	{
		            		$slct_option_qry="SELECT * FROM quiz_questions WHERE user_email='".$email."' AND question_id='".$v."'";
		    				$run_slct_option_qry=mysqli_query($connect,$slct_option_qry);
		    				$get_slct_option=mysqli_fetch_array($run_slct_option_qry);
		    				$selected_option= $get_slct_option['wrong_option2'];
		    				$correct_option= $get_slct_option['correct_option'];
		            		$insert_qry="INSERT INTO user_dmc VALUES(NULL,'$useremail','$v','$selected_option','$correct_option')";
        					$run_insert_qry=mysqli_query($connect,$insert_qry);
		            	}
		            	elseif($selected[$v]==4)
		            	{
		            		$slct_option_qry="SELECT * FROM quiz_questions WHERE user_email='".$email."' AND question_id='".$v."'";
		    				$run_slct_option_qry=mysqli_query($connect,$slct_option_qry);
		    				$get_slct_option=mysqli_fetch_array($run_slct_option_qry);
		    				$selected_option= $get_slct_option['wrong_option3'];
		    				$correct_option= $get_slct_option['correct_option'];
		            		$insert_qry="INSERT INTO user_dmc VALUES(NULL,'$useremail','$v','$selected_option','$correct_option')";
        					$run_insert_qry=mysqli_query($connect,$insert_qry);
		            	}
		            	else
		            	{

		            	}
		            $v++;
        		}
        		$insert_qry="INSERT INTO result VALUES(NULL,'$email','$username','$result')";
        		$run_insert_qry=mysqli_query($connect,$insert_qry);
        		$result=base64_encode($result);
          		header("Location:result.php?result=$result&&quiz_id=$quiz_id&&useremail=$useremail");
		}
		?>
		
		</div>
</div>
</div>
<br><br>


<br><br>
<?php
}
else
{
	$result=$_SESSION['result'];
	$result=base64_encode($result);
	$errormsg= base64_encode("The quiz has already been submitted");
	header("Location:result.php?errormsg=$errormsg&&quiz_id=$quiz_id&&result=$result&&useremail=$useremail");
}
}

?>
</body>
</html>