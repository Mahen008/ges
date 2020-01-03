<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>acceuil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/sidebar/simple-sidebar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/AdminLTE.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/DataTables/dataTables.bootstrap4.min.css">
    
    
</head>

<body>
    <!-- menu de l'application-->
    <div>
        
    </div>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/DataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/DataTables/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/popper.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#table_datatable").DataTable();
      });
      
    </script>

</body>
</html>