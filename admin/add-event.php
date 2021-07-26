<?php
	include 'navbar.php';
?>
<div class="container mb-5" style="background-color: #9cad65; height: 30%; width: 50%">
	<form action="action.php" method="post">
		<input type="hidden" name="authkey" value="admin1235de2565885">
		<div class="form-group">
			<div class="row">
				<div class="col-md-12 pt-3">
					<label for="event" class="font-weight-bolder">Event Name:</label>
					<input class="form-control" type="text" name="event" id="event" value="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-12">
					<label for="desc" class="font-weight-bolder">Description:</label>
					<textarea class="form-control" type="textarea" name="desc" id="desc" value="" rows="4" cols="50"></textarea>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label for="start1" class="font-weight-bolder">Date:</label>
					<input class="form-control" type="date" id="start1" name="date" value="2018-07-22" min="2021-01-01" max="2030-12-31">
				</div>
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
		<div class="col-auto py-3 d-flex justify-content-center">
      		<button type="submit" class="btn font-weight-bold text-white" style="background-color: #485227;">Save Event</button>
    	</div>
	</form>
</div>
<?php
	include 'bottom.php';
?>