<?php

   include_once 'DATABASE.php';
   if(isset($_POST['submit']))
   {
      $email = $_POST['EMAIL'];
      $pas= $_POST['PASSWORD'];
      $pass = md5($pas);
      $sql = "SELECT * FROM signup WHERE email='$email' && password='$pass'";
      $res = mysqli_query($conn, $sql);
      
      if(mysqli_num_rows($res) > 0) 
      {
          header('Location:main.php');
      }
      else
      {
          echo "This is invalid";
      }
   }
?>