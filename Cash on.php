<?php 
error_reporting(0);
include_once('includes/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>

  <style>

  </style>

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

    <title>Sun Healthcare-Prayment</title>

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
h1{
	text-align:center;
	color:red;
}

h3{
	text-align:center;
}
h2{
	color:red;
}
ul{
	color:red;
}
h4{
	text-align:center;
	color:green;
}

		
	</style>
</head>
<body id="page-top" >
    <!-- Page Wrapper -->
    <div id="wrapper">

<?php include_once('includes/sidebar.php');?>

  <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
          <?php include_once('includes/topbar.php');?>
<h1>Cash On Sample Collection</ h1><hr><br><br>

<h4>Dear Patient,This Payment system mainly used after sample collection on cash payment. </h4><br>

<h4></h4><br><br>


	

    </div><br/></br><br/></br><br/></br>
    <!-- /.container -->
	
       <footer class="py-4 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white">Copyright &copy;2021 Sun Healthcare All Rights Reserved </p>
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
