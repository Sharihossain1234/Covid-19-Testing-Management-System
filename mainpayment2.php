<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');

if(isset($_POST['submit'])){
//getting post values
$fname=$_POST['fullname'];
$testtype=$_POST['testtype'];
$address=$_POST['address'];
$state=$_POST['state'];
$zila=$_POST['zila'];
$payment=$_POST['payment'];

$query="insert into nagad(FullName,FullAddress,State,zila,payment,testtype) values('$fname','$address','$state','$zila','$payment','$testtype');";

$result = mysqli_multi_query($con, $query);
if ($result) {
			
echo '<script>alert("Nagad Payment statement successfully send "+"'.$orderno.'")</script>';
  echo "<script>window.location.href='registredpayment2.php'</script>";
} 
else {
    echo "<script>alert('Something went wrong. Please try again.');<script>";  
echo "<script>window.location.href='registredpayment2.php'</script>";
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

    <title>Sun Healthcare|Nagad Payment</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
a {
  text-decoration: none;
}

.-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 216px;
  height: 56px;
  text-align: center;
  border-radius: 12px;
}

.-btn:hover {
  opacity: .8;
}

.-bg {
  background: #1c449b;
}

.-txt {
  color: #fff;
}

.-xs {
  font-size: 12px;
}


h1{
	text-align:center;
}
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}
p{
	color:red;
	
}
a{
	
}
h2{
	color:red;
	text-align:center;
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

</style>
  <script>
function mobileAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability3.php",
data:'address='+$("#address").val(),
type: "POST",
success:function(data){
$("#mobile-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

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

                    <!-- Page Heading -->
     <a class="shower" href="#">Nagad Payment </a><br> <br>
	<h2>Nagad Merchant No:01883689443</h2><br>	

<form name="newtesting" method="post">
  <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4"style="background:lightblue;">
                                <div class="card-header py-3"style="background:lightblue;">
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                </div>
								<div class="card-body"style="color:black">
								                          <a href="registredpayment2.php" class="-btn -bg -txt">
  verify statement
</a>
								  <div class="inputgroup">                          
                            <label><big> </big></label><br/>
                             <img src="img/Screenshot (110).png" alt="" width="400" height="250" required="true"><label for="Chinayes"><big></big></label><br/>
      
                        </div><br>
                               
								
								
                        <div class="form-group"style="color:black">
                            <label>Order Number</label>
                          <input type="text" class="form-control" id="zila" name="zila"  placeholder="Enter Test order number"maxlength="9" " title="letters only" required="true"style="color:black">					   
											
											   
                                        </div>
										
                                    <div class="form-group"style="color:black">
                            <label>Pataient Name</label>
                          <input type="text" class="form-control" id="state" name="state"  placeholder="Enter full name" " title="letters only" required="true"style="color:black">					   
											
											   
                                        </div>
										<div class="form-group">
                                              <label>Test Type</label>
                                              <select class="form-control" id="testtype" name="testtype" required="true"style="color:black;">
                                            <option value="">--Select--</option> 
                                            <option value="Antigen">Antigen</option>  
                                            <option value="RT-PCR">RT-PCR</option>
                                              
                                              </select>
                                        </div>
								
											
									       <div class="form-group">
                                             <label>Nagad Transaction ID</label>                                      

                                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Nagad Transaction ID "  required="true"maxlength="10" onBlur="mobileAvailability()"style="color:black">
								     
                                                <span id="mobile-availability-status" style="font-size:12px;"></span>
                                        </div>
                               
										<div class="form-group">
                                              <label>Payment amount (TK.)</label>
                                              <select class="form-control" id="payment" name="payment" required="true"style="color:black;">
                                            <option value="">--Select--</option>
											 <option value="500TK">500TK</option>
                                            <option value="3600TK">3600TK</option>  
                                           
                                              
                                              </select>
                                        </div>
						
                               
								<div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">                           
                             </div>

                         

                       

                                </div>
                            </div>
                       

                        </div>
          <div class="col-lg-6">

                           <div class="card shadow mb-4"style="background:#e24908;">
                                <div class="card-header py-3"style="background:#e24908;">
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                </div>
                                <div class="card-body">
                             <div class="form-group"style="color:white;">
*Go to your Nagad Mobile Menu by dialing: *167# or using Nagad app<br><br>
*Choose "Payment"<br><br>
*Enter the Merchant Nagad Account Number:01883689443 <br><br>
*Enter the amount <br><br>
*Enter a reference: 1<br><br>
*Enter the Counter Number: 1<br><br>
*Now enter your Nagad Mobile Menu PIN to confirm<br><br>
*Done! You will receive a confirmation message from Nagad<br><br>
*Put the information in the side box and press "submit"<br><br>
*And than verify and recived payment statement <br><br>
*Are you Already send payment statement please click"Verify Statement" <br>
                                        </div>

                                                

                                </div>
                            </div>
                       

                        </div>

                    </div>
</form>

                </div>
                <!-- /.container-fluid -->

            </div><br><br><br>
            <!-- End of Main Content -->

           <footer class="py-4 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white"style="color:green;">Copyright &copy;2021 Sun Healthcare All Rights Reserved</p> 

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