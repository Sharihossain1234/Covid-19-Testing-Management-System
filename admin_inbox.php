<?php
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

?>
        	
<?php 
$sql="SELECT * FROM messages WHERE STATUS=1";
$result=$con->query($sql);
$n=$result->num_rows;
if($n!=0)
{
	$mes='<span class="badge pull-right">'.$n.' Unread</span>';
}
else
{
	$mes="";
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

    <title>Sun Healthcare | Inbox</title>

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


    

    <a class="shower" href="#">Inbox </a><br>         
	                 
<?php error_reporting(0); ?>
 <div class="container" style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-4">
		
			
		</div>
		<div class="col-sm-9" >
		
			<h3 class="text-primary"style="color:orange;"><i class="fa fa-envelope"style="color:orange;"></i> Inbox <?php echo $mes;?></a></h3><hr>    
			 
			
<?php 
$sql="SELECT * FROM messages ORDER BY ID DESC";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<ul class="list-group">';
		while($row=$result->fetch_assoc())
		{
			if($row['STATUS']=='1')
			{
				echo '<li class="list-group-item active">
						<span>
							<b><i class="fa fa-envelope-square"> </i>      	'.$row["NAME"].'</b>: '.substr($row["MESSAGE"],0,50).'....
						</span>
						<span   class="pull-right">
							<i>'.$row['LOGS'].'</i>&nbsp;
							<a href="view_mess.php?id='.$row['ID'].'" class="btn btn-primary  btn-xs">View</a>
							<a href="admin_mess_del.php?id='.$row['ID'].'"  class="btn btn-danger btn-xs">Delete</a>
						</span>

					</li>';
			}
			else
			{
				echo '<li class="list-group-item">
						<span>
							<b><i class="fa fa-envelope-square
"></i> '.$row["NAME"].'</b>: '.substr($row["MESSAGE"],0,50).'....
						</span>
						<span   class="pull-right">
							<i>'.$row['LOGS'].'</i>&nbsp;
							<a href="view_mess.php?id='.$row['ID'].'" class="btn btn-primary btn-xs">View</a>
							<a href="admin_mess_del.php?id='.$row['ID'].'"  class="btn btn-danger btn-xs">Delete</a>
						</span>
				</li>';
			}
			echo"<br>";
		}
	echo'</ul>';
}
else
{
	echo "<div class='alert alert-info mess'>No More Messages</div>";
}

			?>
		
		</div>
	</div>				
</div>				
					
	
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>                        
                                        
                       
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