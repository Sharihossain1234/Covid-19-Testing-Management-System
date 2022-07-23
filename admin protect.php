<?php
error_reporting(0);
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
//Code for record deletion
if($_GET['action']=='delete'){    
$tid=intval($_GET['tid']);    
$query=mysqli_query($con, "delete from tbltestrecord  where id='$id'");
echo '<script>alert("Record deleted")</script>';
  echo "<script>window.location.href='all-test.php'</script>";
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



    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


 <!-- Custom styles for this template-->
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
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

    <title>Sun Healthcare | Ambulance List</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet"> 
<style type="text/css">

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
  color: black;
  background: #2196f3;
  box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 10px #2196f3;
}

  	 footer {
	  background:#D84315;
  } 
   body{
  overflow: auto;
  background: linear-gradient(to bottom, #e2e2e2, #ffffff);
  font-family:Tahoma;
  font-size:15px;
}

/* Headers Style */
h1{
  text-align:center;
  font-size:5em;
  color:#fff;
  text-shadow: 0px 1px 2px #000;
}

h2{
  text-align:left;
  font-size:3em;
  color:#007E30;
  margin-left:120px;
  margin-bottom:-5px;
  
}



/* Image top of the menu */
.TopImage{
  position:relative;
  left:110px;
  z-index:2;
  width:300px;
  margin-bottom:-2px;
}

/* Text boxes style */
.messagebox{
  width:80%;
  height:200px;
  background-color:white;
  position:relative;
  left:120px;
  line-height: 1.5em;
  padding:25px;
  margin-bottom: 50px;
  border-left:5px solid #007E30;
}

/* Text boxes style in hover */
.messagebox:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

/* Default shadow style */
.shadow{
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

/* CoronaVirus Animation
Default speed is: 10s
MoveUpDown is a keyFrames that define the position*/
.animatediv{
  animation: MoveUpDown 10s linear infinite;
  position: absolute;
  right: 30px;
  }
/* position of corona animation */
@keyframes MoveUpDown {
  0%, 100% {
    top: 150px;
  }
  50% {
    top: 250px;
  }
}

/*Main Menu Style*/
	ul.menu {
		position:absolute;
    left:320px;
		background:#fff;
		width:300px;
    z-index:3;
		margin:0px;
		padding:0px;
		list-style: none;
		overflow:hidden;
	}

.menu li a {
		width:300px;
		padding-left:15px;
		height:40px;
		line-height:40px;
		display:block;
		overflow:hidden;
		position:relative;
		text-decoration:none;
		font-size:15px;
		color:#686868;			
	}

	.menu li a:hover {
		background:#efefef;
    border-left:5px solid #007E30;
	}

/*Table Container Style*/
#TblCon{
  background:#efefef;
}

/*Table Style*/
.Tbl{
width:70%;
margin-left: auto;
margin-right: auto;
text-align:center;
font-size:10px;  
}

/* Final Tite (Wash Your Hands) */
#WashHandsTxt{
   color:lightgrey;
   font-size:8em;
   text-align:center;
}

/*.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.*/
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

    
        
  	
  <a class="shower"style="color:black;">How to Protect Yourself to Covid-19 </a><br><br> <br>
  
 
  <!-- Corona animation container -->
  <div class="animatediv"> 
  <img src="https://atheistiran.com/wp-content/uploads/2020/03/corona-virus.png">
    </div>
  
  <!-- Image on top of the Main menu container -->
  <img src="https://atheistiran.com/wp-content/uploads/2020/03/people-mask.png" class="TopImage">
  
  <!-- Main Menu Start -->
  <ul class="menu shadow">
    
		<li style="color:black;">
      <a href="#CleanYourHand">Clean your hands often</a>
    </li>
    
		<li>
      <a href="#AvoidCloseContact">Avoid close contact</a>
    </li>
        
		<li>
      <a href="#StayHome">Stay home if you’re sick</a>
    </li>
    
		<li>
      <a href="#CoverCoughs">Cover coughs and sneezes</a>
   </li>
    
		<li>
     <a href="#WearAFacemask">Wear a facemask if you are sick</a>
    </li>
    
		<li>
      <a href="#CleanAndDisinfect">Clean and Disinfect </a>
    </li>
	</ul>
  <!-- Main Menu End -->
  
  <!-- Free Space container  -->  
  <div style="margin-top:40%"></div>
  
  <!-- Message Boxes  -->  
   <h2>Clean Your Hand</h2>
  <div class="messagebox shadow" id="CleanYourHand">
    <ul>
