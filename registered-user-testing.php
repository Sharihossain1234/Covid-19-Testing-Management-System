<?php 
//DB conncetion
include_once('includes/config.php');
error_reporting(0);
if(isset($_POST['submit'])){
//getting post values
$mnumber=$_POST['mobilenumber'];
$testtype=$_POST['testtype'];
$timeslot=$_POST['birthdaytime'];
$orderno= mt_rand(100000000, 999999999);
$query="insert into tbltestrecord(PatientMobileNumber,TestType,TestTimeSlot,OrderNumber) values('$mnumber','$testtype','$timeslot','$orderno');";
$result = mysqli_query($con, $query);
if ($result) {
echo '<script>alert("Your test request submitted successfully.your sampled will be collected within 24 hours after your test request.New Order number is: "+"'.$orderno.'")</script>';
  echo "<script>window.location.href='registered-user-testing.php'</script>";
} 
else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
echo "<script>window.location.href='registered-user-testing.php'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

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

    <title>Sun Health Care|Already Register User</title>

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
				<a class="shower" href="#">Previous registration traking </a><br><br>

                    <!-- Page Heading -->
					  <h3><u> Instractions</u></h3></br>
					  <h4>Dear,Patient this tools mainly used for Already Registeres Users.</h4>
					  <ul>
					  <li>[Step 1]: Registered Users search by Registered Govt.Issued Id Number for Registration details.</li><br/>
					  <li>[Step 2]:Set Test Type and Time Slot  for new test request.</li><br/>
					  <li>[Step 3]: Click Submit button.</li><br/>	
					  <li>If you want to  Voice search please Remove number space gap.</li><br/>
					  <li>If you want to update Registred details please click update button.</li><br/><br/>
                    <h1 class="h3 mb-4 text-gray-800">Previous registration traking</h1>

<form method="post">
  <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                          
                                <div class="card-body"style="background:lightblue;">
                       <div class="form-group">
					 
                                             <label>NID/Birth Certificate No.</label>
                                            
										<input type="text" class="form-control" id="regmobilenumber" name="regmobilenumber" placeholder="Please enter your registered Govt.Issued Id Number"required="true" maxlength="17"  >
										<img src="microphone-3404243_1280.png" width="40px" onclick="startDictation('regmobilenumber')">
                                        </div>
<div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="search" value="Search">                           
                             </div>

                                    </div>
                                </div>
                            </div>
                        </div>
</form>

<hr />
<?php if(isset($_POST['search'])){ ?>
<h3 align="center" style="color:red">Resulst againt NID/Birthcertificate  Number "<?php echo $_POST['regmobilenumber'];?>"</h3>
<hr/>
    <?php
    $mnumber=($_POST['regmobilenumber']);
    $sql=mysqli_query($con,"select * from tblpatients where MobileNumber='$mnumber'");
    $row=mysqli_num_rows($sql);
    if($row>0){
    while ($result=mysqli_fetch_array($sql)) {

?>
<form name="newtesting" method="post">
  <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4"style="background:lightblue;">
							
                                <div class="card-header py-3"style="background:lightblue;">
								
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
							
                			
                  
                                <div class="card-body">
								<div>


<a href="noton.php" class="standard-btn-coloured btn-lg">Update</a>
</div><br>

                        <div class="form-group">
						 <label>Registered Id No.</label>
                                            <input type="text" class="form-control" id="id" name="id"  value="<?php echo $result['id']; ?>" readonly="true"style="background:#566573; color:white;"><br>
                                       
                                       
                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"  value="<?php echo $result['FullName']; ?>" readonly="true"style="background:#566573; color:white;">
                                        </div>
                                       
										 <div class="form-group">
                                              <label>Mobile Number </label>
                                            <input type="text" class="form-control" id="govtidnumber" name="govtidnumber" value="<?php echo $result['GovtIssuedIdNo']; ?>" readonly="true"style="background:#566573; color:white;">
                                        </div>
                          
                                    
										
                                           <div class="form-group">
                                             <label>NID/Birthcertificate No.</label>
                                            <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" value="<?php echo $result['MobileNumber']; ?>" readonly="true"style="background:#566573; color:white;">
                                        </div>

                              
					

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                           <div class="card shadow mb-4"style="background:lightblue;">
                                <div class="card-header py-3"style="background:lightblue;">
                                    <h6 class="m-0 font-weight-bold text-primary">Testing Information</h6>
                                </div>
                                <div class="card-body">
                             <div class="form-group">
                                              <label>Test Type</label>
                                              <select class="form-control" id="testtype" name="testtype" required="true"style="color:black;">
                                            <option value="">--Select--</option> 
                                            <option value="Antigen">Antigen</option>  
                                            <option value="RT-PCR">RT-PCR</option>   
                                              </select>
                                        </div>

                                                      <div class="form-group">
                                            <label>Time Slot for Test</label>
                                 <input type="datetime-local" class="form-control" id="birthdaytime" name="birthdaytime" class="form-control"style="color:black;">                                        
                             </div>
                       <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit">                           
                             </div>

                                </div>
                            </div>
                       

                        </div>

                    </div>
</form>
<?php } } else { ?>
<h4 align="center" style="color:red;">No Patient found</h4>
<?php }}?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                        <footer class="py-4 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white"style="color:green;">Copyright &copy;2021 Sun Healthcare All Rights Reserved </p>
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
<script>

     function startDictation(x) {
  
    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-Us";
      recognition.start();
      recognition.onresult = function(e) {
          if(x=="phone" || x=="aadhar")
              {
        document.getElementById(x).value = parseInt(e.results[0][0].transcript);
        recognition.stop();
              }
          else{ 
              document.getElementById(x).value= e.results[0][0].transcript;
        recognition.stop();
          }
       };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  
  
  }
  </script>
</html>