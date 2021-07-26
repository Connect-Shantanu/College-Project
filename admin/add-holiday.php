<?php
	include 'navbar.php';
?>

<div class="container mb-5" style="background-color: #9cad65; height: 30%; width: 50%">
	<form action="action.php" method="post">
		<input type="hidden" name="authkey" value="admin1235de2f568880">
		<div class="form-group">
			<div class="row">
				<div class="col-md-12 pt-3">
					<label for="reason" class="font-weight-bolder">Reason:</label>
					<input class="form-control" type="text" name="reason" id="reason" value="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label for="start1" class="font-weight-bolder">Date:</label>
					<input class="form-control" type="date" id="start1" name="holiday-date" value="2018-07-22" min="2021-01-01" max="2030-12-31">
				</div>
			</div>
		</div>
		<div class="col-auto py-3 d-flex justify-content-center">
      		<button type="submit" class="btn font-weight-bold text-white" style="background-color: #485227;">Add Holiday</button>
    	</div>
	</form>
</div>

<?php
	include 'bottom.php';
?>