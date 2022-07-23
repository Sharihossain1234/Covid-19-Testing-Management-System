<?php
error_reporting (0);
date_default_timezone_set('Asia/dhaka');
include("dbconnection.php");
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sun Healthcare-Pataient Symtoms List</title>

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

 <div class="wrapper">
            
            <?php

                
                ?>
                
                    <a class="shower" href="#">Pataient Symtoms List</a><br><br><br> 
                <h4></h4>
                
                  <button><a href="deleted.php"style="background:green;color:white;">Delete Pataient Data</a></button> <br><br>  
                    
                <?php
           
                $sql = "SELECT * FROM travelhistoryd ORDER BY id DESC";
                $result = mysqli_query($connection, $sql);
                
                while($row = mysqli_fetch_assoc($result)){
                    ?>
					
                    <div class="registereditem"style="background:#cbe6d9";>	
					<input type="checkbox" name="fruit" value="apple"> 
					    <b>Serial No: </b><b style="color:red;"><?php echo $row["id"] ?></b><br/></br>
                        <b>Date and Time : </b><b style="color:red;"> <?php echo $row["date"] . " | " . $row["time"]  ?></b><br><br>
                        <b>Name: </b><b style="color:red;"><?php echo $row["name"] ?></b><br/></br>
                        <b>Mobile Number : </b><b style="color:red;"><?php echo $row["phone"] ?></b><br></br>
						<b>Age: </b><b style="color:red;"><?php echo $row["phones"] ?></b><br></br>
						<b> Gender: </b><b style="color:red;"><?php echo $row["mobiles"] ?></b><br></br>
						<b> Have you been in contact with someone who has confirmed positive for COVID-19: </b><b style="color:red;"><?php echo $row["mobiled"] ?></b><br></br>
						<b> Have you Sore throat, chest pain or pressure, Loss of taste or smell: </b><b style="color:red;"><?php echo $row["mobile"] ?></b><br></br>
                        <b> Have you high fever, Dry cough, Weakness of breath : </b><b style="color:red;"><?php echo $row["china"] ?></b><br></br>
                        <b>Travelled out of country in the last 2 weeks :  </b><b style="color:red;"><?php echo $row["outsg"] ?></b><br></br>
                        <b>if yes, Country name : </b><b style="color:red;"><?php echo $row["outsgc"] ?></b><br></br>
                        <b>Body Temperature : </b><b style="color:red;"><?php echo $row["temperature"] ?></b><br></br>
                   
                    </div>
                    <?php
                }
                
                ?>
                    
                
           
                               
			
	
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div><br/><br/><br/><br/><br/><br/><br/><br/>
            <!-- Footer -->
       
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
<?php } ?>