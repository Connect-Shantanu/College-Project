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

  <link rel="stylesheet" type="text/css" href="./assects/login.css">
</head>
<body>

<div class="jumbotron" style="background-color: white; padding-top: 2rem;">
  <img src="assects/img/pexels-max-fischer-5212354.jpg" class="img-fluid" alt="classroom">
</div>
<!-- this is for admin login -->
<div class="container">
  <div class="row">
    <div class="col-sm-6 border-right">
      <h3 class="text-center">Admin Login</h3>
      <button onclick="document.getElementById('id01').style.display='block'">Login</button>
      <button style="background-color: #f54269;" onclick="location.href='http://knowledgewishdom.epizy.com/superadmin/super_admin.php'">Superadmin</button>

      <div id="id01" class="modal">
        
        <form class="modal-content animate" action="admin/add-lecture-details.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="assects/img/hipster-man-in-glasses-avatar-profile-userpic-on-vector-8988468.jpg" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
      </div>



    </div>
    <div class="col-sm-6 border-left">
      <h3 class="text-center">Student Login</h3>
      <!-- for login a student -->
      <button onclick="document.getElementById('id02').style.display='block'">Login</button>

      <div id="id02" class="modal">
        
        <form class="modal-content animate" action="view-schedule.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="assects/img/hipster-man-in-glasses-avatar-profile-userpic-on-vector-8988468.jpg" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
      </div>
      <!-- for registar a student -->
      <button onclick="document.getElementById('id03').style.display='block'" style="background-color: #f54269;">Register</button>
      <div id="id03" class="modal">
        
        <form class="modal-content animate" action="/action_page.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="assects/img/hipster-man-in-glasses-avatar-profile-userpic-on-vector-8988468.jpg" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter a valid email" name="email" required>

            <label for="uname"><b>Mobile</b></label>
            <input type="text" placeholder="Enter your 10 digit mobile no" name="mob" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw"><b>Re-enter Password</b></label>
            <input type="password" placeholder="Re-enter Password" name="psw" required>
              
            <button type="submit" style="background-color: #f54269;">Register</button>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- for admin modal -->
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- for student modal -->
<script>
// Get the modal
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event1) {
    if (event1.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal2 = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event1) {
    if (event1.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>
<?php
  $superadmin_add = $_GET['superadmin_add'];
?>
<script type="text/javascript">
  var superadmin_add = '<?php echo($superadmin_add) ?>';
  if (superadmin_add == 'success') {
    swal("Good job!", "Admin Successfully Added!", "success");
  }
</script>
</body>
</html>
