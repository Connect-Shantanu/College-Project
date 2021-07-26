<?php
	include 'navbar.php';
	include "../conn/connection.php";
?>
</br>
<div class="container mb-5" style="background-color: #9cad65;">
	<form action="action.php" method="post">	
		<input type="hidden" name="authkey" value="admin1235de2656">
		<div class="form-group">
			<div class="row">
				<div class="col-md-12">
					<label for="fname" class="font-weight-bolder">Lecture Name:</label>
				  	<select class="form-control" id="lname" name="lectures">
				  		<option class="dropdown-item" value="">--Select--</option>
				  		<?php
				  			$stmt = $conn->query('SELECT * FROM lecture_name WHERE status="Active"');
	  						foreach($stmt as $data){
				  		?>
				    	<option class="dropdown-item" value="<?php echo $data['lecture_name_id'];?>"><?php echo $data['lecture_name'];?></option>
				    	<?php } ?>
				  	</select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-12">
					<label for="fname" class="font-weight-bolder">Faculty Name:</label>
				  	<select class="form-control" id="fname" name="faculty-name">
				  		<option class="dropdown-item" value="">--Select--</option>
				  		<?php
				  			$stmt1 = $conn->query('SELECT * FROM faculty WHERE status="Active"');
	  						foreach($stmt1 as $data1){
				  		?>
				    	<option class="dropdown-item" value="<?php echo $data1['faculty_id'];?>"><?php echo $data1['name'];?></option>
				    	<?php } ?>
				  	</select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label for="start1" class="font-weight-bolder">Start date:</label>
					<input class="form-control" type="date" id="start1" name="class-start" value="2018-07-22" min="2021-01-01" max="2030-12-31">
				</div>
				<div class="col-md-6">
					<label for="end" class="font-weight-bolder">End date:</label>
					<input class="form-control" type="date" id="end" name="class-end" value="2018-07-22" min="2021-01-01" max="2030-12-31">
				</div>
			</div>
			<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label for="time-start" class="font-weight-bolder">Start Time:</label>
					<input class="form-control" type="time" id="time-start" name="time-start" value="09:00" min="09:00" max="16:00" required>
				</div>
				<div class="col-md-6">
					<label for="end-start" class="font-weight-bolder">End Time:</label>
					<input class="form-control" type="time" id="end-start" name="time-end" value="16:00" min="09:00" max="16:00" required>
				</div>
			</div>
		</div>
		</div>
		
		<div class="form-group row">
			<div class="col-md-12">
				<h5>Choose Days:</h5>
				<label for="sunday" class="font-weight-bolder">Sunday:</label>
				<input class="" type="checkbox" id="sunday" name="day[]" value="sunday">

				<label for="monday" class="font-weight-bolder">Monday:</label>
				<input class="" type="checkbox" id="monday" name="day[]" value="Monday">

				<label for="tuesday" class="font-weight-bolder">Tuesday:</label>
				<input class="" type="checkbox" id="tuesday" name="day[]" value="Tuesday">

				<label for="wednesday" class="font-weight-bolder">Wednesday:</label>
				<input class="" type="checkbox" id="wednesday" name="day[]" value="Wednesday">

				<label for="thursday" class="font-weight-bolder">Thursday:</label>
				<input class="" type="checkbox" id="thursday" name="day[]" value="Thursday">

				<label for="friday" class="font-weight-bolder">Friday:</label>
				<input class="" type="checkbox" id="friday" name="day[]" value="Friday">

				<label for="saturday" class="font-weight-bolder">Saturday:</label>
				<input class="" type="checkbox" id="saturday" name="day[]" value="Saturday">
			</div>
		</div>
		<div class="col-auto py-3 d-flex justify-content-center">
      		<button type="submit" class="btn font-weight-bold text-white" style="background-color: #485227;">Add Lecture</button>
    	</div>	
	</form>
</div>


<?php
	include 'bottom.php';
?>
