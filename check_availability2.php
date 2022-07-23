<?php 
require_once("includes/config.php");
// Check Availabilty for user mobile number
if(!empty($_POST["address"])) {
	$address= $_POST["address"];

		$result =mysqli_query($con,"select id from  payment where FullAddress='$address'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'>Transaction ID already Exist. Please try with right Transaction ID  </span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'>bKash Transaction ID  number  available for Payment Statement .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


// Check Availabilty for Phlebotomist employee id
if(!empty($_POST["employeeid"])) {
	$empid= $_POST["employeeid"];

		$result =mysqli_query($con,"select id from tblphlebotomist where EmpID='$empid'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Employee id already exists. Please try with another employee id.</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Employee id  available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
