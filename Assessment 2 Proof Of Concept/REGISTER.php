<?php

   include_once 'DATABASE.php';

   if($_POST['PASSWORD'] == $_POST['CONPASS'])
   {
        if(isset($_POST['submit']))
        {
            $email = $_POST['EMAIL'];
            $sql = "SELECT * FROM signup WHERE email='$email'";
            $res = mysqli_query($conn, $sql);

            if(mysqli_num_rows($res) > 0) 
            {
                echo "<h2>Email is already Entered</h2>";
            }
            
            else
            {
                $email=$_POST['EMAIL'];
                $f_name=$_POST['FIRST_name'];
                $username=$_POST['USERNAME'];
                $pword=$_POST['PASSWORD'];
                $pw = md5($pword);
                $sql = "insert into signup (EMAIL,FIRST_name,USERNAME,PASSWORD) values('$email','$f_name','$username','$pw')";
                if(mysqli_query($conn, $sql))
                {
                    echo "<h2>Resgistration is COMPLETED</h2>";
                }
                else
                {
                    echo "Error when inserting information:" .$sql. "" .mysqli_error($conn);
                }
                mysqli_close($conn);
            }
        }
   }

?>