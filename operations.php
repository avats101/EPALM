<?php
    require_once('dbconfig.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {

        //MESSAGE OPERATIONS
        // Set Session Message
        public function set_messsage($msg)
        {
            if(!empty($msg))
            {
                $_SESSION['Message']=$msg;
            }
            else
            {
                $msg = "";
            }
        }

        // Display Session Message
        public function display_message()
        {
            if(isset($_SESSION['Message']))
            {
                echo $_SESSION['Message'];
                unset($_SESSION['Message']);
            }
        }

        //OPERATIONS FOR PAYMENT 
        // Insert Record in the Database
        public function Store_payment_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                // $FirstName = $db->check($_POST['First']);
                // $LastName = $db->check($_POST['Last']);
                // $UserName = $db->check($_POST['UserName']);
                // $UserEmail = $db->check($_POST['UserEmail']);


                $Card_Number = $_POST['Card_Number'];
                $Name_on_Card = $_POST['Name_on_Card'];
                $Expiry_Date = $_POST['Expiry_Date'];
                $CVV = $_POST['CVV'];
                $Registered_ph_no = $_POST['Registered_ph_no'];

                if($this->insert_payment_record($Expiry_Date, $Name_on_Card, $CVV, $Registered_ph_no, $Card_Number))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                    //header("Location: cardview.php");
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }

        // Insert Record in the Database Using Query
        function insert_payment_record($a,$b,$c,$d,$e)
        {
            global $db;
            $query = "insert into card_details(Expiry_Date, Name_on_Card, CVV, Registered_ph_no, Card_Number) values('$a','$b','$c','$d','$e')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        // View Database Record
        public function view_payment_record()
        {
            global $db;
            $query = "select * from card_details";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        // Get Particular Record
        public function get_payment_record($id)
        {
            global $db;
            $sql = "select * from card_details where Card_Number='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }

        // Update Record
        public function update_payment()
        {
            global $db;

            if(isset($_POST['btn_update']))
            {
                // $ID = $_POST['ID'];
                // $FirstName = $db->check($_POST['First']);
                // $LastName = $db->check($_POST['Last']);
                // $UserName = $db->check($_POST['UserName']);
                // $Email = $db->check($_POST['UserEmail']);

                $Card_Number = $_POST['Card_Number'];
                $Name_on_Card = $db->check($_POST['Name_on_Card']);
                $Expiry_Date = $db->check($_POST['Expiry_Date']);
                $CVV = $db->check($_POST['CVV']);
                $Registered_ph_no = $db->check($_POST['Registered_ph_no']);

                if($this->update_payment_record($Expiry_Date,$Name_on_Card,$CVV,$Registered_ph_no,$Card_Number))
                {
                    $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                    header("location:cardview.php");
                }
                else
                {
                    $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
                }


            }
        }

        // Update Function 2
        public function update_payment_record($Expiry_Date,$Name_on_Card,$CVV,$Registered_ph_no,$Card_Number)
        {
            global $db;
            $sql = "update card_details set Expiry_Date='$Expiry_Date', Name_on_Card='$Name_on_Card', CVV='$CVV', Registered_ph_no='$Registered_ph_no', Card_Number='$Card_Number' where Card_Number='$Card_Number'";
            $result = mysqli_query($db->connection,$sql);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        // Delete Record
        public function Delete_payment_Record($id)
        {
            global $db;
            $query = "delete from card_details where Card_Number='$id'";
            $result = mysqli_query($db->connection,$query);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        //OPERATIONS FOR REGISTERING STUDENT 
        // Insert Record in the Database
        public function Store_student_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                
                $REGISTRATION_NUMBER = $_POST['reg_num'];
                $FIRST_NAME = $_POST['firstName'];
                $MIDDLE_NAME = $_POST['middleName'];
                $LAST_NAME = $_POST['lastName'];
                $MOBILE_NUMBER = $_POST['mobile'];
                $EMAIL = $_POST['Email'];
                $PASSWRD = $_POST['Password'];



                if($this->insert_student_record($REGISTRATION_NUMBER,$FIRST_NAME, $MIDDLE_NAME, $LAST_NAME, $MOBILE_NUMBER,$EMAIL, $PASSWRD))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                    sleep(3);
                    header("Location:register_success.php");
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }

        // Insert Record in the Database Using Query
        function insert_student_record($a,$b,$c,$d,$e,$f,$g)
        {
            global $db;
            $query = "insert into student(REGISTRATION_NUMBER,FIRST_NAME, MIDDLE_NAME, LAST_NAME,MOBILE_NUMBER,EMAIL,PASSWRD) values('$a','$b','$c','$d','$e','$f','$g')";
            $result = mysqli_query($db->connection,$query);
            if($result)
            {   
                return true;
            }
            else
            {
                return false;
            }
        }


        // View Database Record
        public function view_student_record()
        {
            global $db;
            $query = "select * from student";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        // Get Particular Record
        public function get_student_record($id)
        {
            global $db;
            $sql = "select * from student where reg_num='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }

        public function update_student()
        {
            global $db;

            if(isset($_POST['btn_update']))
            {
                // $ID = $_POST['ID'];
                // $FirstName = $db->check($_POST['First']);
                // $LastName = $db->check($_POST['Last']);
                // $UserName = $db->check($_POST['UserName']);
                // $Email = $db->check($_POST['UserEmail']);

                $REGISTRATION_NUMBER = $_POST['reg_num'];
                $FIRST_NAME = $db->check($_POST['firstName']);
                $MIDDLE_NAME = $db->check($_POST['middleName']);
                $LAST_NAME = $db->check($_POST['lastName']);
                $MOBILE_NUMBER = $db->check($_POST['mobile']);
                $EMAIL = $db->check($_POST['Email']);
                $PASSWRD = $db->check($_POST['Password']);

                if($this->update_student_record($REGISTRATION_NUMBER,$FIRST_NAME, $MIDDLE_NAME, $LAST_NAME, $MOBILE_NUMBER,$EMAIL, $PASSWRD))
                {
                    $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                    header("location:registerview.php");
                }
                else
                {
                    $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
                }


            }
        }

        // Update Function 2
        public function update_student_record($REGISTRATION_NUMBER,$FIRST_NAME, $MIDDLE_NAME, $LAST_NAME, $MOBILE_NUMBER,$EMAIL, $PASSWRD)
        {
            global $db;
            $sql = "update student set reg_num='$REGISTRATION_NUMBER', firstName='$FIRST_NAME', middleName='$MIDDLE_NAME', lastName='$LAST_NAME', mobile='$MOBILE_NUMBER', Email='$EMAIL', Password='$PASSWRD' where reg_num='$REGISTRATION_NUMBER'";
            $result = mysqli_query($db->connection,$sql);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        // Delete Record
        public function Delete_student_Record($id)
        {
            global $db;
            $query = "delete from student where reg_num='$id'";
            $result = mysqli_query($db->connection,$query);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
?>
