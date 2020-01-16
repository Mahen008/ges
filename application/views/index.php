<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/img/favicon.ico">
    <title>Gasikara Exploration Srevice</title>
    <link href="<?php echo base_url()?>assets/css/icon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index.php" class="logo">
					<img src="<?php echo base_url()?>assets/img/logo.png" width="35" height="35" alt=""> <span>La sérénité</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
               
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="<?php echo base_url()?>assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="<?php echo base_url()?>index.php/Frontend/login">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="<?php echo base_url()?>index.php/Frontend/login">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title" style="margin-left: 60px; font-size: 1.4em; color: #000;margin-top: 15px;"><b>MENU</b></li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/Frontend/acceuil"><b><i class="fa fa-dashboard"></i></b> <span>Dashboard</span></a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url()?>index.php/patient/affichPatient"><b><i class="fa fa-wheelchair"></i></b> <span>Patients</span></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()?>index.php/Observation/affichListPat"><b><i class="fa fa-calendar"></i></b> <span>Appointments</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/Observation/affichListPat"><b><i class="fa fa-calendar-check-o"></i></b> <span>Doctor consultation</span></a>
                        </li>
                        <li>
                            <a href="departments.html"><b><i class="fa fa-hospital-o"></i></b> <span>Departments</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><b><i class="fa fa-user"></i></b> <span> Employees</span></a>
                            <ul style="display: none;">
                                <li><a href="employees.html">Employees List</a></li>
                                <li><a href="leaves.html">Leaves</a></li>
                                <li><a href="holidays.html">Holidays</a></li>
                                <li><a href="attendance.html">Attendance</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>7</h3>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>5</h3>
                                <span class="widget-title3">Attend <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>Patient Total</h4>
									<span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% Higher than Last Month</span>
								</div>	
								<canvas id="linegraph"></canvas>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>Patients In</h4>
									<!-- <div class="float-right">
										<ul class="chat-user-total">
											<li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
											<li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li>
										</ul>
									</div> -->
								</div>	
								<canvas id="bargraph"></canvas>
							</div>
						</div>
					</div>
				</div>
          
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url()?>assets/js/Chart.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/js/chart.js"></script>
    <script src="<?php echo base_url()?>assets/js/app.js"></script>

</body>


<!-- index22:59-->
</html>