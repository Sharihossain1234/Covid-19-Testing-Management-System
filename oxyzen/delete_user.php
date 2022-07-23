<?php 

  include("connection.php");


  $id = $_POST['id'];

  $query = "DELETE FROM tab WHERE id='".$id."'";


  $res = mysqli_query($connect,$query);

  

 ?>