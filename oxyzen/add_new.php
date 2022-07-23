<?php 

include("connection.php");


  
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  



  $error = array();

  if (empty($fname)) {
      $error['s'] = "Enter firstname";
  }else if(empty($sname)){
     $error['s'] = "Enter surname";
  }else if(empty($uname)){
     $error['s'] = "Enter username";
  }
  else if(empty($email)){
     $error['s'] = "Enter Email";
  }
  else if(empty($gender)){
     $error['s'] = "Select gender";
  }else if(strlen($fname)<2){
     $error['s'] = "Invaild firstname";
  }else if(strlen($sname)<2){
     $error['s'] = "Invaild surname";
  }else if(strlen($uname)<5){
     $error['s'] = "username is too short";
  }else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
     $error['s'] = "Invaild Email";
  }





  if (isset($error['s'])) {
    echo "<h6 class='alert alert-danger text-center'>".$error['s']."</h6>";
  }else{
    echo "";
  }


  if (count($error)==0) {
      $query = "INSERT INTO tab(firstname,surname,username,email,gender) VALUES('$fname','$sname','$uname','$email','$gender')";

      $res = mysqli_query($connect,$query);

      if ($res) {
        echo "<h6 class='alert alert-success text-center'>You have successfully added new useer</h6>";
      }else{
        echo "<h4 class='alert alert-danger text-center'>Failed to INsert Data</h4>";
      }
  }




 ?>