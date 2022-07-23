<?php
session_start();
include_once('includes/config.php');
error_reporting(0);
if(isset($_POST['submit'])){
//getting post values
$fname=$_POST['fullname'];
$address=$_POST['address'];
$state=$_POST['state'];
$zila=$_POST['zila'];
$payment=$_POST['payment'];

$query="insert into payment(FullName,FullAddress,State,zila,payment) values('$fname','$address','$state','$zila','$payment');";
$query.="insert into tbltestrecord(PatientMobileNumber,TestType,TestTimeSlot,OrderNumber) values('$mnumber','$testtype','$timeslot','$orderno');";
$result = mysqli_multi_query($con, $query);
if ($result) {
			
echo '<script>alert("Payment successfull "+"'.$orderno.'")</script>';
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

    <title>Sun Healthcare | Report Genarator</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

 <!-- Custom styles for this template-->
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
	 <style>
	 footer {
	  background:#D84315;
  }
  h3{
	  color:orange;
  }
  footer {
	  background:#D84315;
  }
  table
{
color:white;


}
#button
{
background-color:green;
color:white;
height:50px;
width:100px;
border-radius:25px;	
}
body
{
background:white;	
}
h1{
	text-align:center;
	color:red;
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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include_once('includes/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column"style="color:black;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
<?php include_once('includes/topbar.php');?>
                <!-- End of Topbar -->


    

                    <!-- Page Heading -->
       <a class="shower" href="#">Covid-19 Test report Generator </a><br>
    

<br>
	<div class="panel-body">
						<div class="box-header"  style="color: black; text-align: center;">
							<p style="padding: 5px; text-align: left;"><button id="print_button" title="Click to Print" type="button"
								onClick="window.print()" class="btn btn-flat fa fa-print">Print</button></p>
						</div>
<form action="pdf2.php" method="POST">
 <div class="col-lg-6"style="color:black;">
 
 <div class="card shadow mb-4"style="color:black;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                </div>
 							   
                                        </div>    
<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit"></td>
</tr>
 </form>  
 
             </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->			
		
					
	
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>  
		
		
     				
	
</div><br/>                
          
		
					
	
                       
                                        
                       
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
           <?php include_once('includes/footer2.php');?>
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

</html>
