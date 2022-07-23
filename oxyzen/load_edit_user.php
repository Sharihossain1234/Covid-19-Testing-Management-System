<?php 

include("connection.php");

$id = $_POST['id'];

$query = "SELECT * FROM tab WHERE id='$id'";
$res = mysqli_query($connect,$query);

$fname = "";
$sname = "";
$uname = "";
$email = "";
$gender= "";

while ($row = mysqli_fetch_array($res)) {
    $fname = $row['firstname'];
    $sname = $row['surname'];
    $uname = $row['username'];
    $email = $row['email'];
    $gender= $row['gender'];
}

$output = array(
 "fname" => $fname,
 "sname" => $sname,
 "uname" => $uname,
 "email" => $email,
 "gender" => $gender
);

echo json_encode($output);

 


    




 ?>