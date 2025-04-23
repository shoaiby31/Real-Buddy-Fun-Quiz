<?php
include("config/connection.php");
?>

<?php
if(isset($_GET['email']))
{
	echo $email= base64_decode($_GET['email']);
	$deleteqry="DELETE FROM result WHERE quiz_author='".$email."'";
	$rundeleteqry=mysqli_query($connect,$deleteqry);
	$deleteqry1="DELETE FROM quiz_questions WHERE user_email='".$email."'";
	$rundeleteqry1=mysqli_query($connect,$deleteqry1);
	$deleteqry2="DELETE FROM users WHERE email='".$email."'";
	$rundeleteqry2=mysqli_query($connect,$deleteqry2);
	if($rundeleteqry && $rundeleteqry1 && $rundeleteqry2)
	{
		$params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
// Finally, destroy the session.
    session_destroy();
	$okmsg=base64_encode("Quiz deleted, Now you can make new quiz!");
	header("Location:index.php?okmsg=$okmsg");
	exit();
}
else
{
	$errormsg=base64_encode("Quiz Not deleted!");
	header("Location:admin_dashboard.php?errormsg=$errormsg");
	exit();
}
}
?>