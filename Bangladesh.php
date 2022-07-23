<?php

error_reporting(0);
include_once('includes/config.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
 <meta charset="UTF-8" />
    <title>Sun Healthcare-Bangladesh Covid-19 Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />

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






 	 footer {
	  background:#D84315;
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
  color: #32325f;
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


h1{
	text-align:center;
}

*{border:0px; margin:0px}
.ractangle{margin:0 auto; width:300px; height:150px; background:green; margin-top:60px; position:relative;}
.circle{height:60px; width:70px; border-radius:500px; background:red; margin-left:125px; margin-top:43px; position:absolute}

	
	 </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include_once('includes/sidebar.php');error_reporting(0)?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column"style="color:black;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
<?php include_once('includes/topbar.php');error_reporting(0)?>
 <a class="shower" href="#">Bangladesh Covid-19 Cases</a><br><br>

                <!-- End of Topbar -->
<h1>Bangladesh Covid-19 of Last 24 hourse update</h1>				
<div class="ractangle">
<div class="circle">
</div>
</div><br>
   <div dir="ltr">
  <header>
  </header>


  <div>
     
    <ul class="stats">
	<li style="background:lightblue;">
        <span>Country</span>
        <span id="county">Bangladesh</span>
	
      </li>
      <li style="background:lightblue;">
        <span>Total Confirmed Cases</span>
        <span id="confirmed">-</span>
	 <i class="fas fa-users"style="color:blue;"></i>
      </li>
	  <li style="background:lightblue;">
            <span>Total Active Cases</span>
        <span id="active"style="color:orange;">-</span>
		 <i class="fas fa-bell"style="color:orange;"></i>
      </li>
	    <li style="background:lightblue;">
            <span>Total Recovered Cases</span>
        <span id="recovered"style="color:green;">-</span>
		 <i class="fas fa-child"style="color:green;"></i>
      </li>


    
      <li style="background:lightblue;" >
        <span>Total  Deaths  </span>
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
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


              

             
          <footer class="py-4 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white"style="color:green;">Copyright &copy;2021Sun Healthcare All Rights Reserved </p>
    </div>
    <!-- /.container -->
  </footer>

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
</body>

</html>
