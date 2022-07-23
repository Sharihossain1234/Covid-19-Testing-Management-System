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

    <title>Sun Healthcare | FAQ</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {

 
}
h2 {
  text-align: center;
  color:red;

}

.accordion {

}
.accordion-item {
  background-color: #fff;
  color: #111;
  margin: 1rem 0;
  border-radius: 0.5rem;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.25);
}
.accordion-item-header {
  padding: 0.5rem 3rem 0.5rem 1rem;
  min-height: 3.5rem;
  line-height: 1.25rem;
  font-weight: bold;
  display: flex;
  align-items: center;
  position: relative;
  cursor: pointer;
}
.accordion-item-header::after {
  content: "\002B";
  font-size: 2rem;
  position: absolute;
  right: 1rem;
}
.accordion-item-header.active::after {
  content: "\2212";
}
.accordion-item-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.accordion-item-body-content {
  padding: 1rem;
  line-height: 1.5rem;
  border-top: 1px solid;
  border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
}

@media(max-width:767px) {
  html {
    font-size: 14px;
  }
}



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
<a class="shower" href="#">FAQ </a><br><br>
<h2><img src="img/NicePng_faq-png_1193573.png" alt="" width="110" height="160"></h2><br><br>

<div class="accordion">
  <div class="accordion-item">
    <div class="accordion-item-header">
      How to Registration?
    </div>
    <div class="accordion-item-body"style="color:black;">
      <div class="accordion-item-body-content"style="color:black;">
       At first Click Testing Info and than clik Registration button for go to registration form and than complete the from and click submit button. 
	    <a href="new-user-testing.php">Click for Registration form</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
      How to vew Test report?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        At first Click Testing Info and than clik Test Report button for go to Test Report Page and than Enter Govt.Issued Id or Order number at last click Search button. 
		    <a href="patient-search-report.php">Click for Test Report</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
     How long will it take to get the test report?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      Antigen test report to get within 1 day but Rt-PCR test report to get within 2or 3 day
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
      How many time i Should  covid-19 test?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        No limitation for Covid-19 test. If you fel  You affected covid-19 You can test.
      </div>
    </div>
  </div>
 <div class="accordion-item">
    <div class="accordion-item-header">
     If i am again registration what to do?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      At first Click Testing Info and than clik Allready Registred User button for go to Allready Registred user Page and than Enter Govt.Issued Id  at last click Search button to veaw Registration list.
	 <a href="registered-user-testing.php">Allready Registred User</a>
      </div>
    </div>
  </div> 
   <div class="accordion-item">
    <div class="accordion-item-header">
     How to take Symtoms Test report?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      you take to symtoms test report in the mobile phone massage .
	 <a href="question.php">Click for Symtoms Test</a>
      </div>
    </div>
  </div> 
     <div class="accordion-item">
    <div class="accordion-item-header">
    What is Application Assistance?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
     Application Assistance is a Virtual Assistance.This Assistance helped of any important page show your Display font in the Wepsite.

      </div>
    </div>
  </div> 
      <div class="accordion-item">
    <div class="accordion-item-header">
    How to used Application Assistance?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
    At first Go to Application Assiatance page.And Than click to microphone icon for on microphone than command specific page name.And At last open this page.
	 <a href="Speech Assistant.php">Click for Application Assistance</a>
      </div>
    </div>
  </div> 


 <div class="accordion-item">
    <div class="accordion-item-header">
      what  of covid -19 symtoms?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <ul>
		<li>High fever 2-14 days</li><br>
		<li>Dry cough 2-14 days</li><br>				
		<li>Weakness of breath</li><br>
		<li>Loss of test or smell</li><br>
		<li>chest pain or pressure</li>
		</ul>
      </div>
    </div>
  </div> 
  <div class="accordion-item">
    <div class="accordion-item-header">
     How long will it take to get the Self test report?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      Whithin 24 hourse you take to get the Symtom test report.
      </div>
    </div>
  </div>
</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <footer class="py-4 bg-red">
    <div class="container"">
      <p class="m-0 text-center text-white"style="color:green;">Copyright &copy; 2021 Sun Healthcare All Rights Reserved </p>
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
 const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
    //   currentlyActiveAccordionItemHeader.classList.toggle("active");
    //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    // }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});   

    </script>

</html>