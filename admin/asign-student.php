<?php
	include 'navbar.php';
	include "../conn/connection.php";
?>

<div class="container mb-5" style="background-color: #9cad65; height: 30%; width: 50%">
	<form action="action.php" method="post">
		<input type="hidden" name="authkey" value="admin1235f5df5855">
		<div class="form-group">
			<div class="row">
				<div class="col-md-3 pt-2">
					<label for="sid" class="font-weight-bolder">Student ID:</label>
					<!-- <span class="form-control" name="sid" id="sid"></span> -->
					<input class="form-control" type="text" name="sid" id="sid">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-12 pt-2">
					<label for="sname" class="font-weight-bolder">Student Name:</label>
					<input class="form-control" type="text" name="sname" id="sname">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6 pt-2">
					<label for="contact" class="font-weight-bolder">Contact No:</label>
					<input class="form-control" type="text" name="contact" id="contact" value="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-12 pt-2">
					<label for="email" class="font-weight-bolder">Email:</label>
					<input class="form-control" type="text" name="email" id="email" value="">
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
				<div class="col-md-12">
					<span>Select Slot:</span>
					<table class="table-striped table-bordered">
						<thead>
						    <tr>
						      <th scope="col">Lecture</th>
						      <th scope="col">Faculty Name</th>
						      <th scope="col">Start Date</th>
						      <th scope="col">End Date</th>
						      <th scope="col">Start Time</th>
						      <th scope="col">End Time</th>
						      <th scope="col">days</th>
						      <th scope="col">select slot</th>
						    </tr>
					  	</thead>
					  	<tbody>
					  		 <?php
					  		  $stmt = $conn->query('SELECT * FROM lecture WHERE status="Active"');
			  				  foreach($stmt as $data){
			  				  	$lecture_name = $data['lecture_name'];
						  	  ?>
						      
					    	<tr>
					    	 <td><?php $stmt1 = $conn->query("SELECT * FROM lecture_name WHERE status='Active' AND lecture_name_id='".$lecture_name. "'");
						      foreach($stmt1 as $data1){
						      	echo $data1['lecture_name'];
						      }
						      ?>
						  	  </td>

						      <td><?php $stmt2 = $conn->query("SELECT * FROM faculty WHERE status='Active' AND faculty_id='".$data['faculty_name']. "'");
						      foreach($stmt2 as $data2){
						      	echo $data2['name'];
						      }
						      ?>
						      </td>
						      <td><?php echo $data['start_date'];?></td>
						      <td><?php echo $data['end_date'];?></td>
						      <td><?php echo $data['start_time'];?></td>
						      <td><?php echo $data['end_time'];?></td>
						      <td><?php echo $data['days'];?></td>
						      <td><input type="radio" name="slot" value="<?php echo $data['lecture_id'];?>">
						      </td>
						      
					    	</tr>
					    	<?php } ?>
					  	</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-auto py-3 d-flex justify-content-center">
      		<button type="submit" class="btn font-weight-bold text-white" style="background-color: #485227;">Asign Students</button>
    	</div>
	</form>
</div>

<?php
	include 'bottom.php';
?>
<!-- <script type="text/javascript">
	$(document).bind("contextmenu",function(e) {
  e.preventDefault();
});

</script> -->