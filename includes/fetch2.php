<?php
//time zone
date_default_timezone_set('Asia/dhaka');
//database connection
$con=mysqli_connect("localhost","root","","babu");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
