<?php
error_reporting (0);
date_default_timezone_set('Asia/dhaka');
include("dbconnection.php");
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
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
echo '<script>alert("Your test request submitted successfully.please Preserve your 9 digits order number.New Order number is: "+"'.$orderno.'")</script>';
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sun Healthcare-Report Generator</title>

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
p{
	color:red;
	
}
        
			body{
				padding: 0;
				margin: 0;
				font-family: 'Quicksand', sans-serif;
				
				overflow-x: hidden;
				color: black;
				
			}
			
			.wrapper{
			    max-width: 720px;
			    margin: 0 auto;
			    padding: 20px;
			}
			
			.wideinput{
			    box-sizing: border-box;
			    width: 100%;
			    margin-bottom: 5px;
			    margin-top: 5px;
			    padding: 10px;
			    border: 1px solid lime;
			}
			
			.inputgroup{
			    margin-bottom: 20px;
			}
			
			
			h1, h2, h3, h4, h5, p{
			    margin: 0;
			    margin-bottom: 10px;
				color:red;
			
			}
			
			.registereditem{
			    background-color: white;
			    color: black;
			    padding: 10px;
			    margin-top: 5px;
			    margin-bottom: 5px;
			}
			footer {
	  background:#D84315;
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









	footer {
	  background:#D84315;
  }


#card1 {
    display:none;
}

.card-header, .datadiv {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.card {
    color: #000;
    background: #22475E;
    background-repeat:no-repeat;
    background-image:cover;
    background-attachment:fixed;
}

.info {
    margin-bottom: 10px;
    color:#fff;
    padding: 5px 0;
    border-width: 1px;
    border-radius: 15px;
    box-shadow: 1px 2px 10px 0px rgba(0, 0, 0, 0.3);
}

a {
    text-decoration: none;
    color: black;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  overflow-y: scroll;
  overflow-x: hidden;
  height: 500px;
}

.loader div {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: #ccc;
  top: 45%;
  padding-top:13px;
  font-size:18px;
  text-align:center;
  border-radius: 50%;
}

.loader div:nth-child(1) {
  background-color: #FF5460;
  animation: move 2s infinite cubic-bezier(.2,.64,.81,.23);
}
.loader div:nth-child(2) {
  background-color: #FF9D84;
  animation: move 2s 150ms infinite cubic-bezier(.2,.64,.81,.23);
}
.loader div:nth-child(3) {
  background-color: #F0E797;
  animation: move 2s 300ms infinite cubic-bezier(.2,.64,.81,.23);
}
.loader div:nth-child(4) {
  background-color: #75B08A;
  animation: move 2s 450ms infinite cubic-bezier(.2,.64,.81,.23);
}


@keyframes move {
  0% {left: 0%;}
  100% {left:100%;}
}


/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.title {
    color: grey;
    font-size: 18px;
}

a {
    text-decoration: none;
    color: black;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.icon {
    color:white;
}

.nameLink {
    color: #000;
}

.text-white {
    font-weight:bold;
    font-size:20px;
}







</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include_once('includes/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
<?php include_once('includes/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
				<a class="shower" href="#">Report Generator </a><br><br>
 
                    
                    <h1 class="h3 mb-4 text-gray-800"></h1>

<form method="post">
  <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                          
                                <div class="card-body"style="background:lightblue;">
                       <div class="form-group">
					 
                                             <label>NID/Birth Certificate No. </label>
                                            
										<input type="text" class="form-control" id="regmobilenumber" name="regmobilenumber" placeholder="Enter Pataient registered  NID/Birth Certificate No"required="true" maxlength="17"  >
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
<h3 align="center" style="color:red">Resulst againt NID/Birth Certificate  Number "<?php echo $_POST['regmobilenumber'];?>"</h3>
<hr/>
    <?php
    $mnumber=($_POST['regmobilenumber']);
    $sql=mysqli_query($con,"select * from tblpatients where MobileNumber='$mnumber'");
    $row=mysqli_num_rows($sql);
    if($row>0){
    while ($result=mysqli_fetch_array($sql)) {

?>
<form action="pdf.php" method="POST">
 <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4"style="background:lightblue;">
                                <div class="card-header py-3"style="background:lightblue;">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body">
                            
                      
	                                        <div class="form-group">
                                              <label><b>Patient Name</b></label>
                                            <input type="text" class="form-control" id="Address" name="fistname" placeholder="Enter Full name"  value="<?php echo $result['FullName']; ?>" readonly="true"style="background:#566573; color:white;">
											 								  
											
                                        </div>
										
                                        <div class="form-group">
                                              <label><b>Mobile No</b></label>
                                            <input type="text" class="form-control" id="City" name="test" placeholder="Enter Phone No"value="<?php echo $result['GovtIssuedIdNo']; ?>" readonly="true" style="background:#566573; color:white;">											 											
                                        </div>
                                   
	                                    
											   <div class="form-group">
                                             <label><b>NID/Birthcertificate No.</b></label>                                      

                                  <input type="text" class="form-control" id="mobilenumber" name="govtids" placeholder="Enter Govt.Issued ID Number." value="<?php echo $result['MobileNumber']; ?>" readonly="true"style="background:#566573; color:white;">
								   
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
								   <div class="form-group"style="color:black;">
             <label><b>Patient Order NO</b></label>
                          <input type="text" class="form-control" id="Name" name="rollno"     placeholder="Enter Order Number" required="true"style="color:black;">					   
											
											  
                                       </div>
                            
									  <div class="form-group">
                                              <label><b>Test Type</b></label>
                                              <select class="form-control" id="testtype" name="type" required="true"style="color:black;">
                                            <option value="">--Select--</option> 
                                            <option value="Antigen">Antigen</option>  
                                            <option value="RT-PCR">RT-PCR</option>
                                              
                                              </select>
                                        </div>
									    <div class="form-group">
                                              <label><b>Sample collection date</b></label>
                                            <input type="date" class="form-control" id="City" name="sample" placeholder="Enter Phone No" required="true"style="color:black;">											 											
                                        </div>
										    <div class="form-group">
                                              <label><b>Result Date</b></label>
                                            <input type="date" class="form-control" id="City" name="date" placeholder="Enter Phone No" required="true"style="color:black;">											 											
                                        </div>
										 <div class="form-group">
                                              <label><b>Test result</b></label>
                                              <select class="form-control" id="testtype" name="result" required="true"style="color:black;">
                                            <option value="">--Select--</option> 
                                            <option value="Covid-19 Positive">Covid-19 Positive</option>  
                                            <option value="Covid-19 Negetive">Covid-19 Negetive</option>
                                              
                                              </select><br>
														<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit"style="background:green;color:white"></td>
</tr>  
                                        </div>        
                                </div>
                            </div>
                       

                        </div>

   
 </form> 		
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
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
           <?ph
    <!-- Bootstrap core JavaScript-->
   
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
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
<?php } ?>