<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');
if(isset($_POST['submit'])){
//getting post values
$id=$_POST['id'];
$fname=$_POST['fullname'];
$mnumber=$_POST['mobilenumber'];
$dob=$_POST['dob'];
$govtid=$_POST['govtissuedid'];
$govtids=$_POST['govtissuedids'];
$govtidnumber=$_POST['govtidnumber'];
$address=$_POST['address'];
$state=$_POST['state'];
$zila=$_POST['zila'];
$testtype=$_POST['testtype'];
$timeslot=$_POST['birthdaytime'];
$orderno= mt_rand(100000000, 999999999);
$query="insert into tblpatients(id,FullName,MobileNumber,DateOfBirth,GovtIssuedId,GovtIssuedIds,GovtIssuedIdNo,FullAddress,State,zila) values('$id','$fname','$mnumber','$dob','$govtid','$govtids','$govtidnumber','$address','$state','$zila');";
$query.="insert into tbltestrecord(PatientMobileNumber,TestType,TestTimeSlot,OrderNumber) values('$mnumber','$testtype','$timeslot','$orderno');";
$result = mysqli_multi_query($con, $query);
if ($result) {
			
echo '<script>alert("Your test request submitted successfully.please Preserve your 9 digits order number for next Query. Order number is : "+"'.$orderno.'")</script>';
  echo "<script>window.location.href='new-user-testing.php'</script>";
} 
else {
    echo "<script>alert('Something went wrong. Please try again.');<script>";  
echo "<script>window.location.href='new-user-testing.php'</script>";
}
}
?>

<html>
<head>


<link rel="stylesheet" href="Bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css.map">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css.map">
    <script src="Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.js.map"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<!-- HTML5 Speech Recognition API -->
<!-- CSS Styles -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sun Healthcare| Update registred details</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
	text-align:left;
}

	 footer {
	  background:#D84315;
  }
   h2{
	  color:black;
  }
  ul{
	  color:red;
  }
  h4{
	  color:black;
  }
  h2{
	  color:red;
	  text-align:center;
  }
  
   a.shower {
  cursor: pointer;
  position: relative;
  display: inline-block;
  padding: 10px 150px;
  color: #04335a;
  border-radius: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  text-decoration: none;
  font-size: 20px;
  overflow: hidden;
  transition: 0.5s;
  color: Black;
  background: #2196f3;
  box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 10px #2196f3;
} 
.standard-btn {
  text-decoration:none;
  border: 2px solid #00ACEC;
  padding:10px 20px 10px 20px;
  border-radius:2px;
  color:#00ACEC;
  margin:5px;
}
.standard-btn-coloured {
  text-decoration:none;
  background:#00acec;
  border: 2px solid #00ACEC;
  padding:10px 20px 10px 20px;
  border-radius:2px;
  color:#FFFFFF;
  margin:5px;
}

</style>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

<?php include_once('includes/sidebar.php');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
          <?php include_once('includes/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
				 <div class="container-fluid">
        <!-- Basic Card Example -->
           

  <a class="shower" href="#"> Update Registred details </a><br> 
  <div>

<!-- Page Heading -->
					  <h3><u> Instractions</u></h3></br>
					  <h4 style="color:red;">Dear,Patient you can update mobile number and home address only from registred details</h4><br>
					 
<a href="registered-user-testing.php" class="standard-btn-coloured btn-lg"><-Back</a>
</div><br>
  <form action="" method="POST">
  <div class="row">
 
   <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4"style="background:lightblue;">
                                <div class="card-header py-3"style="background:lightblue;">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body"style="color:black">
                        <div class="form-group"style="color:black">
                          <label> Registred Id No.</label>
                          <input type="text" class="form-control"  name="id"  placeholder="Enter Registred id No." " title="letters only" required="true"style="color:black">					   
											
											   
                                        </div>
									 <div class="form-group"style="color:black">
                            <label>Mobile Number</label>
                          <input type="text" class="form-control"  name="govtidnumber"  placeholder="Enter New Mobile Number" " title="letters only" required="true"style="color:black">					   
										
											   
                               

   <input type="submit" class="btn btn-primary btn-user btn-block" name="update" value="Update">    
  

  
        </div>
                            </div>
                       

                        </div>

                    </div>
  </form>
    </div>
                <!-- /.container-fluid -->

            </div><br><br><br>
            <!-- End of Main Content -->
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

           

           <footer class="py-4 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white"style="color:green;color:white;">Copyright &copy;2021 Sun Healthcare All Rights Reserved</p>
    </div>
    <!-- /.container -->
  </footer>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>


</html>
<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'covidtmsdb');
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	
	$query = "UPDATE `tblpatients` SET GovtIssuedIdNo='$_POST[govtidnumber]',FullAddress='$_POST[address]' where id='$_POST[id]'";
	$query_run = mysqli_query($connection,$query);
	if($query_run)
	{
		echo '<script type="text/javascript"> alert(" Registred Details Updated") </script>';
		echo "<script>window.location.href='registered-user-testing.php'</script>";
	}
	else
	{
	   echo '<script type="text/javascript"> alert("Data not Updated") </script>';	
	}
}
?>
