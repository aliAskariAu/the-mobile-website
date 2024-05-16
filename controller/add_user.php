<?php 

include_once ("../model/connection.php");
require_once ("../model/functions.php");


if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}
if (isset($_POST['username'])) {
    $username = $_POST['username'];
	$stmt = $conn->prepare("SELECT * FROM user WHERE username=?");
	$stmt->execute([$username]); 
	$user = $stmt->fetch();
	if ($user) {
    exit ("Username already exists. <a href='../view/login.php'>Please login here</a>");
} 
}
if (isset($_POST['user_password'])) {
	$user_password = $_POST['user_password']; 
	if (strlen($user_password) < 8) {
			echo "Password must be 8 characters or more. <a href='../view/sign-up.php'>Click here to go back</a>";
		exit(); }
       $user_password = password_hash($user_password, PASSWORD_BCRYPT);
}

if ($_POST['user_password'] !== $_POST['user_cpassword']) {
	die ("<a href='../view/sign-up.php'>Passwords do not match. Please try again</a>");
}

$result = add_new_user($firstname, $lastname, $username, $user_password);

	if (!$result) {
    echo ("Something went wrong");
}

else {
    header('Location: ../view/success.php');
}




	

    
    ?>