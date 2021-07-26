<?php
	include "../conn/connection.php";

	$auth_key = $_POST['authkey'];
	//echo($auth_key);	

	//add_admin
	if ($auth_key == 'superadmin1234025') {
		$admin_id = uniqid();
		$username = $_POST['username'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = uniqid();
		$password_encode = base64_encode($password);
		$status ="Active";
		//echo($status);
		try{
			$sql = "INSERT INTO admin (admin_id, username, phone, email, password, status) VALUES(?, ?, ?, ?, ?, ?)";
			$result = $conn->prepare($sql);
			$result->execute(array($admin_id, $username, $phone, $email, $password_encode, $status));
			
			$verify = "success";
			$insert = TRUE;
		}
		catch(PDOException $e){
			$verify = "danger";
			$insert = "False";
			$error_msg = "Error: " . $e->getMessage();
		}

		if ($insert == TRUE) {
			header('location:../index.php?superadmin_add="'.$verify);
		}
	}

// Update admin
	if ($auth_key == 'superadmin1235502345') {
		$admin_id = $_POST['admin_id'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$status = $_POST['status'];

		try{
			$sql = "UPDATE admin SET phone=?, email=?, status=? WHERE admin_id=?";
			$result = $conn->prepare($sql);
			$result->execute(array($phone, $email, $status, $admin_id));
			
			$verify = "success";
			$insert = TRUE;
		}
		catch(PDOException $e){
			$verify = "danger";
			$insert = "False";
			$error_msg = "Error: " . $e->getMessage();
		}

		if ($insert == TRUE) {
			header('location:remove_admin.php?superadmin_update='.$verify);
		}
	}
	
?>