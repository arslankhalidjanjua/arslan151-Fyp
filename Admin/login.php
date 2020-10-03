<?php
include('connection.php');

$email = $_POST['username'];
$password = $_POST['password'];

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		
		$result = $conn->prepare("SELECT * FROM employee where email_id = ? AND password = ?");
		$result->execute(array($_POST['username'],$_POST['password']));
		$row = $result->fetch();
		
		if($row>0)
		{
			session_start();
			$_SESSION['SESS_MEMBER_ID'] = $row['employee_id'];
			$_SESSION['SESS_MEMBER_First_Name'] = $row['first_name'];
			$_SESSION['SESS_MEMBER_Last_Name'] = $row['last_name'];
			$_SESSION['SESS_MEMBER_Picture'] = $row['picture'];
			
			header("location: Admin/AllHomePages/home.php");
		}
		
		else{
			?>
			<script>
					alert("User Name or Password is invalid ! Pleade try again")
					window.location="index.php";
			</script>
			<?php
			}
	}
?>
