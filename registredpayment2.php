<?php
error_reporting (0);

	//DB conncetion
include_once('includes/config.php');
error_reporting(0);
 if(isset($_POST['submit'])){
//getting post values
$fname=$_POST['fullname'];

$address=$_POST['address'];
$state=$_POST['state'];
$zila=$_POST['zila'];
$payment=$_POST['payment'];

$query="insert into nagad(FullName,FullAddress,State,zila,payment) values('$fname','$address','$state','$zila','$payment');";
$query.="insert into tbltestrecord(PatientMobileNumber,TestType,TestTimeSlot,OrderNumber) values('$mnumber','$testtype','$timeslot','$orderno');";
$result = mysqli_multi_query($con, $query);
if ($result) {
			
echo '<script>alert("Payment Statement successfully send "+"'.$orderno.'")</script>';
  echo "<script>window.location.href='mainpayment.php'</script>";
} 
else {
    echo "<script>alert('Something went wrong. Please try again.');<script>";  
echo "<script>window.location.href='mainpayment.php'</script>";
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
			
 
                    
                    <h1 class="h3 mb-4 text-gray-800"></h1>

<form method="post">
  <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                          
                                <div class="card-body"style="background:white;">
                       <div class="form-group">
					 
                                             <label>Enter Nagad Transaction ID for verify Statement</label>
                                            
										<input type="text" class="form-control" id="address" name="address" placeholder="Enter Nagad Transaction ID"required="true" maxlength="17"  >
										
                                        </div>
<div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="search" value="verify payment Statement">                           
                             </div>

                                    </div>
                                </div>
                            </div>
                        </div>
</form>

<hr />
<?php if(isset($_POST['search'])){ ?>
<h3 align="center" style="color:red">Payment statement of Nagad Transaction ID  "<?php echo $_POST['address'];?>"</h3>
<hr/>
    <?php
    $address=($_POST['address']);
    $sql=mysqli_query($con,"select * from  nagad where FullAddress='$address'");
    $row=mysqli_num_rows($sql);
    if($row>0){
    while ($result=mysqli_fetch_array($sql)) {

?>
<form action="pdf3.php" method="POST">
 <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4"style="background:#e24908;">
                                <div class="card-header py-3"style="background:#e24908;">
                                    <h6 class="m-0 font-weight-bold text-primary"style="color:white;">Nagad Payment statement</h6>
                                </div>
                                <div class="card-body">
                                                    
														<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Payment Statement invoice"style="background:black;color:white"></td>
</tr><br><br>
                      
	                           <img src="img/Screenshot (110).png" alt="" width="250" height="200" required="true"><label for="Chinayes"><big></big></label><br/>
      
           
										
                                        <div class="form-group">
                                              <label><b>Order Number</b></label>
                                            <input type="text" class="form-control" id="zila" name="zila" placeholder="Enter Phone No"value="<?php echo $result['zila']; ?>" readonly="true" style="background:#566573; color:white;">											 											
                                        </div>
                                   
                                      
									
											
											   <div class="form-group">
                                               <label><b>Pataient Name</b></label>
											  
                                            <input type="text" class="form-control" id="state" name="state" placeholder="Voter id/ Birth Certificate /Driving License "value="<?php echo $result['state']; ?>" readonly="true"style="background:#566573;color:white;">
											
											
											
											    </div>
												
	                                       <div class="form-group">
                                               <label><b>Test type</b></label>
											  
                                            <input type="text" class="form-control" id="testtype" name="testtype" placeholder="Voter id/ Birth Certificate /Driving License "value="<?php echo $result['testtype']; ?>" readonly="true"style="background:#566573;color:white;">
											
											
											
											    </div>
											   <div class="form-group">
                                             <label><b>Transaction ID</b></label>                                      

                                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Govt.Issued ID Number." value="<?php echo $result['FullAddress']; ?>" readonly="true"style="background:#566573; color:white;">
								   
                                        </div>
										  
										
 
										
										    <div class="form-group">
                                              <label><b>Payment amount(TK.)</b></label>
                                            <textarea class="form-control" id="payment" name="payment" readonly="true"style="background:#566573; color:white;" placeholder="Home Address"><?php echo $result['payment']; ?></textarea>											 								 											                                        
                                            </div>
															
			
                          

  
                                        </div>        
                                </div>
                            </div>
                       

                        </div>

   
 </form> 		
</form>
<?php } } else { ?>
<h4 align="center" style="color:red;">No Statement found</h4>
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
