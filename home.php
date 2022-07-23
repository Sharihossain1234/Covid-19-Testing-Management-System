<?php require_once "controllerUserData.php"; ?>
<?php 
error_reporting(0);
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sun Health Care |Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
	
	
	  @import url("https://fonts.googleapis.com/css?family=Amiri:400,700|Roboto:400,900&display=swap");
body {
  font-family: Roboto, 'Amiri', sans-serif;
  background-color: #edf2f7;
  min-height:100vh;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  font-size: 22px;
}
.stats {
  display: grid;
  grid-template-columns: repeat(5, minmax(200px, 1fr));
  grid-gap: 22px;
}
.stats li {
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.06);
  display: -webkit-box;
  display:flex ;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
}
.stats li span:first-child {
  margin-bottom: 16px;
  font-size: 16px;
}

#confirmed {
  color: #f56565;
}
#active {
  color: #ed8936;
}
#recovered {
  color: #48bb78;
}
#deaths {
  color: #a0aec0;
}
#county {
  color: #1d8348;
}




  
  
  h3{
	  text-align:center;
	  color:black;
  }
  h1{
	  color:green;
	  text-align:center;
  }
  h2{
	  color:green;
  }
  span{
	  color:white;
  }
  
footer {
	  background:#D84315;
  }
navbar navbar-expand-lg navbar {
	 background:#FF9966;
 }
marquee{
	background:#DE3163;
	color:White;
	 height: 40px;
     width: 100%;
}
h5{
	color:#6C3483 ;
}

