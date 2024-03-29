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
   <?php include("include/header.php");?>
    <?php include("include/headerApp.php");?>
    <?php include("include/sidebarAcc.php");?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                
                                <label><?php foreach ($patients as $row) : ?>
                                    <h3><?php echo $row->patients; ?></h3>    
                                <?php endforeach; ?></label>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <label><?php foreach ($NbAtt as $row) : ?>
                                    <h3><?php echo $row->attend; ?></h3>
                                <?php endforeach; ?></label>
                                <span class="widget-title3">Attend<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php include("include/footer.php");?>

</body>


<!-- index22:59-->
</html>