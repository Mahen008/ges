<div class="main-wrapper">
    <div class="header">
    	<div class="header-left">
    		<a href="<?php echo base_url()?>index.php/Home/home" class="logo">
    			<img src="<?php echo base_url()?>assets/img/logo.png" width="35" height="35" alt=""> <span>GES</span>
    		</a>
    	</div>
    	<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
        <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
        <ul class="nav user-menu float-right">
           
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                    <!-- <span class="user-img">
                        <img class="rounded-circle" src="<?php echo base_url()?>assets/img/user.jpg" width="24" alt="Admin">
                        <span class="status online"></span>
                    </span> -->
                    <span>Quitter</span>
                </a>
    			<div class="dropdown-menu">
    				<!-- <a class="dropdown-item" href="profile.html">My Profile</a>
    				<a class="dropdown-item" href="edit-profile.html">Edit Profile</a> -->
    				<a class="dropdown-item" href="<?php echo base_url()?>index.php/Home/home">Acceuil</a>
    				<a class="dropdown-item" href="<?php echo base_url()?>index.php/Welcome/logout">Logout</a>
    			</div>
            </li>
        </ul>
    </div> 