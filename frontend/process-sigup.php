<?php 
session_start(); 
include "config.php";

if (isset($_POST['firstName']) && isset($_POST['lastName'])
    && isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$firstName = validate($_POST['firstname']);
	$lastName = validate($_POST['lastName']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	$user_data = 'firstName='. $firstName. '&lastName='. $lastName;


	if (empty($firstName)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($lastName)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($password)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else{

		// băm mật khẩu
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE user_name='$firstName' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$firstName', '$password', '$lastName')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}