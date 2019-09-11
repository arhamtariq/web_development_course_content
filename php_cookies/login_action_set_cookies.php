<?php

//var_dump($_POST);

if(!empty($_POST["Remember_me"])) {
	setcookie ("email",$_POST["email"],time()+ 3600,"/");
	setcookie ("password",$_POST["password"],time()+ 3600,"/");
	echo "Cookies Set Successfuly";
} else {
	//setcookie("email","");
	//setcookie("password","");
	$cookie_email ='email';
	$cookie_password='password';
   setcookie($cookie_email, '', time() - 3600,"/");
    setcookie($cookie_password, '', time() - 3600,"/");
	echo "Cookies Not Set";
}
 
?>
 
<p><a href="loginForm.php"> Go to Login Page </a> </p>
