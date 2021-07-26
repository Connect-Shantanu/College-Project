<?php
	include 'navbar.php';
	include "../conn/connection.php";
?>

<div class="container mb-5" style="background-color: #9cad65; height: 30%; width: 50%">
	<form action="action.php" method="post">
		<input type="hidden" name="authkey" value="admin1235de2fh854">
		<div class="form-group">
			<div class="row">
				<div class="col-md-12 pt-3">
					<label for="faculty" class="font-weight-bolder">Faculty Name:</label>
					<input class="form-control" type="text" name="faculty" id="faculty" value="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label for="contact" class="font-weight-bolder">Contact No:</label>
					<input class="form-control" type="text" name="contact" id="contact" value="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-8">
					<label for="email" class="font-weight-bolder">Email:</label>
					<input class="form-control" type="text" name="email" id="email" value="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-4">
					<label for="salary" class="font-weight-bolder">Salary:</label>
					<input class="form-control" type="text" name="salary" id="salary" value="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label for="lecture" class="font-weight-bolder">Lecture:</label>
				  	<select class="form-control" id="lecture" name="lecture">
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
		<div class="col-auto py-3 d-flex justify-content-center">
      		<button type="submit" class="btn font-weight-bold text-white" style="background-color: #485227;">Add Faculty</button>
    	</div>
	</form>
</div>

<?php
	include 'bottom.php';
?>