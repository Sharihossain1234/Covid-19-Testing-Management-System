<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');

if(isset($_POST['submit'])){
//getting post values
$fname=$_POST['fullname'];
$mnumber=$_POST['mobilenumber'];
$dob=$_POST['dob'];
$govtid=$_POST['govtissuedid'];
$govtids=$_POST['govtissuedids'];
$govtidnumber=$_POST['govtidnumber'];
$address=$_POST['address'];
$state=$_POST['state'];
$testtype=$_POST['testtype'];
$timeslot=$_POST['birthdaytime'];
$orderno= mt_rand(100000000, 999999999);
$query="insert into tblpatients(FullName,MobileNumber,DateOfBirth,GovtIssuedId,GovtIssuedIds,GovtIssuedIdNo,FullAddress,State) values('$fname','$mnumber','$dob','$govtid','$govtids','$govtidnumber','$address','$state');";
$query.="insert into tbltestrecord(PatientMobileNumber,TestType,TestTimeSlot,OrderNumber) values('$mnumber','$testtype','$timeslot','$orderno');";
$result = mysqli_multi_query($con, $query);
if ($result) {
echo '<script>alert("Your test request submitted successfully.please Preserve your order number. Order number is : "+"'.$orderno.'")</script>';
  echo "<script>window.location.href='new-user-testing.php'</script>";
} 
else {
    echo "<script>alert('Something went wrong. Please try again.');<script>";  
echo "<script>window.location.href='new-user-testing.php'</script>";
}
}
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

    <title>Sun Health Care |Application Assistance</title>

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
				
				      if(message.includes('test report')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/patient-search-report.php')
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
				
					      if(message.includes('home')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/index.php')
                }
					      if(message.includes('district wise test')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/live-test-updates2.php')
                }
				      if(message.includes('contact us')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/contact.php')
                }
								      if(message.includes('Bangladesh covid-19 info')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/Bangladesh.php')
                }
									if(message.includes('world covid-19 info')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/nnn.php')
                }
								if(message.includes('testing')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/new-user-testing.php')
                }
									if(message.includes('registration form')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/new-user-testing.php')
                }
										if(message.includes('registration')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/new-user-testing.php')
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
				
								if(message.includes('already registered user')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/registered-user-testing.php')
                }
				
								if(message.includes('Surekha')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('https://surokkha.gov.bd/enroll')
				
                }
								if(message.includes('BD surokha')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('https://surokkha.gov.bd/enroll')
				
                }
								if(message.includes('FAQ')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/asked.php')
				
                }
							if(message.includes('frequently asked question')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/asked.php')
				
                }
				
				if(message.includes('frequently asked ')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/asked.php')
				
                }
					if(message.includes('booth list')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/Both.php')
				
                }
					if(message.includes('payment')){
                const finalText = 
                    YouTube[Math.floor(Math.random()*YouTube.length)];
                speech.text = finalText; 
                window.open('http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-tms/prayment.php')
				
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


</html>