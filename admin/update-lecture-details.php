<?php
	include 'navbar.php';
	include "../conn/connection.php";
?>
<div class="container mb-5" style="background-color: #9cad65;">
	<table class="table">
	  <thead>
	    <tr>
	    	<th scope="col">SL NO</th>
	      <th scope="col">Lecture</th>
	      <th scope="col">Faculty Name</th>
	      <th scope="col">Start Date</th>
	      <th scope="col">End Date</th>
	      <th scope="col">Start Time</th>
	      <th scope="col">End Time</th>
	      <th scope="col">Days</th>
	      <th scope="col">Status</th>
	      <th scope="col">Edit Lecture</th>
	    </tr>
	  </thead>
	  <tbody>
	    
	    	<?php
	      $stmt = $conn->query('SELECT * FROM lecture');
	      $count = 1;
			  foreach($stmt as $data){
			  	$lecture_name = $data['lecture_name'];
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
	      <td><?php echo $data['status'];?></td>
	      <td><button type="button" id="<?php echo($data['lecture_id']);?>" class="btn btn-primary edit-data" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
	      </td>
	    </tr>
	    <?php $count=$count+1; }  ?>
	  </tbody>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Lecture Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="action.php" method="post" id="lecture-edit">
      <input type="hidden" name="authkey" value="admin123sfdf582752">	
			<div class="form-group">
				<div class="row">
					<div class="col-md-12">
						<span id="lec_name">Lecture name</span>
						<input type="hidden" id="lectureId" name="lecture_id" value="">
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
					  			$stmtF = $conn->query('SELECT * FROM faculty WHERE status="Active"');
		  						foreach($stmtF as $dataF){
					  		?>
					    	<option class="dropdown-item" value="<?php echo $dataF['faculty_id'];?>"><?php echo $dataF['name'];?></option>
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
							<input class="form-control" type="time" id="time-start" name="startTime" value="09:00" min="09:00" max="16:00" required>
						</div>
						<div class="col-md-6">
							<label for="end-start" class="font-weight-bolder">End Time:</label>
							<input class="form-control" type="time" id="end-time" name="endTime" value="16:00" min="09:00" max="16:00" required>
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group row">
				<div class="col-md-12">
					<h5>Choose Days:</h5>
					<label for="sunday" class="font-weight-bolder">Sunday:</label>
					<input class="" type="checkbox" id="sunday" name="day[]" value="Monday">

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
			<div class="form-group">
      	<label>Select Status</label>  
        <select name="status" id="status" class="form-control">
             <option  value="">--Select--</option>  
             <option value="Active">Active</option>  
             <option value="Deactive">Deactive</option>  
        </select>
      </div>
			<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary" onclick="lectureSubmit();">Save changes</button>
		    </div>	
		</form>
      </div>
    </div>
  </div>
</div>

<!-- sctipt for update lecture detals using ajax -->
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', '.edit-data',function(){
      var lecture_id = $(this).attr('id');
      $.ajax({
        url:"update-lecture-datails-ajax.php",  
        method:"GET",  
        data:{lectureId:lecture_id},  
        dataType:"json",  
        success:function(data){
        	$('#lectureId').val(lecture_id);
          $('#lec_name').text(data.lectureName);             
          $('#start1').val(data.startDate);  
          $('#end').val(data.endDate);  
          $('#startTime').val(data.startTime); 
          $('#endTime').val(data.endTime);   
        } 
      });
    });

    // $(document).on('submit', function(event){
    //   event.preventDefault();
    //   if($('#recipient-phone').val() == "")  
    //     {  
    //       alert("phone is required");  
    //     }
    //   else if($('#recipient-email').val() == "") 
    //   {
    //     alert("Email is required"); 
    //   }
    //   else{

    //   }
    // });
  });
</script>
<!-- submit modal form -->
<script type="text/javascript">
  function lectureSubmit() {
    document.getElementById('lecture-edit').submit();
  }
</script>

<?php
  $lecture_update = $_GET['lecture_update'];
?>

<!-- add sweealert for successfully update -->
<script type="text/javascript">
  var lecture_update = '<?php echo($lecture_update) ?>';
  if (lecture_update == 'success') {
    swal("Good job!", "Lecture Successfully Updated!", "success").then(function() {
    window.location = "http://knowledgewishdom.epizy.com/admin/update-lecture-details.php";
    });
  }else if(lecture_update == 'danger'){
    swal("Try Again!", "Lecture Update Faild!", "error").then(function() {
    window.location = "http://knowledgewishdom.epizy.com/admin/update-lecture-details.php";
    });
  }
</script>

<?php
	include 'bottom.php';
?>