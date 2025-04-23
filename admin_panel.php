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
<title>Do your Friends Really, Really Know You?</title>
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
<body>
<?php
if(!isset($_SESSION['admin-email']))
{

    $errormsg1=base64_encode("Please Login to Continue:");
    header("Location:index.php?errormsg1=$errormsg1");
}
else
{ ?>
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
$users_qry="SELECT * FROM users";
$run_users_qry=mysqli_query($connect,$users_qry);

?>
<div class="container">
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-5" style="margin-left: 5%; margin-right: 5%;">
			<a href="logout.php" style="color: White;"><i class="glyphicon glyphicon-lock"></i> Logout</a>
			 <table class="table table-bordered" style="background-color: White; color: Black;">
				    <thead>
				      <tr>
				        <th>Name</th>
				        <th>Email</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php
				        while($fetch_data=mysqli_fetch_array($run_users_qry))
				        {
				        ?>
				        <tr>
				        	<td><?php echo $fetch_data['name']; ?></td>
				        	<td><?php echo $fetch_data['email']; ?></td>
				        </tr>
				    <?php } ?>

				    </tbody>
				</table>
		</div>
</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php } ?>
</body>
</html>