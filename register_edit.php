<?php
    require_once('dbconfig.php');
    $db = new operations();
    $db->update_student();
    $id = $_GET['U_ID'];
    $result = $db->get_student_record($id);
    $data = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Student</title> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://kit.fontawesome.com/3b4f2ecc11.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
  </script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-light">
  <nav class="nav" id="topbar">
    <div class="logo">
      <a href="index.html"><img src="img/EPALM.png" style="width:80px;height:80px;" ></a>
    </div>
    <div id="mainListDiv" class="main_list">
      <ul class="navlinks">
        <li> <a href="payment.html">Payment</a></li>
        <li> <a href="events.html">Events</a></li>
        <li><a href="register.html">Register</a> </li>
      </ul>
    </div>
</nav>

  <div class="container">
    <div class="py-5 text-center">

      <h2>Student details</h2>
      <p class="lead">Enter correct student details to register</p>
    </div>

    <div class="row">
      <div class="mx-auto col-md-4">
        <h4 class="mb-3">Update student details</h4>
        <hr class="mb-4"><br>
        <?php $db->Store_student_Record(); ?>
        <form method="post">
          <div class="row">
            <input type="hidden" name="reg_num" value="<?php echo $data['reg_num']; ?>">

            <div class="col-md-8 mb-3">
              <label for="reg_num">Registration Number</label>
              <input type="text" class="form-control" id="reg_num" name="reg_num" placeholder="20BCE0001" required value="<?php echo $data['reg_num']; ?>">
            </div>

            <div class="col-md-8 mb-3">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Jon" required value="<?php echo $data['firstName']; ?>">
            </div>

            <div class="col-md-8 mb-3">
              <label for="middleName">Middle Name</label>
              <input type="text" class="form-control" id="middleName" name="middleName" placeholder="" required value="<?php echo $data['middleName']; ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe" required value="<?php echo $data['lastName']; ?>">
          </div>

            <div class="mb-3">
              <label for="mobile">Mobile Number</label>
              <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="9876543210" required value="<?php echo $data['mobile']; ?>">
            </div>

            <br>
            <h4 class="mb-3">Register your login details</h4>
            <hr class="mb-4"><br>
            <div class="row">
              
            <div class="mb-3 col-md-8">
              <label for="Email">Email</label>
            <input type="text" class="form-control" id="Email" name="Email" placeholder="you@example.com" required value="<?php echo $data['Email']; ?>">
            </div>
            <div class="mb-3 col-md-8">
              <label for="Password">Password</label>
            <input type="text" class="form-control" id="Password" name="Password" placeholder="New Password" required value="<?php echo $data['Password']; ?>">
            </div>
          </div>

            <!-- <input class="btn btn-primary btn-lg btn-block" type="submit" /> -->
            <button class="btn btn-success btn-lg btn-block" name="btn_update" type="submit"> Update </button>
            <!--input type="submit" href="#myModal" class="trigger-btn btn btn-primary" data-toggle="modal" value="Update"/-->
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">EPALM</p>
      <p class="mb-1">Made with <i class="fas fa-heart"></i> by</p>
      <ul class="list-inline">
        <li class="list-inline-item">Aryan Vats</li>
        <li class="list-inline-item">Arohan Mishra</li>
        <li class="list-inline-item">Aditya Joshi</li>
      </ul>
    </footer>
  </div>


</body>

</html>
