<?php
	$user = 'epiz_28228484';
	$password = 'SecNf2lE6E';
	$host = 'sql105.epizy.com';
	$dbname = 'epiz_28228484_knwish';

	//CREATE CONNECTION
	try{
		$conn = new PDO('mysql:host='.$host.';dbname='.$dbname.'',$user, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "success";
	} catch(PDOException $e){
		echo 'ERROR: '. $e->getMessage();
	}
?>