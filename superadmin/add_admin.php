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
  <style type="text/css">
    .fwt{
      font-weight:600;
    }
  </style>
</head>
<body style="background-color: #15ab97;">

</br>
<div class="container mb-5" style="background-color: #323d23;">
	<form action="./action.php" method="post">
		<input type="hidden" name="authkey" value="superadmin1234025">
		<div class="form-group">
			<div class="row">
				<div class="col-md-12 pt-3">
					<label for="username" class="font-weight-bolder text-white">Username:</label>
					<input class="form-control" type="text" name="username" id="username" value="">
				</div>
				<div class="col-md-12 pt-3">
					<label for="phone" class="font-weight-bolder text-white">Phone:</label>
					<input class="form-control" type="text" name="phone" id="phone" value="">
				</div>
				<div class="col-md-12 pt-3">
					<label for="email" class="font-weight-bolder text-white">Email:</label>
					<input class="form-control" type="text" name="email" id="email" value="">
				</div>
				<div class="col-md-12 pt-3">
					<span class="text-white">&#x25C9; Password will be auto generate and send to admin's email</span>
				</div>
			</div>
		</div>
		<div class="col-auto py-3 d-flex justify-content-center">
      		<input type="submit" class="btn font-weight-bold text-white" style="background-color: #485227;" value="Add Admin"/>
    	</div>	
	</form>
</div>    

</body>
</html>
