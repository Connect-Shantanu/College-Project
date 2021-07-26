<?php
	include 'nav-front.php';
	include "conn/connection.php";
?>

<h3 class="text-center text-light">HOLIDAY</h3>
<div class="container">
</br>

	<table class="table table-bordered table-hover">
	  <thead class="thead-dark ">
	    <tr>
	    	<th scope="col">SL NO</th>
	      	<th scope="col">holiday Reason</th>
	      	<th scope="col">Date</th>
	    </tr>
	  </thead>
	  <tbody>
	    
	    <?php
	      $stmtH = $conn->query('SELECT * FROM holiday WHERE status="Active" ORDER BY add_date DESC');
	      $count = 1;
	      foreach($stmtH as $dataH){
	  	  ?>
	  	<tr>
	      <th scope="row"><?php echo $count;?></th>
	      <td><?php echo $dataH['reason'];?></td>
	      <td><?php echo $dataH['holiday_date'];?></td>	      
	    </tr>
	    <?php $count=$count+1; }  ?>
	  </tbody>
	</table>
</div>

<?php
	include 'bottom-front.php';
?>