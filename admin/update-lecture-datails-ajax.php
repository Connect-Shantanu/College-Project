<?php
	include "../conn/connection.php";
?>
<?php
	$lectureId = $_GET['lectureId'];
	if(isset($lectureId)){
		$stmt1 = $conn->query("SELECT * FROM lecture WHERE lecture_id= '".$lectureId."'");
		$row1 = $stmt1->fetch();
		$lecture_name = $row1['lecture_name'];
		$rowNew['facultyName'] = $row1['faculty_name'];
		$rowNew['startDate'] = $row1['start_date'];
		$rowNew['endDate'] = $row1['end_date'];
		$rowNew['startTime'] = $row1['start_time'];
		$rowNew['endTime'] = $row1['end_time'];
		$rowNew['days'] = $row1['days'];

		$stmt = $conn->query('SELECT * FROM lecture_name WHERE lecture_name_id="'.$lecture_name.'"');
		$row = $stmt->fetch();
		$rowNew['lectureName'] = $row['lecture_name'];
		
		// $stmtF = $conn->query('SELECT * FROM faculty WHERE faculty_id="'.$faculty_name.'"');
		// $rowF = $stmtF->fetch();
		
		//$rowNew = array($lectureName, $facultyName, $startDate, $endDate, $startTime, $endTime, $days);

		//var_dump($rowNew);


		echo(json_encode($rowNew));
	}
?>