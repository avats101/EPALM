<?php
    require_once('dbconfig.php');
    $db = new operations();
    $result=$db->view_payment_record();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EPALM</title> 
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
    <title>Card details</title>
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

<br><br><br><br><br><br>
<center>
  <h2>
    Card registered Successfully!
  </h2>
</center>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> Card details </h2>
                    </div>
                    <div class="card-body">
                        <?php
                              $db->display_message();
                              $db->display_message();
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 20%"> Card Number </td>
                                <td style="width: 20%"> Name on Card </td>
                                <td style="width: 10%"> CVV </td>
                                <td style="width: 15%"> Expiry Date </td>
                                <td style="width: 20%"> Mobile Number </td>
                                <td style="width: 20" colspan="2">Operations</td>
                            </tr>
                            <tr>
                                <?php

                                    $data = mysqli_fetch_assoc($result)
                                    
                                ?>
                                    <!-- <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['FirstName'] ?></td>
                                    <td><?php echo $data['LastName'] ?></td>
                                    <td><?php echo $data['UserName'] ?></td>
                                    <td><?php echo $data['Email'] ?></td> -->

                                    <td><?php echo $data['Card_Number'] ?></td>
                                    <td><?php echo $data['Name_on_Card'] ?></td>
                                    <td><?php echo $data['CVV'] ?></td>
                                    <td><?php echo $data['Expiry_Date'] ?></td>
                                    <td><?php echo $data['Registered_ph_no'] ?></td>

                                    <td><a href="cardedit.php?U_ID=<?php echo $data['Card_Number'] ?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="carddel.php?D_ID=<?php echo $data['Card_Number'] ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                                    
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <center>
        <h5>
        <a href="index.html">Return to Home page</a>
        <br><br>
        <a href="events.html">Register for events</a>
        </h5>
    </center>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">EPALM</p>
      <p class="mb-1">Made with <i class="fas fa-heart"></i> by</p>
      <ul class="list-inline">
        <li class="list-inline-item">Aryan Vats</li>
        <li class="list-inline-item">Arohan Mishra</li>
        <li class="list-inline-item">Aditya Joshi</li>
      </ul>
    </footer>

</body>
</html>
