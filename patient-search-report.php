<?php session_start();
//DB conncetion
include_once('includes/config.php');
error_reporting(0);
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

    <title>Sun Healthcare | Test Report</title>

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
h1{
	text-align:center;
	
	color:red;
	
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
  font-size: 30px;
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
    <a class="shower" href="#">Test Report</a><br><br>
                    <!-- Page Heading -->
					  <h3><u> Instractions</u></h3></br>
					  <h4>Dear,Patient this tools mainly used for serching Test reports</h4>
					  <ul>
					  <li>[Registered Users]: If you want to veaw All test report please Search by Govt.Issued Id Number.</li><br/>
					  <li>[Registered Users]: If you want to veaw Spesific test report please Search by Spesific Order Number.</li><br/>
					  <li>[New Users]: Search by any one.</li><br/>
					  <li>If you want to  Voice search please Remove space gap.</li>
					  </ul></br></br>
                    <h2 class="h3 mb-4 text-gray-800"style="color:black;">Search Report</h2>

<form method="post" action="patient-report.php">
  <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                          
                                <div class="card-body"style="background:lightblue;">
                       <div class="form-group">
			
                                             <label>Search By Govt.Issued Id Number or Order Number</label>
                                            <input type="text" class="form-control" id="searchdata" name="searchdata" required="true" placeholder="Enter Govt.Issued Id Number or Order Number">
											<img src="microphone-3404243_1280.png" width="40px" onclick="startDictation('searchdata')">
                                        </div>


                 <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block"href="http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/login-user.php" name="search" value="Search">                           
                             </div>

                                    </div>
                                </div>
                            </div>
                        </div>
</form><br/><br/>


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
