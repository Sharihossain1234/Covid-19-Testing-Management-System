<?php 
error_reporting (0);
date_default_timezone_set('Asia/dhaka');
include("dbconnection.php");

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

    <title>Sun Healthcare |Covid-19 Symtoms Chaker</title>

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
h4{
	color:black;
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
			
			
			h1 {
			   margin: 0;
			    margin-bottom:10px ;
				text-align:center; 
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
<div class="wrapper">
                  <?php
            if(isset($_GET["submitted"])){
                
                ?>
                
                <h1>Submitted data from Covid Paisent</h1>
                <h4>*You may need to refresh this page to update</h4>
                
                    
                    
                <?php
           
                $sql = "SELECT * FROM travelhistoryd ORDER BY id DESC";
                $result = mysqli_query($connection, $sql);
                
                while($row = mysqli_fetch_assoc($result)){
                    ?>
					
                    <div class="registereditem"style="background:#cbe6d9";>	
					<input type="checkbox" name="fruit" value="apple"> 
                        <b>Date and Time : </b> <?php echo $row["date"] . " | " . $row["time"]  ?><br><br>
                        <b>Name: </b><?php echo $row["name"] ?><br/></br>
                        <b>Mobile Number : </b><?php echo $row["phone"] ?><br></br>
				        <b> why : </b><?php echo $row["mobile"] ?><br></br>
						<b>Age : </b><?php echo $row["phones"] ?><br></br>
				        <b> Gender : </b><?php echo $row["mobiles"] ?><br></br>
						<b> Have you been in contact with someone who has confirmed positive for COVID-19?  : </b><?php echo $row["mobiled"] ?><br></br>
                        <b> Have high fever, Dry cough, Weakness of breath : </b><?php echo $row["china"] ?><br></br>
                        <b>Travelled out of country in the last 2 weeks :  </b><?php echo $row["outsg"] ?><br></br>
                        <b>if yes, Country name : </b><?php echo $row["outsgc"] ?><br></br>
                        <b>Body Temperature : </b><?php echo $row["temperature"] ?><br></br>
                      <a href="question.php? DESC= <?php echo $row['travelhistory'];?>&&action=delete" onclick="return confirm('Do you really want to delete this record?');"><i class="fa fa-trash" aria-hidden="true" style="color:red" title="Delete this record"style="text-align:center;"></i></a></td>
                    </div>
                    <?php
                }
                
                ?>
                    
                
           <div align="center" style="padding: 50px;">
                <p><a href="<?php echo $baseurl ?>" style="color: lime;">View submission form</a></p>
                </div>
                
                <?php
                
            }else{
                
                if(isset($_POST["name"])){
                    
                    ?>
                    <p>Form is submitted successfully.</p>
                    <h4>Thank you! As Soon as possible You will geting Self test Report in Mobile phone message.</h4><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                  
                    <?php
                    
                    $name = mysqli_real_escape_string($connection, $_POST["name"]);
                    $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
					$mobile = mysqli_real_escape_string($connection, $_POST["mobile"]);
					$phones = mysqli_real_escape_string($connection, $_POST["phones"]);
					$mobiles = mysqli_real_escape_string($connection, $_POST["mobiles"]);
				    $mobiled = mysqli_real_escape_string($connection, $_POST["mobiled"]);
                    $china = mysqli_real_escape_string($connection, $_POST["china"]);
                    $outsg = mysqli_real_escape_string($connection, $_POST["outsg"]);
                    $outsgc = mysqli_real_escape_string($connection, $_POST["outsgc"]);
                    $temperature = mysqli_real_escape_string($connection, $_POST["temperature"]);
                    
                    if($china == "chinayes")
                        $china = "yes";
                    else
                        $china = "no";
                        
                    if($outsg == "outsgyes")
                        $outsg = "yes";
                    else
                        $outsg = "no";
                    
                    $date = date("Y/m/d");
                    $time = date("h:i:sa");
                    mysqli_query($connection, "INSERT INTO travelhistoryd (name, phone, mobile,phones, mobiles, mobiled, temperature, china, outsg, outsgc, date, time) VALUES ('$name', '$phone', '$mobile', '$phones', '$mobiles','$mobiled','$temperature', '$china', '$outsg', '$outsgc', '$date', '$time')");
                    
                    ?>
                    
                    <?php
                    
                }else{
                    ?>
					<a class="shower" href="#"> Covid-19 Symtoms Test</a><br><br> 
            		   
            
                    <p><big>Please fill this form:</big></p>
					   
                    <form method="post">
                        <div class="inputgroup">
                            <label><big>Full Name</big></label>
                            <input class="wideinput" placeholder="Enter your full Name" id="name" name="name"required="true">
							<img src="microphone-3404243_1280.png" width="40px" onclick="startDictation('name')">
                        </div>
                        
                        <div class="inputgroup">
                            <label><big>Mobile Number</big></label>
                            <input class="wideinput" placeholder="Enter 11 digit Mobile Number"id="mobilenumber" name="phone" type="text"required="true " maxlength="11">
							<img src="microphone-3404243_1280.png" width="40px" onclick="startDictation('mobilenumber')">
                        </div>
						 <div class="inputgroup">
                            <label><big>Age</big></label>
                            <input class="wideinput" placeholder="Enter Your Age"id="mobilenumbers" name="phones" type="text"required="true">
							<img src="microphone-3404243_1280.png" width="40px" onclick="startDictation('mobilenumbers')">
                        </div>
						  <div class="inputgroup">                          
                            <label><big>Gender</big></label><br/>
                            <br><input type="radio" value="Male" name="mobiles"><label for="chinayes"><big>Male</big></label><br/>
                            <br><input type="radio" value="Female" name="mobiles" checked><label for="chinano">Female</label>
                        </div>
						
						  <div class="inputgroup">                          
                            <label><big> Have you been in contact with someone who has confirmed positive for COVID-19?  </big></label><br/>
                            <br><input type="radio" value="yes" name="mobiled"><label for="Chinayes"><big>Yes</big></label><br/>
                            <br><input type="radio" value="no" name="mobiled" checked><label for="chinano">No</label>
                        </div>
						  <div class="inputgroup">                          
                            <label><big>Have you Sore throat, chest pain or pressure, Loss of taste or smell   ?</big></label><br/>
                            <br><input type="radio" value="yes" name="mobile"><label for="chinayes"><big>Yes</big></label><br/>
                            <br><input type="radio" value="no" name="mobile" checked><label for="chinano">No</label>
                        </div>
                        
                        <div class="inputgroup">
                            <label><big> Have you high fever,Dry cough,Weakness of breath  ?</big></label><br/>
                            <br><input type="radio" value="chinayes" name="china"><label for="chinayes"><big>Yes</big></label><br/>
                            <br><input type="radio" value="chinano" name="china" checked><label for="chinano">No</label>
                        </div>
						
                        
                        <div class="inputgroup">
                            <label><big>Have you travelled out of country in the last 2 weeks?</big></label><br/>
                            <br><input type="radio" value="outsgyes" name="outsg" id="outsgyes" onchange="checkoutsg()"><label for="outsgyes">Yes</label><br/>
                            <br><input type="radio" value="outsgno" name="outsg" onchange="checkoutsg()" checked><label for="outsgno">No</label>
                            <br>
                            <div id="ifyesoutsg" style="display: none; background-color: ; padding: 10px; margin-top: 10px;">
                                <label>If yes, where?</label>
                                <input class="wideinput" placeholder="Enter Country name" id="outsgcountryname" value="Nil" name="outsgc">
									<img src="microphone-3404243_1280.png" width="40px" onclick="startDictation('outsgcountryname')">
                            </div>
                        </div>
                        
                        <div class="inputgroup">
                            
                            <label> Current body temperature:</label>
                            <input class="wideinput" placeholder="EX: 37.5 °C/ 99.5 °F" id="temperature" name="temperature" type="text"required="true ">
							<img src="microphone-3404243_1280.png" width="40px" onclick="startDictation('temperature')">
                        </div><br/>
                        
                        <input class="wideinput" type="submit" value="Submit" style="background-color: lime; border: none;">
                        
                    </form><br/><br/>
                    
                
                   
                    
                    <?php
                }

            }
            ?>
        
            
            
        </div>
        
        
        <script>
            function checkoutsg(){
                if($("#outsgyes").prop("checked")){
                    $("#ifyesoutsg").show()
                    $("#outsgcountryname").val("")
                }
                    
                else{
                    $("#ifyesoutsg").hide()
                    $("#outsgcountryname").val("Nil")
                }
                    
            }
            
            $("body").css({ "min-height" : innerHeight + "px" })
        </script

                </div>
                <!-- /.container-fluid -->

            </div><br/><br/><br/><br/><br/><br/><br/>
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