<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');


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
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       Covid tracker
    </title>
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="./static/css/grid.css">
    <link rel="stylesheet" href="./static/css/app.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid-19 Testing Management System | New User Testing</title>

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
h1{
	color:red;
}
  
footer {
	  background:#D84315;
	  text-align:center;
  }
  a{
  
  }
  h1{
  text-align:center;
  color:red;
  }
 
</style>
  <script>
function mobileAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'mobnumber='+$("#mobilenumber").val(),
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

    <!-- top nav -->
    <div class="nav-wrapper">
        <div class="container">
         <div class="nav">
                <a href="" class="logo">
                  
                </a>
                <div class="darkmode-switch" id="darkmode-switch">
                    <span>
                      <i class="bx bxs-moon"></i>
                       <i class="bx bxs-sun"></i>   
                    </span>
                </div>
            </div>   
        </div>
    </div>



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

    <!-- end top nav -->
	<h1>World Covid-19 Updatecccc</h1>

    <!-- main content -->
    <div class="content">
        <div class="container">
            <!-- country select -->
            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box">
                        <div class="country-select" id="country-select">
                            <div class="country-select-toggle" id="country-select-toggle">
                                <span>
                                    Global
                                </span>
                                <i class="bx bx-chevron-down"></i>
                            </div>
                            <div class="country-select-list" id="country-select-list">
                                <input type="text" placeholder="Search country name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end country select -->

            <!-- tracking information -->
            <div class="row">
                <!-- left content -->
                <div class="col-8 col-md-12 col-sm-12">
                    <div class="row">
                        <!-- counter -->
                        <div class="col-4 col-md-4 col-sm-12">
                            <div class="box box-hover">
                                <div class="count count-confirmed">
                                    <div class="count-icon">
                                        <i class="bx bxs-virus"></i>
                                    </div>
                                    <div class="count-info">
                                        <h5 id="confirmed-total">123,456,789</h5>
                                        <span>confirmed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- counter -->
                        <!-- counter -->
                        <div class="col-4 col-md-4 col-sm-12">
                            <div class="box box-hover">
                                <div class="count count-recovered">
                                    <div class="count-icon">
                                        <i class="bx bxs-smile"></i>
                                    </div>
                                    <div class="count-info">
                                        <h5 id="recovered-total">123,456,789</h5>
                                        <span>recovered</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- counter -->
                        <!-- counter -->
                        <div class="col-4 col-md-4 col-sm-12">
                            <div class="box box-hover">
                                <div class="count count-death">
                                    <div class="count-icon">
                                        <i class="bx bxs-sad"></i>
                                    </div>
                                    <div class="count-info">
                                        <h5 id="death-total">123,456,789</h5>
                                        <span>deaths</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- counter -->

                        <!-- all time chart -->
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    all times
                                </div>
                                <div class="box-body">
                                    <div id="all-time-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end all time chart -->

                        <!-- embed video -->
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="box">
                                <div class="box-header">
                                    what is covid-19
                                </div>
                                <div class="box-body">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/OZcRD9fV7jo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- end embed video -->

                        <!-- embed video -->
                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="box">
                                <div class="box-header">
                                    how to protect yourself
                                </div>
                                <div class="box-body">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/1APwq1df6Mw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- end embed video -->
                    </div>
                </div>
                <!-- end left content -->

                <!-- right content -->
                <div class="col-4 col-md-12 col-sm-12">
                    <!-- 30 days chart -->
                    <div class="box">
                        <div class="box-header">
                            last 30 days
                        </div>
                        <div class="box-body">
                            <div id="days-chart"></div>
                        </div>
                    </div>
                    <!-- end 30 days chart -->

                    <!-- recovery rate chart -->
                    <div class="box">
                        <div class="box-header">
                            recovery rate
                        </div>
                        <div class="box-body">
                            <div id="recover-rate-chart"></div>
                        </div>
                    </div>
                    <!-- end recovery rate chart -->

                    <!-- top country affected -->
                    <div class="box">
                        <div class="box-header">
                            top countries affected
                        </div>
                        <div class="box-body">
                            <table class="table-countries" id="table-countries">
                                <thead>
                                    <tr>
                                        <th>
                                            Country
                                        </th>
                                        <th>Confirmed</th>
                                        <th>Recovered</th>
                                        <th>Deaths</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end top country affected -->
                </div>
                <!-- end right content -->
            </div>
            <!-- end tracking information -->
        </div>
    </div>
    <!-- end main content 
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
	   <!-- loader -->
    <div class="loader">
        <i class="bx bxs-virus bx-spin"></i>
    </div>
   
    <!-- end loader -->

    <!-- apexchart -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- JS -->
    <script src="./static/js/fetchApi.js"></script>
    <script src="./static/js/covidApi.js"></script>
    <script src="./static/js/app.js"></script>

</body>


</html>