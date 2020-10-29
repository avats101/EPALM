<?php
    require_once('dbconfig.php');
    $db = new operations();
    $db->update_payment();
    $id = $_GET['U_ID'];
    $result = $db->get_payment_record($id);
    $data = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Card</title> 
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

      <h2>Card details</h2>
      <p class="lead">Enter correct card details to make payment</p>
    </div>

    <div class="row">
      <div class="mx-auto col-md-4">
        <h4 class="mb-3">Update Card details</h4>
        <hr class="mb-4"><br>
        <?php $db->Store_payment_Record(); ?>
        <form method="post">
          <div class="row">
            <input type="hidden" name="Card_Number" value="<?php echo $data['Card_Number']; ?>">

            <div class="col-md-8 mb-3">
              <label for="Card_Number">Card Number</label>
              <input type="text" class="form-control" id="Card_Number" name="Card_Number" placeholder="XXXX XXXX XXXX XXXX" required value="<?php echo $data['Card_Number']; ?>">
            </div>

            <div class="col-md-8 mb-3">
              <label for="Name_on_Card">Name on Card</label>
              <input type="text" class="form-control" id="Name_on_Card" name="Name_on_Card" placeholder="" required value="<?php echo $data['Name_on_Card']; ?>">
            </div>

            <div class="col-md-8 mb-3">
              <label for="CVV">CVV</label>
              <input type="text" class="form-control" id="CVV" name="CVV" placeholder="" required value="<?php echo $data['CVV']; ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="Expiry_Date">Expiry Date</label>
            <input type="date" class="form-control" id="Expiry_Date" name="Expiry_Date" placeholder="" required value="<?php echo $data['Expiry_Date']; ?>">
          </div>

            <div class="mb-3">
              <label for="Registered_ph_no">Mobile Number</label>
              <input type="tel" class="form-control" id="Registered_ph_no" name="Registered_ph_no" placeholder="" required value="<?php echo $data['Registered_ph_no']; ?>">
            </div>

            <br>
            <hr class="mb-4"><br>

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