a {
  text-decoration: none;
  text-align:center;
   color:white;
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
p{
	color:black;
}
button {
  font-family: 'Muli', sans-serif;
  -webkit-transition: 0.15s all ease-in-out;
  -o-transition: 0.15s all ease-in-out;
  transition: 0.15s all ease-in-out;
  cursor: pointer; }


.all {
  padding: 30px 0;
  margin: 0 auto;
  width: 90%;
  height: auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .buttons {
  width: 80%;
  margin: 0 auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }

.one {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }

.circle {
  width: 100px;
  height: 100px;
  border: none;
  border-radius: 100px;
  background: green;
  color: #fff;
  font-size: 16px; }

.round {
  background:#E67E22 ;
  border-radius: 30px;
  border: none;
  color: #fff;
  font-size: 16px;
  padding: 15px 30px;
  text-decoration: none; }

.curve {
  background:#5DADE2  ;
  color: #fff;
  border-radius: 6px;
  border: none;
  font-size: 16px;
  padding: 15px 30px;
  text-decoration: none; }

.square {
  background:#E74C3C;
  color: #fff;
  border: none;
  border-radius: 0px;
  font-size: 16px;
  padding: 15px 30px;
  text-decoration: none; }
  
  

.dropdown-content {
  display: none;
  position: absolute;
  background-color:#f9f9f9 ;
 min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 20px;
  z-index: 1; 
}

.dropdown:hover .dropdown-content {
  display: block;
}
navbar{
	color:white;
}











@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

* {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}



.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: inherit;
  font-weight: 700;
  margin: 0;
  color:green ;
}

.text-muted {
  color: #8898aa !important;
}

.text-uppercase {
  text-transform: uppercase !important;
  color: #8898aa !important;
  font-family: sans-serif;
  font-size: 0.9rem;
}

.rounded-circle {
  border-radius: 50% !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

/* style the cards */

.container {
  width: 600px;
  height: auto;
  top: 50%;
  
  border-radius: 10px;
  padding: 10px;
}

/*
.container:hover {
  transition: 0.5s;
  color: #255784;
  background: #2196f3;
  box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 10px #2196f3;
}*/

h1.title {
  font-size: 1.6rem;
  font-weight: 700;
  text-align: center;
  margin: 1rem 0;
  color: #eee;
}

.color {
  max-width: 100%;
  flex-grow: 1;
  flex-basis: 0;
}

a.shower {
  cursor: pointer;
  position: relative;
  display: inline-block;
  padding: 15px 30px;
  color: #04335a;
  border-radius: 10px;
  text-transform: uppercase;
  letter-spacing: 4px;
  text-decoration: none;
  font-size: 24px;
  overflow: hidden;
  transition: 0.5s;
  color: black;
  background: #2196f3;
  box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 10px #2196f3;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  border: 1px solid rgba(0, 0, 0, 0.05);
  background-color: #fff;
  background-clip: border-box;
  border: 0;
  box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15);
  border-radius: 15px;
  margin: 10px;
  transition: 0.5s;
}

.card:hover {
  transition: 0.5s;
  color: #090e3a;
  background: #2196f3;
  transform: translateY(-2px) scale(1.1, 1.1);
  box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 10px #2196f3;
}


.card-body {
  min-height: 1.5px;
  min-width: 1.5px;
  padding: 1.4rem;
  display: flex;
  padding-right: 1rem 1.5rem;
  border-radius: 15px;
}

.card-body .h2 {
  font-size: 2.7rem;
}

.icon {
  width: 4rem;
  height: 4rem;
  max-width: 100%;
  flex: 0 0 auto;
}

.icon-shape {
  display: inline-flex;
  padding: 12px;
  text-align: center;
  border-radius: 50%; /* makes icons circular*/
  align-items: center;
  justify-content: center;
}

.icon-shape i,
.icon-shape svg {
  font-size: 2rem;
}


.bg-gradient-red {
  background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
}

.bg-gradient-blue {
  background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
}

.bg-gradient-green {
  background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
}

.bg-gradient-orange {
  background: linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;
}

p.info {
  text-align: center;
  font-size: 14px;

  a {
    text-decoration: none;
  }
}



	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #6665ee;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>
    

<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg- fixed-top"style="background: #FF6699 	;" id="mainNav">
    <div class="container">
	 <a href="index.php"> <img src="img/logo.jpeg" alt="" width="65" height="75">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"style="color:green;font-family:Times New Roman;"><big><b><i> Sun Health Care</i></b></big></a>
	 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">		
		          <li class="nav-item active">
				
             <a class="nav-link js-scroll-trigger"   href="index.php"  "fas fa-fw fa-home"></a>
          </li>
		  <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a></br>
			<li>
<div class="navbar">
  <div class="dropdown">
   <a class="dropbtn"style="color:white";>Testing Info</a>
     <i class="fa fa-caret-down"></i>
    
    <div class="dropdown-content">
      <a href="new-user-testing.php">Registration</a><br/><br>
      <a href="registered-user-testing.php">AlreadyRegistered</a><br/><br>
	  <a href="patient-search-report.php">Test Report</a><br><br>
	  <a href="question.php">Self Test</a>
      <a href="#"></a>
    </div>
  </div>
</div>
</li>			


		 
		  
           <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="Speech Assistant.php"target="blank">Application Assistant</a>
          </li>

      	  
		  
<li>
<div class="navbar">
  <div class="dropdown">
   <a class="dropbtn"style="color:white";>Emergency info</a>
     <i class="fa fa-caret-down"></i>
    
    <div class="dropdown-content">
      <a href="Embulance.php">Ambulance info </a><br/><br/>
      <a href="oxizen.php">Oxygen info</a><br/><br/>
	  <a href="Bangladesh.php">BD Covid-19 Info</a><br/><br/>
	  <a href="nnn.php">World Covid-19 Info</a><br><br>
	  <a href="Both.php">Booth List</a><br><br>
	  <a href="prayment.php">Payment</a><br><br> 
	  <a href="nbnb.php">protect your self</a>
	  
  </div>
</div>
</li>
            
		  		     <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="live-test-updates2.php">Districtwise test</a>
          </li>
		     <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="asked.php">F.A.Q</a>
          </li>
		     <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="contact.php">Contact us</a>
          </li>
            	 
           

        </ul>
      </div>
    </div>
  </nav>

  
 <h1><b>Sun Health Care  <img src="img/Screenshot (8).png" alt="" width="1400" height="550"></b></h1></hr>
    <div class="container text-center"><br/>
	  <img src="img/logo.jpeg" alt="" width="100" height="80"style="color:black;">
      <h1><b><i>Sun Health Care </i></b></h1></hr>
      <p class="lead"style="color:red;"><b>Stay at home, stay safe</b></p>
    </div>
  </header>
  <br/><br/>

  <h5><b></b></h5>
 <marquee><big>


Stay at home, stay safe. Prevent Covid 19: Wash your hands often with soap, wear a mask, avoid contact with sick people, always avoid coughing or sneezing. Contact for any inquiries; 01750424829,01883689443. (Thanks you)
</big> </marquee><br/><br/><br/><br/>
     <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4"><br/>
                        <h1 class="h3 mb-0 text-gray-800"style="color:red;"><b> Sun Health Care Dashboard for Covid-19 test   </b></h1>
						<a href="bwdates-report-ds.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa- fa-sm text-white-50"></i></a>
                               
                    </div>

                    <!-- Content Row -->
                    <div class="row">

<?php 

//Total tests
$query=mysqli_query($con,"select id from tbltestrecord");
$totaltest=mysqli_num_rows($query);
//Assigned tests
$query1=mysqli_query($con,"select id from tbltestrecord where ReportStatus='Assigned'");
$totalassigned=mysqli_num_rows($query1);
//On the way for sample collection
$query2=mysqli_query($con,"select id from tbltestrecord where ReportStatus='On the Way for Collection'");
$totalontheway=mysqli_num_rows($query2);
//Sample Collected
$query3=mysqli_query($con,"select id from tbltestrecord where ReportStatus='Sample Collected'");
$totalsamplecollected=mysqli_num_rows($query3);
//Sent for lab
$query4=mysqli_query($con,"select id from tbltestrecord where ReportStatus='Sent to Lab'");
$totalsenttolab=mysqli_num_rows($query4);

//Report Delivered
$query5=mysqli_query($con,"select id from tbltestrecord where ReportStatus='Delivered'");
$totaldelivered=mysqli_num_rows($query5);

//Totall Registered Patients 
$query6=mysqli_query($con,"select id from tblpatients");
$totalpatients=mysqli_num_rows($query6); 

//Totall Registered Phlebotomist 
$query7=mysqli_query($con,"select id from tblphlebotomist");
$totalphlebotomist=mysqli_num_rows($query7);
?>


                        <!-- Total Tests-->
                        <div class="col-xl-3 col-md-6 mb-4"style="color:black;">
                            <div class="card border-left-primary shadow h-100 py-2"style="color:black;">                          
                                <div class="card-body"style="color:black;">
                                    <div class="row no-gutters align-items-center"style="color:black;">
                                        <div class="col mr-2"style="color:black;">


                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"style="color:black;">
                                             <big>Total test </big></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totaltest;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-virus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

                  

                        <!-- On the way for sample collection-->
                       

                        <!-- Sample Collected -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                             
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                             
                                           <big>Total samples have been collected</big>
                                          </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalsamplecollected;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-prescription-bottle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>

<!-- Sent to Lab -->
                       
    <!-- Report Delivered-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><b><big>Total reports have been distributed</big></b>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $totaldelivered;?></div>
                                                </div>
                                                <div class="col">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

 <!-- Total Registered Patients-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                             
                                            <big>Total registered patients   </big></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalpatients;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br/>
<br/><br/><br/><br/>
            <!-- Total Registered Phlebotomist-->
           

                    <!-- Content Row --><br/><br/><br/><br/>



<div class="all">
            <div class="buttons">
                <div class="one">
                    <a href="new-user-testing.php"><button class="curve">Click for registration</button></a>
                </div>
                <div class="one">
                    <a href="patient-search-report.php"><button class="square">Click for Test report </button></a>
                </div><br/>
                <div class="one">
                    <a href="registered-user-testing.php"><button class="curve">Click for registered users </button></a>
                </div>
                <div class="one">
                    <a href="live-test-updates2.php"><button class="square">Click to view district-wise Test </button></a>
                </div>
				
				
            </div><br><br><br>
        </div><br><br><br>
		
		
     
 

             

            <!-- Footer -->
       
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
          
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
  <section id="about">
    <div class="container"style="color:black;">
      <div class="row"style="color:black;">
        <div class="col-lg-8 mx-auto"style="color:black;">
          <h2>About Covid-19</h2>
          <p class="lead">Coronavirus disease (Covid-19) is an infectious disease caused by the newly discovered coronavirus. Most people infected with Covid-19 virus recover from mild to moderate, respiratory illnesses and without the need for special treatment. Older people and patients with cardiovascular disease have problems.</p>

          <p class="lead">

When an infected person coughs or sneezes, the Covid-19 virus initially spreads from runny nose to runny nose, so it is important to practice your breathing etiquette.</p>
         
        </div>
      </div>
    </div>
  </section>
  
   <a class="shower" > Bangladesh Covid-19 Cases</a><br><br>
   <div>
     
    <ul class="stats">
	<li style="background:lightblue;">
        <span style="color:black;">Country</span>
        <span id="county">Bangladesh</span>
	
      </li>
      <li style="background:lightblue;">
        <span style="color:black;">Total Confirmed Cases</span>
        <span id="confirmed">-</span>
	 <i class="fas fa-users"style="color:blue;"></i>
      </li>
	  <li style="background:lightblue;">
            <span style="color:black;" >Total Active Cases</span>
        <span id="active"style="color:orange;">-</span>
		 <i class="fas fa-bell"style="color:orange;"></i>
      </li>
	    <li style="background:lightblue;">
            <span style="color:black;">Total Recovered Cases</span>
        <span id="recovered"style="color:green;">-</span>
		 <i class="fas fa-child"style="color:green;"></i>
      </li>


    
      <li style="background:lightblue;" >
        <span style="color:black;">Total  Deaths  </span>
        <span id="deaths"style="color:red;">-</span>
		<i class="fas fa-procedures"style="color:red;"></i>
      </li >
   
    </ul>
</div>    

</html>
<script>

fetch(`https://covid19.mathdro.id/api/countries/bangladesh`)
  .then(res => res.json())
  .then(({ confirmed, recovered, deaths }) => {
    document.getElementById("confirmed").innerText = val(confirmed);
       document.getElementById("recovered").innerText = val(recovered);
    document.getElementById("deaths").innerText = val(deaths);
    document.getElementById("active").innerText =
      val(confirmed) - val(recovered) - val(deaths);
  })
  .catch(err => console.log(err));

const val = item => item.value









</script>
<br><br>
       
  	<img src="img/Screenshot (20).png" alt="Girl in a jacket" width="1400" height="500"><br/><br/><br/><br/>
	<h3><i><b>Govt. important Link for Covid-19</b></i></h3>
	<div class="all">
            <div class="buttons">
                <div class="one">
                    <a href="https://surokkha.gov.bd/enroll"target="_blank"><button class="curve">BD Sorokha for Vaccine Registration</button></a>
                </div>
                <div class="one">
                    <a href="https://corona.gov.bd/"target="_blank"><button class="square">Corona Virus Info for BD corona Information </button></a>
                </div><br/>
                
				
				
            </div>
        </div>
  <section id="services" class="bg-light">
    <div class="container"style="color:black;">
      <div class="row"style="color:black;">
        <div class="col-lg-8 mx-auto"style="color:black;">

          <h2>Symptoms of Covid 19</h2>

          <hr />
<p><strong>High fever 2-14 days!</strong><br />


Reported illness ranges from mild symptoms to serious illness </p>
             <hr />
<p><strong>Dry cough 2-14 days!</strong><br />


Reported illness ranges from mild symptoms to serious illness </p>
          <hr />
<p><strong>Weakness of breath!</strong><br />


Reported illness ranges from mild symptoms to serious illnes </p><hr>

<p><strong>Loss of test or smell!</strong><br />


Reported illness ranges from mild symptoms to serious illnes </p>
        </div>
      </div>
    </div>
  </section>
 		
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto"style="color:black;">
		
          <h2>Prevention</h2>
  <ul>
          		  <li>Wash your hands often with soap.</li>                     
            <li>Wear a mask.</li>
            <li>Avoid contact with sick people. </li>
            <li>Always avoid coughing or sneezing.  </li>
          </ul>
        </div>
      </div>
    </div>	
  </section>
 


       

  <!-- Footer -->
  <footer class="py-5 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white">Copyright &copy;2021 Sun Healthcare All Rights Reserved </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
  
   <!--open--->
 

   

    
</body>
</html>