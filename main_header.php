<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/img/logo_title.png" type="image/png">
    <title>SH Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="assets/css/new.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main_index.php">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
	&nbsp; <a href="../admin_login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center"> 
				<img src="assets/img/logo_title.png" alt="Logo" class="user-image img-responsive"/>
                </li>
                    <li><a href="main_index.php"><i class="fa fa-dashboard fa-3x"></i>Dashboard</a></li>
                    <li><a href="device_registration.php"><i class="fa fa-edit fa-3x"></i>Add Device</a></li>	
                    <li> <a href="assign_helmet.php"><i class="fa fa-edit fa-3x"></i>Assign Helmet</a></li>
                    <li> <a href="user_registration.php"><i class="fa fa-edit fa-3x"></i>Add New Employee</a></li>
                    <li><a href="add_utility.php" ><i class="fa fa-edit fa-3x"></i>Add Utility</a></li>
                    <li><a href="add_payroll.php" ><i class="fa fa-edit fa-3x"></i>Add Payroll</a></li>
                    <li><a href="add_message.php"><i class="fa fa-envelope fa-3x"></i>Add Message</a></li>     
                    <li><a href="location_select.php"><i class="fa fa-search fa-3x"></i>Tracking</a></li>
                    <li><a href="fall_select.php"><i class="fa fa-search fa-3x"></i>Fall Detection</a></li>
                    <li><a href="complaint_select.php"><i class="fa fa-search fa-3x"></i>Complaints</a></li>
                    <li><a href="utilityrequest_select.php"><i class="fa fa-search fa-3x"></i>Utility Requests</a></li>
                    <li><a href="attendance_select.php"><i class="fa fa-search fa-3x"></i>Attendance</a></li>
                    <li><a href="payroll_select.php"><i class="fa fa-search fa-3x"></i>Payroll</a></li>
                    <li><a href="utility_select.php"><i class="fa fa-search fa-3x"></i>Utility List</a></li>
                    <li><a href="userregistration_select.php"><i class="fa fa-search fa-3x"></i>Users List</a></li>
                  </ul>     
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <!--<div id="page-wrapper" >
            <div id="page-inner">!-->
       		<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">