<?php
	include "../conn/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Knowledge Wisdom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style type="text/css">
    .fwt{
      font-weight:600;
    }
  </style>
</head>
<body style="background-color: #15ab97;">

</br>
<div style="margin-left:45%;">
   <a href="../index.php" class="btn btn-danger">logout</a>
</div>
</br>
<div class="container mb-5" style="background-color: #323d23;">
	<table class="table text-white">
	  <thead>
	    <tr>
	      <th scope="col">Admin Id</th>
	      <th scope="col">Username</th>
	      <th scope="col">Phone No</th>
	      <th scope="col">Email</th>
	      <th scope="col">Status</th> 
	    </tr>
	  </thead>
	  <tbody>
	  	<?php
	  		$stmt = $conn->query('SELECT * FROM admin');
	  		foreach($stmt as $data){
	  	?>
	    <tr>
	      <td id="ad_id"><?php echo $data['admin_id']; ?></td>
	      <td><?php echo $data['username']; ?></td>
	      <td><?php echo $data['phone']; ?></td>
	      <td><?php echo $data['email']; ?></td>
	      <td><?php echo $data['status']; ?></td>
	      <td><button type="button" id="<?php echo($data['admin_id']);?>" class="btn btn-primary edit-data" data-toggle="modal" data-target="#ModalCenter">Edit</button>
	      </td>
	    </tr>
	<?php } ?>
	  </tbody>
	</table>
</div>


<!-- For modal content -->
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Admin: </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="action.php" method="post" id="sup-edit">
          <input type="hidden" name="authkey" value="superadmin1235502345">
          <input type="hidden" id="recipient-id" name="admin_id" value="">
          <div class="form-group">
            <label for="recipient-phone" class="col-form-label">Phone Number:</label>
            <input type="text" class="form-control" id="recipient-phone" name="phone">
          </div>
          <div class="form-group">
            <label for="recipient-email" class="col-form-label">Email Address:</label>
            <input type="text" class="form-control" id="recipient-email" name="email">
          </div>
          <div class="form-group">
          	<label>Select Status</label>  
            <select name="status" id="status" class="form-control">
                 <option  value="">--Select--</option>  
                 <option value="Active">Active</option>  
                 <option value="Deactive">Deactive</option>  
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="adminSubmit();">Update</button> 
      </div>
    </div>
  </div>
</div>

<!-- script for Superadmn from edit -->
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', '.edit-data',function(){
      var admin_id = $(this).attr('id');
      $.ajax({
        url:"removeAdmin_ajax.php",  
        method:"GET",  
        data:{adminId:admin_id},  
        dataType:"json",  
        success:function(data){
          $('#recipient-id').val(data.admin_id);  
          $('#recipient-phone').val(data.phone);  
          $('#recipient-email').val(data.email);  
          $('#gender').val(data.status);    
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
  function adminSubmit() {
    document.getElementById('sup-edit').submit();
  }
</script>

<?php
  $superadmin_update = $_GET['superadmin_update'];
?>

<!-- add sweealert for successfully update -->
<script type="text/javascript">
  var superadmin_update = '<?php echo($superadmin_update) ?>';
  if (superadmin_update == 'success') {
    swal("Good job!", "Admin Successfully Updated!", "success").then(function() {
    window.location = "http://knowledgewishdom.epizy.com/superadmin/remove_admin.php";
    });
  }else if(superadmin_update == 'danger'){
    swal("Try Again!", "Admin Update Faild!", "error").then(function() {
    window.location = "http://knowledgewishdom.epizy.com/superadmin/remove_admin.php";
    });
  }
</script>

</body>
</html>
