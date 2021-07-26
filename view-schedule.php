<?php
	include 'nav-front.php';
?>

<div class="container">
</br>
</br>
	<div class="card" style="width: 18rem; margin: 0 auto;">
	  <img class="card-img-top" src="./assects/img/student.jpg" alt="Card image cap">
	  <div class="card-body">
	    <form action="view_student_slot.php" method="post">
		    <div class="form-group">
				<div class="row">
					<div class="col-md-12 pt-3">
						<label for="s_id" class="font-weight-bolder">Student ID:</label>
						<input class="form-control" type="text" name="s_id" id="s_id" value="">
					</div>
				</div>
			</div>
			<div class="col-auto py-3 d-flex justify-content-center">
      			<button type="submit" class="btn font-weight-bold text-white" style="background-color: #485227;">View slot</button>
    		</div>
	    </form>
	  </div>
	</div>
</div>

<?php
	include 'bottom-front.php';
?>