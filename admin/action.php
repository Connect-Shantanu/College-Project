<?php
	include "../conn/connection.php";
	$auth_key = $_POST['authkey'];
	//echo($auth_key);
?>

<?php
	// add lecture details
	if ($auth_key == 'admin1235de2656') {
		$lecture_id = uniqid();
		$lecture = $_POST['lectures'];
		$facultyName = $_POST['faculty-name'];
		$classStart = $_POST['class-start'];
		$classEnd = $_POST['class-end'];
		$startTime = $_POST['time-start'];
		$endTime = $_POST['time-end'];
		$day = $_POST['day'];
		$day_new = implode(",", $day);
		// echo $day_new;
		// $date = date_default_timezone_set('Asia/Kolkata');
		// $date1 = date('Y/d/m, H:i:sa');
		// echo $date1;
		// $time = date('H:i:sa');
		// var_dump($day);
		$status ="Active";

		try{
			$sql = "INSERT INTO lecture (lecture_id, lecture_name, faculty_name, start_date, end_date, start_time, end_time, days, status) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$result = $conn->prepare($sql);
			$result->execute(array($lecture_id, $lecture, $facultyName, $classStart, $classEnd, $startTime, $endTime, $day_new, $status));
			
			$verify = "success";
			$insert = TRUE;
		}
		catch(PDOException $e){
			$verify = "danger";
			$insert = "False";
			$error_msg = "Error: " . $e->getMessage();
		}

		if ($insert == TRUE) {
			header('location:../admin/add-lecture-details.php?lecture_add='.$verify);
		}	
	}

	//update lecture details
	if ($auth_key == 'admin123sfdf582752') {
		$lectureId = $_POST['lecture_id'];
		$facultyName = $_POST['faculty-name'];
		echo $facultyName;
		$classStart = $_POST['class-start'];
		$classEnd = $_POST['class-end'];
		$startTime = $_POST['startTime'];
		$endTime = $_POST['endTime'];
		$day = $_POST['day'];
		$day_new = implode(",", $day);
		$status = $_POST['status'];

		try{
			$sql = "UPDATE lecture SET faculty_name=?, start_date=?, end_date=?, start_time=?, end_time=?, days=?, status=? WHERE lecture_id=?";
			$result = $conn->prepare($sql);
			$result->execute(array($facultyName, $classStart, $classEnd, $startTime, $endTime, $day_new, $status, $lectureId));
			
			$verify = "success";
			$insert = TRUE;
		}
		catch(PDOException $e){
			$verify = "danger";
			$insert = "False";
			$error_msg = "Error: " . $e->getMessage();
		}

		if ($insert == TRUE) {
			//header('location:../admin/update-lecture-details.php?lecture_update='.$verify);
		}
	}


	//add subject/lecture_name
	if ($auth_key == 'admin1235f56582') {
		$lecture_name_id = uniqid();
		$lecture_name = $_POST['subject'];
		$status ="Active";

		try{
			$sql = "INSERT INTO lecture_name (lecture_name_id, lecture_name, status) VALUES(?, ?, ?)";
			$result = $conn->prepare($sql);
			$result->execute(array($lecture_name_id, $lecture_name, $status));
			
			$verify = "success";
			$insert = TRUE;
		}
		catch(PDOException $e){
			$verify = "danger";
			$insert = "False";
			$error_msg = "Error: " . $e->getMessage();
		}

		if ($insert == TRUE) {
			header('location:../admin/add-subject.php?subject_add='.$verify);
		}	
	}


	//add faculty
	if ($auth_key == 'admin1235de2fh854') {
		$faculty_id = uniqid();
		$faculty_name = $_POST['faculty'];
		$faculty_phone = $_POST['contact'];
		$faculty_email = $_POST['email'];
		$faculty_salary = $_POST['salary'];
		$lecture_id = $_POST['lecture'];
		$status ="Active";

		try{
			$sql = "INSERT INTO faculty (faculty_id, name, phone, email, salary, lecture_id, status) VALUES(?, ?, ?,?, ?, ?, ?)";
			$result = $conn->prepare($sql);
			$result->execute(array($faculty_id, $faculty_name, $faculty_phone, $faculty_email, $faculty_salary, $lecture_id, $status));
			
			$verify = "success";
			$insert = TRUE;
		}
		catch(PDOException $e){
			$verify = "danger";
			$insert = "False";
			$error_msg = "Error: " . $e->getMessage();
		}

		if ($insert == TRUE) {
			header('location:../admin/add-faculty.php?faculty_add='.$verify);
		}	
	}


	//add event
	if ($auth_key == 'admin1235de2565885') {
		$event_id = uniqid();
		$event_name = $_POST['event'];
		$event_desc = $_POST['desc'];
		$event_date = $_POST['date'];
		$eventStart= $_POST['time-start'];
		$eventEnd = $_POST['time-end'];
		$status ="Active";

		try{
			$sql = "INSERT INTO event (event_id, event_name, event_desc, event_date, start_time, end_time, status) VALUES(?, ?, ?,?, ?, ?, ?)";
			$result = $conn->prepare($sql);
			$result->execute(array($event_id, $event_name, $event_desc, $event_date, $eventStart, $eventEnd, $status));
			
			$verify = "success";
			$insert = TRUE;
		}
		catch(PDOException $e){
			$verify = "danger";
			$insert = "False";
			$error_msg = "Error: " . $e->getMessage();
		}

		if ($insert == TRUE) {
			header('location:../admin/add-event.php?event_add='.$verify);
		}	
	}	


	//add holiday
	if ($auth_key == 'admin1235de2f568880') {
		$holiday_id = uniqid();
		$holiday_reason = $_POST['reason'];
		$holiday_date = $_POST['holiday-date'];
		$status ="Active";

		try{
			$sql = "INSERT INTO holiday (holiday_id, reason, holiday_date, status) VALUES(?, ?, ?, ?)";
			$result = $conn->prepare($sql);
			$result->execute(array($holiday_id, $holiday_reason, $holiday_date, $status));
			
			$verify = "success";
			$insert = TRUE;
		}
		catch(PDOException $e){
			$verify = "danger";
			$insert = "False";
			$error_msg = "Error: " . $e->getMessage();
		}

		if ($insert == TRUE) {
			header('location:../admin/add-holiday.php?holiday_add='.$verify);
		}	
	}

	//asign students
	if ($auth_key == 'admin1235f5df5855') {
		$asign_student_id = uniqid();
		$student_id = $_POST['sid'];
		$student_name = $_POST['sname'];
		$student_contact = $_POST['contact'];
		$student_email = $_POST['email'];
		$faculty_name = $_POST['faculty-name'];
		$slot_id = $_POST['slot'];
		$status ="Active";

		try{
			$sql = "INSERT INTO asign_students (asign_student_id, student_id, student_name, phone, email,faculty_id, slot_id, status) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
			$result = $conn->prepare($sql);
			$result->execute(array($asign_student_id, $student_id, $student_name, $student_contact, $student_email, $faculty_name, $slot_id, $status));
			
			$verify = "success";
			$insert = TRUE;
		}
		catch(PDOException $e){
			$verify = "danger";
			$insert = "False";
			$error_msg = "Error: " . $e->getMessage();
		}

		if ($insert == TRUE) {
			header('location:../admin/asign-student.php?asign_student='.$verify);
		}	
	}
	
?>