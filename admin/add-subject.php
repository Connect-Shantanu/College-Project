<?php
	include 'navbar.php';
?>

<div class="container mb-5" style="background-color: #9cad65; height: 30%; width: 50%">
	<form action="action.php" method="post">
		<input type="hidden" name="authkey" value="admin1235f56582">
		<div class="form-group">
			<div class="row">
				<div class="col-md-12 pt-3">
					<label for="subject" class="font-weight-bolder">Subject Name:</label>
					<input class="form-control" type="text" name="subject" id="subject" value="">
				</div>
			</div>
		</div>
		
		<div class="col-auto py-3 d-flex justify-content-center">
      		<button type="submit" class="btn font-weight-bold text-white" style="background-color: #485227;">Add Subject</button>
    	</div>
	</form>
</div>
<?php
	include 'bottom.php';
?>