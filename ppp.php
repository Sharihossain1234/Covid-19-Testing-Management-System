
<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    

 
	
    
    <link rel="stylesheet" href="covid-map.css">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sun Healthcare-Word Covid-19 Update</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

 <!-- Custom styles for this template-->
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
	 <style>
	 h2{
		 text-align:center; 
		 color:red;
	 }

	 footer {
	  background:#D84315;
  }

*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Nunito',sans-serif;
}
body{
 background: gray;
}

.statistic{
    width: auto;
}

.total_case_box{
    background-color:#00CED1;
  -webkit-box-shadow: 0px 0px 4px 2px #000000; 
   box-shadow: 0px 0px 4px 2px #000000;
   border : 2px groove 	#00CED1;
   border-radius: 10px;
    margin: 10px 15px;
    padding: 15px 0;
    text-align: center;
    text-transform: uppercase;
}
.total_case_box p{
    font-size: 3rem;
}
.Designed_by_box{
    background-color:#800000 ;
  -webkit-box-shadow: 0px 0px 3px 1px #FF0000; 
box-shadow: 0px 0px 3px 1px #FF0000;
   border-radius:100px;
   color:white;
    margin: 1px 1px;
    padding: 5px 0;
    text-align: center;
    text-transform: uppercase;
}
.Designed_by_box p{
    font-size: 1rem;
}
.wrapper .box_wrapper{
    display: flex;
    flex-wrap: nowrap;
    flex-direction: row;
}

.box_wrapper .box{
    background-color: #00CED1;
   -webkit-box-shadow: 0px 0px 4px 2px #000000; 
   box-shadow: 0px 0px 4px 2px #000000;
   border : 2px groove 	#00CED1;
  border-radius: 80px;
    margin: 10px 15px;
    width:25%;
    text-align: center;
    padding: 15px 0;
    border-radius: 8px;
    text-transform: uppercase;
}
.box_wrapper .box p{
    font-size: 2.5rem;
}


/*Styiling the table*/
table{-webkit-box-shadow: 0px 0px 10px 2px #000000; 
box-shadow: 0px 0px 10px 2px #000000;
    width: 100%;
    padding: 15px 10px;
    margin: 10px 0;
    text-align: center;
    border-spacing: 0;
}
tr:first-child{
    background-color: #37474f;
    color: #fafafa;
    text-transform: uppercase;
}
th{
    padding: 15px 0;
    border: none;
    border-spacing: 0;
    
}
tr:nth-child(even){
    background-color: #fafafa;
    
    
}
tr:nth-child(odd){
    background-color: #1E8449;
    color: #fafafa;
}
tr td{
    padding: 15px 0;
    
    
}
a.shower {
  cursor: pointer;
  position:relative ;
  display: inline-block;
  padding: 15px 150px;
  color:#04335a ;
  border-radius: 10px;
  text-transform: uppercase;
  letter-spacing: 4px;
  text-decoration: none;
  font-size: 24px;
  overflow: hidden;
  transition: 0.8s;
  color: black;
  background: #2196f3;
  box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 10px #2196f3;
  text-align:center;
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
             
 
	<a class="shower" href="#"> World Covid-19 Cases</a><br><br> <br> 
    <div class="wrapper">
        <div class="statistic">
          <div class="total_case_box">
	
                <h2>Total Cases in the world</h2>
                <p id="total_cases"></p>
            </div>


           <div class="box_wrapper">
                <div class="box">
                    <h2>Total Death</h2>
                    <p id="total_death"> </p>
                </div>

                <div class="box">
                    <h2>Total Recovery</h2>
                    <p id="total_recovered"> </p>
                </div>

                <div class="box">
                    <h2>New case</h2>
                    <p id="new_case"> </p>
                </div>

                <div class="box">
                    <h2>New Death</h2>
                    <p id="new_death"> </p>
                </div>
           </div> 
        
           <table id="countries_stat">
               <tr>
                   <th>Country</th>
                   <th>Cases</th>
                   <th>Deaths</th>
                   <th>serious critical</th>
                   <th>total recovered</th>
               </tr>
           </table>
        </div>
    </div>

    <script src='scripts/main.js'></script>
        
				

    <script>

//Decalring the Different Variable and Objects
let new_cases = document.getElementById("new_case");
let new_death = document.getElementById("new_death");
let total_death = document.getElementById("total_death");
let total_recovered = document.getElementById("total_recovered");
let total_cases = document.getElementById("total_cases");
let table = document.getElementById('countries_stat')
// Fetching the Data from the server

//Fetching the World Data
fetch("https://coronavirus-monitor.p.rapidapi.com/coronavirus/worldstat.php", {
    "method": "GET",
    "headers": {
        "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com",
        "x-rapidapi-key": "f93ff5e3afmsh1c47b09be99cc61p1ca087jsnbd673fdc9881"
    }
})
.then(response => response.json().then( data => {
    console.log(data);
    total_cases.innerHTML = data.total_cases;
    new_cases.innerHTML = data.new_cases;
    new_death.innerHTML = data.new_deaths;
    total_death.innerHTML = data.total_deaths;
    total_recovered.innerHTML = data.total_recovered;

})).catch(err => {
    console.log(err);
});

//Fetching The Case by Country Data
fetch("https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php", {
    "method": "GET",
    "headers": {
        "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com",
        "x-rapidapi-key": "f93ff5e3afmsh1c47b09be99cc61p1ca087jsnbd673fdc9881"
    }
})
.then(response => response.json().then(data =>{
    console.log(data)
    let countries_stat = data.countries_stat;
//Getting all the country statistic using a loop
    for(let i = 0; i<countries_stat.length;i++){
        console.log(countries_stat[i]);
        //we will start by inserting the new rows inside our table
        let row = table.insertRow(i+1);
        let country_name = row.insertCell(0);
        let cases = row.insertCell(1);
        let deaths = row.insertCell(2);
        let serious_critical = row.insertCell(3);
        let recovered_per_country = row.insertCell(4);
        country_name.innerHTML = countries_stat[i].country_name;
        cases.innerHTML = countries_stat[i].cases;
        deaths.innerHTML = countries_stat[i].deaths;
        serious_critical.innerHTML = countries_stat[i].serious_critical;
        recovered_per_country.innerHTML = countries_stat[i].total_recovered;

    }
}))
.catch(err => {
    console.log(err);
});
</script><br><br>                       

  



              

             
              <footer class="py-4 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white"style="color:green;">Copyright &copy; 2021 Sun Healthcare All Rights Reserved</p>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>
