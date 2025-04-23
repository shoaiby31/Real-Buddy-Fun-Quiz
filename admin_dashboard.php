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
		width: 43%;
		margin-left: 2%;
		background-color: #193367;
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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="unAEL9hR"></script>


<?php
if(!isset($_GET['email']))
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
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<div class="panel panel-default box" style="background-color: #193367; color: #ffffff;">
		<div class="panel-body">
			<span class="heading2" style="text-align: justify; text-justify: inter-word;">
			THIS QUIZ WAS CREATED BY YOU</span><br><br>
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
		<div class="panel-body">
			<?php $email=$_GET['email'];
			$encoded_email=base64_encode($email);
			$admin_qry="SELECT * FROM users WHERE email='".$email."'";
			$run_admin_qry=mysqli_query($connect,$admin_qry);
			$fetch_admin=mysqli_fetch_array($run_admin_qry);
			?>
			<span class="heading2">TOP FRIENDS OF <?php echo strtoupper($fetch_admin['name']); ?></span><br>
			<?php $result_qry="SELECT * FROM result WHERE quiz_author='".$email."' ORDER BY marks DESC";
			$run_result_qry=mysqli_query($connect,$result_qry); ?>
			<table class="table table-bordered">
				    <thead>
				      <tr style="background-color: #e6e6e6;">
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
				  	 	
				        <td style="text-align: left; color: black;">
				        	<a href="user_dmc.php?encoded_email=$encoded_email">
				        	<?php echo $fetch_results['quiz_username']; ?></a>
				        </td>
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
</div>
<br><br>
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<div class="panel panel-default box">
			<?php $email = base64_encode($email); ?>
		<div class="panel-body">
		<div class="question-no-box" style="margin-left: 0%;">Your Quiz Link:<br><br></div>
		<input type="text" name="quiz_link" class="form-control heading3" id="myInput" value="https://grandrisingquiz.com/user-dashboard.php?quiz_id=<?php echo $email; ?>" style="margin-top: -5%; padding:6%; border-radius: 18px 18px 18px 18px;">
		<button onclick="myFunction()" class="btn btn-success" style="margin-left: 68.9%; margin-top: 1%; background-color: #193367;">Copy Link</button>





		<!-- Sharingbutton Facebook -->
	<div class="fb-share-button" data-href="https://grandrisingquiz.com/user-dashboard.php?quiz_id=<?php echo $email; ?>=" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgrandrisingquiz.com%2Fuser-dashboard.php%3Fquiz_id%3D<?php echo $email; ?>%253D&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> 
		

		




		</div>
		</div>
		</div>
		</div>
</div>
</div>
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<form action="" method="post">
			<input type="submit" class="btn btn-default" name="delete-btn" onClick="return confirm('Do you really want to delete Quiz:?');" value="&nbsp;Delete and create a new Quiz &nbsp;" style="background-color: #00a3cc; border-radius: 15px; width: 100%; line-height: 37px; font-weight: bold; font-size: 16px; color: White;">
		</form>
		<?php
		if(isset($_POST['delete-btn']))
		{

                header("Location:delete_quiz.php?email=$email");

		} ?>
		</div>
		</div>
</div>
</div>
<br><br>

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