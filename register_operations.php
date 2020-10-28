<?php


    require_once('dbconfig.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                
                $REGISTRATION_NUMBER = $_POST['REGISTRATION_NUMBER'];
                $FIRST_NAME = $_POST['FIRST_NAME'];
                $MIDDLE_NAME = $_POST['MIDDLE_NAME'];
                $LAST_NAME = $_POST['LAST_NAME'];
                $MOBILE_NUMBER = $_POST['MOBILE_NUMBER'];
                $EMAIL = $_POST['EMAIL'];
                $PASSWRD = $_POST['PASSWRD'];



                if($this->insert_record($REGISTRATION_NUMBER,$FIRST_NAME, $MIDDLE_NAME, $LAST_NAME, $MOBILE_NUMBER,$EMAIL, $PASSWRD))
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
        function insert_record($a,$b,$c,$d,$e,$f,$g)
        {
            global $db;
            $query = "insert into STUDENT(REGISTRATION_NUMBER,FIRST_NAME, MIDDLE_NAME, LAST_NAME,MOBILE_NUMBER,EMAIL,PASSWRD) values('$a','$b','$c','$d','$e','$f','$g')";
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
        public function view_record()
        {
            global $db;
            $query = "select * from STUDENT";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        // Get Particular Record
        public function get_record($id)
        {
            global $db;
            $sql = "select * from STUDENT where REGISTRATION_NUMBER='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }


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

        // Delete Record
        public function Delete_Record($id)
        {
            global $db;
            $query = "delete from STUDENT where REGISTRATION_NUMBER='$id'";
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