<li style="color:black;"><strong>Wash your hands</strong> often with soap and water for at least 20 seconds especially after you have been in a public place, or after blowing your nose, coughing, or sneezing.</li>
      <br>
<li style="color:black;">If soap and water are not readily available, <strong>use a hand sanitizer that contains at least 60% alcohol</strong>. Cover all surfaces of your hands and rub them together until they feel dry.</li>
      <br>
<li style="color:black;"><strong>Avoid touching</strong> <strong>your eyes, nose, and mouth</strong> with unwashed hands.
 </li>
</ul>
  </div>
  </div>
  
<h2>Avoid Close Contact</h2>
  <div class="messagebox shadow" id="AvoidCloseContact">
    
    <ul>
<li style="color:black;"><strong>Avoid close contact</strong> with people who are sick</li>
<li style="color:black;">Put <strong>distance between yourself and other</strong> <strong>people</strong> if COVID-19 is spreading in your community. This is especially important for people who are at higher risk of getting very sick.</li>
</ul>
    </div>
      
 

<h2>Stay Home</h2>
      <div class="messagebox shadow" id="StayHome">
        
        <li style="color:black;"><strong>Stay home</strong> if you are sick, except to get medical care. Learn what to do if you are sick.</li>
  </div>
   


<h2 >Cover Coughs</h2>
 <div class="messagebox shadow" id="CoverCoughs">
        
        <ul>
<li style="color:black;"><strong>Cover your mouth and nose</strong> with a tissue when you cough or sneeze or use the inside of your elbow.</li>
<li style="color:black;"><strong>Throw used tissues</strong> in the trash.</li>
<li style="color:black;">Immediately <strong>wash your hands</strong> with soap and water for at least 20 seconds. If soap and water are not readily available, clean your hands with a hand sanitizer that contains at least 60% alcohol.</li>
</ul>
        
  </div>


      <h2>Wear A Facemask</h2>
      <div class="messagebox shadow" id="WearAFacemask">
        
        <ul>
<li style="color:black;" ><strong>If you are sick:</strong> You should wear a facemask when you are around other people (e.g., sharing a room or vehicle) and before you enter a healthcare provider’s office. If you are not able to wear a facemask (for example, because it causes trouble breathing), then you should do your best to cover your coughs and sneezes, and people who are caring for you should wear a facemask if they enter your room.</li>
          
          <li style="color:black;"><strong>If you are NOT sick: </strong>You do not need to wear a facemask unless you are caring for someone who is sick (and they are not able to wear a facemask). Facemasks may be in short supply and they should be saved for caregivers.</li>
          
</ul>
  </div>
      

 <h2>Clean And Disinfect</h2>

      <div class="messagebox shadow" id="CleanAndDisinfect">
        
        
        <ul>
<li style="color:black;"><strong>Clean AND disinfect frequently touched surfaces daily</strong>. This includes tables, doorknobs, light switches, countertops, handles, desks, phones, keyboards, toilets, faucets, and sinks.</li>
<li style="color:black;"><strong>If surfaces are dirty, clean them:</strong> Use detergent or soap and water prior to disinfection.</li>
</ul>
</div>

			
	
                  
            <!-- Footer -->
          <footer class="py-4 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white"style="color:green;">Copyright &copy; 2021 Sun Healthcare All Rights Reserved</p>
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