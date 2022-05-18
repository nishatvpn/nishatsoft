<?php
include('../../extension/connect.php');

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['user'],$_GET['password'],$_GET['key'],$_GET['prefix'])){
	$user = strip_tags(trim($_GET['user']));
	$password = strip_tags(trim($_GET['password']));
	$prefix = strip_tags(trim($_GET['prefix']));
	$key = strip_tags(trim($_GET['key']));

	if($user==""){
		echo "0";
	}elseif($password==""){
		echo "0";
	}elseif($prefix==""){
		echo "0";
	}elseif($key==""){
		echo "0";
	}elseif($key=="snfx"){
		$sql = "SELECT user_name FROM users WHERE user_name = '$user' AND user_pass = '$password' AND user_server = '$prefix' AND user_duration > 0 AND freeze = 'InActive'";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    $sql1 = "UPDATE users set online='Connected' where user_name='$user'";
		    $conn->query($sql1);
			echo "1";
		}else{
		    $sql2 = "UPDATE users set online='Disconnected' where user_name='$user'";
		    $conn->query($sql2);
			echo "0";
		}
	}else{
	    $auth = "UPDATE users set online='AuthFailed' where user_name='$user'";
		    $conn->query($auth);
		echo "0";
	}
}else{
    $auth2 = "UPDATE users set online='AuthFailed' where user_name='$user'";
		    $conn->query($auth2);
	echo "0";
}

?>