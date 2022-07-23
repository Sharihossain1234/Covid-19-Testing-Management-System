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

    <title>Sun Healthcare-Application Assistant</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


 <!-- Custom styles for this template-->
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">

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
#container{
text-align:center;

}
button{
  height:0px;
  width: 0%;
}
p{
text-align:center;
color:red;
}
$primary: #FF3D7F;
$secondary: #3FB8AF;
$size: 150px;


#speech.btn {
	border: none;
  padding: 0;
  border-radius: 100%;
  width: $size;
  height: $size;
  font-size: 1.5em;
  color:#fff;
  padding: 0;
  margin: 0;
  background: $primary;
	position: relative;
  display: inline-block;
    line-height: 50px;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
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


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Assistant</title>
    <style>
        body 
{
background:black;
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

  
	  
          
        

  <a class="shower" href="#">Application Assistant </a><br><br><br>
	<p><b><big>[ Please Refresh for deleting command ]</big></b></p>
	<p><b><big>[ Click microphone icon for command ]</big></b></p><br/><br/>
	<div id="container">
	
    <p class="talk"><img src="microphone-3404243_1280.png" width="120px"  ></i></p>
    <h3 class="content"></h3>
	
  
    <script>
        // The JavaScript Part Starts
        const btn = document.querySelector('.talk');
        const content = document.querySelector('.content');

     
        const YouTube = [
            'opening your page sir'
     ];
	 
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition =  new SpeechRecognition();

        recognition.onstart = function(){
            console.log('How Can I Help You ?')
        }
        recognition.onresult = function (event) {
            const current = event.resultIndex;

            const transcript = event.results[current][0].transcript;
            content.textContent = transcript;
            readOutLoud(transcript);

        };

        btn.addEventListener('click', () =>{
            recognition.start();
        });


        function readOutLoud(message){
            const speech = new SpeechSynthesisUtterance();

            speech.text = 'I am not able to understand ,sir please try again';



            if(message.includes('YouTube')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('https://www.youtube.com/')
                }
				
				      if(message.includes('admin dashboard')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/dashboard.php')
                }
				      if(message.includes('search report')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/patient-search-report.php')
                }
					      if(message.includes('symptom test')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/question.php')
                }
				
					      if(message.includes('new test request')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/new-test.php')
                }
					      if(message.includes('district wise test')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/live-test-updates.php')
                }
				      if(message.includes('on the way for sample collection')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/ontheway-samplecollection-test.php')
                }
								      if(message.includes('Bangladesh covid-19 info')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/admin%20bangladesh.php')
                }
									if(message.includes('world covid-19 info')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/adminworld.php')
                }
								if(message.includes('testing')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/new-user-testing.php')
                }
									if(message.includes('inbox')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/admin_inbox.php')
                }
										if(message.includes('report generator')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/Generator.php')
                }
									if(message.includes('application assistant')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/Speech%20Assistant.html')
                }
								if(message.includes('emergency ambulance')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/Embulance.php')
                }
								if(message.includes('emergency oxygen')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/oxizen.php')
                }
								if(message.includes('sample sent to lab')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/samplesent-lab-test.php')
				
                }
				
								if(message.includes('sample collected')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/sample-collected-test.php')
                }
				
			
			
								if(message.includes('report deliver')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/reportdelivered-test.php')
				
                }
				
							if(message.includes('ambulance list')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/admin%20ambulance.php')
				
                }
								if(message.includes('all test')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/all-test.php')
				
                }
							if(message.includes('frequently asked question')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/asked.php')
				
                }
				
				if(message.includes('delete ambulance')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/delete.php')
				
                }
					if(message.includes('oxygen list')){

                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/admin%20oxyzen.php')
				
                }
					if(message.includes('delete oxygen')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/deletes.php')
				
                }
						if(message.includes('patient symptom')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/admin%20question.php')
				
                }
						if(message.includes('delete symptom')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/deleted.php')
				
                }
						if(message.includes('date to date report')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/bwdates-report-ds.php')
				
                }
				
							if(message.includes('search report')){

                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/search-report.php')
				
                }
				
								
			speech.volume = 1;
            speech.rate = 1.1;
            speech.pitch = 1;

            window.speechSynthesis.speak(speech);
			}
    </script> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
       
             <footer class="py-4 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white"style="color:green;">Copyright &copy;2021 Sun Healthcare All Rights Reserved </p>
    </div>
    <!-- /.container -->
  </footer>
            <!-- End of Footer -->
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