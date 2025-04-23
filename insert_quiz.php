<?php
include("config/connection.php");
$email=$_SESSION['email'];
$query="SELECT * FROM quiz_questions WHERE user_email='".$email."'";
$run_qry=mysqli_query($connect,$query);
$total_record=mysqli_num_rows($run_qry);
if($total_record==0)
{

	if(isset($_POST['question-submit']))
	{
		$correct_option=$_POST['radio'];
		$option1=$_POST['option1'];
		$option2=$_POST['option2'];
		$option3=$_POST['option3'];
		$option4=$_POST['option4'];

		for ($i=1; $i <=10 ; $i++) {
			
				if($correct_option[$i]==1)
				{
					$q_insertqry="INSERT INTO quiz_questions VALUES(NULL,'$i','$email','$option1[$i]','$option2[$i]','$option3[$i]','$option4[$i]')";
  					$run_q_insertqry=mysqli_query($connect,$q_insertqry);
				}
				elseif ($correct_option[$i]==2)
				{
					$q_insertqry="INSERT INTO quiz_questions VALUES(NULL,'$i','$email','$option2[$i]','$option1[$i]','$option3[$i]','$option4[$i]')";
  					$run_q_insertqry=mysqli_query($connect,$q_insertqry);
				}
				elseif ($correct_option[$i]==3)
				{
					$q_insertqry="INSERT INTO quiz_questions VALUES(NULL,'$i','$email','$option3[$i]','$option1[$i]','$option2[$i]','$option4[$i]')";
  					$run_q_insertqry=mysqli_query($connect,$q_insertqry);
				}
				elseif ($correct_option[$i]==4)
				{
					$q_insertqry="INSERT INTO quiz_questions VALUES(NULL,'$i','$email','$option4[$i]','$option1[$i]','$option2[$i]','$option3[$i]')";
  					$run_q_insertqry=mysqli_query($connect,$q_insertqry);
				}
				else
				{
					echo "Error";

				}
		}
		$email = base64_encode($email);
		
		header("Location:quiz_share.php?quiz_id=$email");

	}
}
else
{
    header("Location:quiz_share.php");
	
}
?>