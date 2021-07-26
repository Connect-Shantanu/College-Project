<?php
	include 'nav-front.php';
	include "conn/connection.php";
	$studentId = $_POST['s_id'];
?>


<div class="container ">
	<table class="table table-bordered table-hover">
	  <thead class="thead-dark">
	    <tr>
	    	<th scope="col">SL NO</th>
	      	<th scope="col">Lecture</th>
	      	<th scope="col">Faculty Name</th>
	      	<th scope="col">Start Date</th>
	      	<th scope="col">End Date</th>
	      	<th scope="col">Start Time</th>
	      	<th scope="col">End Time</th>
	      	<th scope="col">Days</th>
	    </tr>
	  </thead>
	  <tbody>
	    
	    <?php
	      $stmtA = $conn->query('SELECT * FROM asign_students WHERE student_id="'.$studentId.'"');
	      $count = 1;
	      foreach($stmtA as $dataA){
	      	$slotId = $dataA['slot_id'];
	      	//echo $slotId;

	      	$stmt = $conn->query('SELECT * FROM lecture WHERE lecture_id="'.$slotId.'"');
			  foreach($stmt as $data){
			  	$lecture_name = $data['lecture_name'];
			  }
	  	  ?>
	  	<tr>
	      <th scope="row"><?php echo $count;?></th>
	      
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
	    </tr>
	    <?php $count=$count+1; }  ?>
	  </tbody>
	</table>
	
</div>

<?php
	include 'bottom-front.php';
?>