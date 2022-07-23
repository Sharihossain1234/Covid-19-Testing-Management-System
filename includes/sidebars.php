        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar- accordion" id="accordionSidebar"style="background: #FFC0CB	;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#"style="background=green;">
                <div class="sidebar-brand-icon rotate-n-15"style="background=green;">
                    <i class="fas fa-virus"style="background=green;"></i>
                </div>
                <div class="sidebar-brand-text mx-3"style="background=green;">Sharif<br/>Covid19Testing<br/>Agency
				</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0"style="background=green;">
<?php if($_SESSION['aid']):?>


     <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Phlebotomist</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="add-phlebotomist.php"style="background:#40E0D0;">Add Phlebotomist</a>
                         <a class="collapse-item" href="manage-phlebotomist.php"style="background:#40E0D0;">Manage Phlebotomist</a>
                    </div>
                </div>
            </li>


     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Testing</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"style="background: #FFC0CB	;">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="new-test.php"style="background:lightblue;">New Test Requests</a>					
                        <a class="collapse-item" href="assigned-test.php"style="background:lightblue;">Assigned To Phlebotomist</a>
                        <a class="collapse-item" href="ontheway-samplecollection-test.php"style="background:lightblue;">On the Way for<br /> Sample Collection</a>
                         <a class="collapse-item" href="sample-collected-test.php"style="background:lightblue;">Sample Collected</a>
                           <a class="collapse-item" href="samplesent-lab-test.php"style="background:lightblue;">Sent to lab</a>
                            <a class="collapse-item" href="reportdelivered-test.php"style="background:lightblue;">Report Delivered</a>
 <a class="collapse-item" href="all-test.php"style="background:lightblue;">All Tests</a>
                    </div>
                </div>
            </li>
			     <li class="nav-item">
                <a class="nav-link" href="http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/COVID-19_TRACKER_HTML_CSS_JAVASCRIPT-master/index.html"target="_blank">
                    <i class="fas fa-fw fa-viruses"></i>
                    <span>Bangladesh Corona News</span></a>
            </li>
			 <li class="nav-item">
                <a class="nav-link" href="http://localhost/Covid19-TMS%20Project%20Using%20PHP%20and%20MySQL/covid-19-Tracker02-master/index1.php"target="_blank">
                    <i class="fas fa-fw fa-viruses"></i>
                    <span>World Corona News</span></a>
            </li>
			 <li class="nav-item">
                <a class="nav-link" href="admin_inbox.php">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Inbox</span></a>
            </li>
			<li class="nav-item active">
                <a class="nav-link" href="live-test-updates.php">
                    <i class="fas fa-fw fa-university"></i>
                    <span>Disrtictwise Testing Done</span></a>
            </li>
					<li class="nav-item active">
                <a class="nav-link" href="admin question.php">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Paisent Covid-19 Symtom </span></a>
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
						    

            </li>

<?php else:    ?>          
         
             

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        