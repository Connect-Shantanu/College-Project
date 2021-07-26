<?php
	include "../conn/connection.php";
?>
<?php
	$adminId = $_GET['adminId'];
	if(isset($adminId)){
		$stmt1 = $conn->query("SELECT * FROM admin WHERE admin_id= '".$adminId."'");
		$row = $stmt1->fetch();
		echo(json_encode($row));
	}
?>