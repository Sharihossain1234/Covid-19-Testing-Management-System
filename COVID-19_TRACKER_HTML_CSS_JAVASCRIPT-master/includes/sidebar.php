        	

		
		<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar- accordion" id="accordionSidebar"style="background:#FFC0CB;color:black"	>

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-virus"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Covid-19
				</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
<?php if($_SESSION['aid']):?>


<?php 
$sql="SELECT * FROM messages WHERE STATUS=1";
$result=$con->query($sql);
$n=$result->num_rows;
if($n!=0)
{
	$mes='<span class="badge pull-right">'.$n.' Unread </span>';
}
else
{
	$mes="";
}
?>

     
						    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Phlebotomist</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="add-phlebotomist.php">Add Phlebotomist</a>
                         <a class="collapse-item" href="manage-phlebotomist.php">Manage Phlebotomist</a>
                    </div>
                </div>
            </li>
			
 </li	

    
			
 </li>
			    
     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Testing</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"style="background: #FFC0CB	;">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="new-test.php">New Test Requests</a>					
                        <a class="collapse-item" href="assigned-test.php">Assigned To Phlebotomist</a>
                        <a class="collapse-item" href="ontheway-samplecollection-test.php">On the Way for<br /> Sample Collection</a>
                         <a class="collapse-item" href="sample-collected-test.php">Sample Collected</a>
                           <a class="collapse-item" href="samplesent-lab-test.php">Sent to lab</a>
                            <a class="collapse-item" href="reportdelivered-test.php">Report Delivered</a>
 <a class="collapse-item" href="all-test.php">All Tests</a>
                    </div>
                </div>
            </li>
			     <li class="nav-item">
                <a class="nav-link" href="bd.php">
                    <i class="fas fa-fw fa-viruses"></i>
                    <span>Bangladesh Covid-19 Info</span></a>
            </li>
			 <li class="nav-item">
                <a class="nav-link" href="http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/codetube-master/covid19-map/covid-map.html">
                    <i class="fas fa-fw fa-viruses"></i>
                    <span>World Covid-19 Info</span></a>
            </li>
			
			 <li class="nav-item">
                <a class="nav-link" href="admin_inbox.php">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Inbox<?php echo $mes;?></span></a>
					
            </li>
			
			<li class="nav-item active">
                <a class="nav-link" href="live-test-updates.php">
                    <i class="fas fa-fw fa-university"></i>
                    <span>Disrtictwise Test</span></a>
            </li>
				 <li class="nav-item">
                <a class="nav-link" href="form.php">
                    <i class="fa fa-download" ></i>                          
                    <span>Report Generator</span></a>
            </li>
			
				    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-ambulance"></i>
                    <span>Ambulance info</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin add ambulance .php">Add Ambulance</a>
                         <a class="collapse-item" href="admin ambulance.php">Veaw Ambulance List</a>
						 <a class="collapse-item" href="delete.php">Delet Data From list</a>
                    </div>
                </div>
            </li>
			
 </li>
						    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-fw fa-heartbeat"></i>
                    <span>Oxygen Cylinder info</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin add oxygen.php">Add Oxygen</a>
                         <a class="collapse-item" href="admin oxyzen.php">Veaw Oxyzen List</a>
						 <a class="collapse-item" href="deletes.php">Delet Data From list</a>
                    </div>
                </div>
            </li>
			
 </li>				    
   <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="true" aria-controls="collapseSix">
                    <i class="fas fa-fw fa-heartbeat"></i>
                    <span>Paisent Symtom</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingfive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin question.php">Veaw Paisent Symtom</a>
                         <a class="collapse-item" href="deleted.php">Delete paisent symtom</a>
						
                    </div>
                </div>
            </li>
			
 </li>		
            
		
              
			
   <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Report</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="bwdates-report-ds.php"> Dates to Dates Report</a>
                         <a class="collapse-item" href="search-report.php">Search Report</a>
                        </div>
						    

            </li
			     

<?php else:    ?>          
         
            <!-- Nav Item - Dashboard -->
           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                COVID19 Testing Menu bar
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>
			    <li class="nav-item active">
                <a class="nav-link" href="Speech Assistant.php">
                    <i class="fas fa-fw fa-microphone"></i>
                    <span>Application Assistant</span></a>
            </li>            
        
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Testing</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="new-user-testing.php">Registration</a>
                        <a class="collapse-item" href="registered-user-testing.php">Already Registered User</a>
                    </div>
                </div>
            </li>
 <li class="nav-item">
                <a class="nav-link" href="patient-search-report.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Test Report</span></a>
            </li>
			  </li>
			   <li class="nav-item active">
                <a class="nav-link" href="question.php">
                    <i class="fas fa-fw fa-viruses"></i>
                    <span>Symptoms test </span></a>
            </li>
			     <li class="nav-item">
                <a class="nav-link" href="bd.php">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Bangladesh Covid-19 Info</span></a>
            </li>
			 <li class="nav-item">
                <a class="nav-link" href="http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/codetube-master/covid19-map/covid-map.html">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>World Covid-19 Info</span></a>
            </li>
			
	          	 <li class="nav-item">
                <a class="nav-link" href="Embulance.php">
                    <i class="fas fa-fw fa-ambulance"></i>
                    <span>Emergency Ambulance</span></a>
            </li>  
                	 <li class="nav-item">
                <a class="nav-link" href="oxizen.php">
                    <i class="fas fa-fw fa-heartbeat"></i>
                    <span>Emergency Oxygen</span></a>
            </li> 
<li class="nav-item active">
                <a class="nav-link" href="live-test-updates2.php">
                    <i class="fas fa-fw fa-university"></i>
                    <span>Disrtictwise Test </span></a>
            </li>
			<li class="nav-item active">
                <a class="nav-link" href="asked.php">
                    <i class="fas fa-fw fa-question-circle"></i>
                    <span>F.A.Q </span></a>
            </li>
                    
         <li class="nav-item active">
                <a class="nav-link" href="contact.php">
                    <i class="fas fa-fw fa-phone"></i>
                    <span>Contact US</span></a>
            </li>
			 <li class="nav-item active">
                <a class="nav-link" href="http://localhost/cts_qr/login.php">
                    <i class="fas fa-fw fa-phone"></i>
                    <span>Contract Tracer</span></a>
            </li>
		
		
					
<li class="nav-item active">
                <a class="nav-link" href="login.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span></a>
            </li>

<?php endif;    ?>          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->