<?php
	include 'nav-front.php';
	include "conn/connection.php";
?>
<h3 class="text-center text-light">EVENT</h3>
<div class="container">
</br>

	<table class="table table-bordered table-hover">
	  <thead class="thead-dark ">
	    <tr>
	    	<th scope="col">SL NO</th>
	      	<th scope="col">Event Name</th>
	      	<th scope="col">Description</th>
	      	<th scope="col">Event Date</th>
	      	<th scope="col">Start Time</th>
	      	<th scope="col">End Time</th>
	    </tr>
	  </thead>
	  <tbody>
	    
	    <?php
	      $stmtE = $conn->query('SELECT * FROM event WHERE status="Active" ORDER BY add_date DESC');
	      $count = 1;
	      foreach($stmtE as $dataE){
	  	  ?>
	  	<tr>
	      <th scope="row"><?php echo $count;?></th>
	      <td><?php echo $dataE['event_name'];?></td>
	      <td><?php echo $dataE['event_desc'];?></td>
	      <td><?php echo $dataE['event_date'];?></td>
	      <td><?php echo $dataE['start_time'];?></td>
	      <td><?php echo $dataE['end_time'];?></td>
	      
	    </tr>
	    <?php $count=$count+1; }  ?>
	  </tbody>
	</table>
</div>

<?php
	include 'bottom-front.php';
?>