<?php
	if(empty($_POST["email"]) or empty($_POST["name"]) or empty($_POST["how"]) or empty($_POST["content"])){
		echo "There's missing info, dude.";
		die();
	}

	$email = $_POST["email"];
	$name = $_POST["name"];
	$how = $_POST["how"];
	$content = $_POST["content"];

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "The e-mail adress aren't alright(?)";
		die();
	}

	$emailBody = "Name: ".$name." | E-mail: ".$email." | How did he or she found about us: ".$how." | Message: ".$content;


	$success = mail("your_email@email.com","Subject",$emailBody,"From:your_email@email.com");
	if (!$success){
		echo "Error! ";
		print_r(error_get_last());
		die();
	}else{
		echo " Thanks a lot, my life is less empty now.";
		die();
	}	
?>