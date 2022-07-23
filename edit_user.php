<?php 

   include("connection.php");

        $id = $_POST['id'];


        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $gender= $_POST['gender'];
         $query1 = "UPDATE tab SET firstname='$fname', surname='$sname', username='$uname', email='$email', gender='$gender'";
         $res = mysqli_query($connect,$query1);

         if ($res) {
           
         }







 ?>