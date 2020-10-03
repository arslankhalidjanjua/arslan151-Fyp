<?php

include 'connection.php';
if(isset($_POST['submit']))
{
$eid = $_POST['Email_id'];	

$query = "SELECT EmailId FROM signuptable where EmailId = '$eid'";

$result = $db->prepare($query);
$result->execute();
	
$c=$result->fetch();

	
if($c)	
{
	$result = $db->prepare("SELECT * FROM signuptable where EmailId = '$eid'");
    $result->execute();
	$rows=$result->fetch();
	
	
	$t = $rows[5];
	$p = $rows[6];	
	
        $body  =  "<br> Password Recovery <br>-----------------------------------------------<br>".
        "<br> Your Email Id is : ".$t.
        "<br>Here is your password  :".$p."
        <br> Sincerely, <br>
        SANAM Team";
	
        $subject = "Password recovered";
        $headers1 = "From: SanamTeam.com\n";
        $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
        $sentmail = mail($t, $subject, $body, $headers1);
	
		if($sentmail)
		{
			header("location: passwordSendToYou.php?");
			exit;
		}
		else
		{			
			header("location: errorSendingEmail.php?");
			exit;
		}		
}
else
{
	$EmailNotRegester= "EmailNotRegester";
	header("location: ForgotPassword.php?EmailNotRegester=".$EmailNotRegester);
	exit;	
}

//mysql_close($db);
}

?>