
<!DOCTYPE html>
<html>
	<head>
		<title>affichObservation</title>
		
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebarDial.php");?>

	<div class="page-wrapper">
		<!-- debut wrapper -->
		<div>

			<!-- contenu de la page-->
			<div id="page-content-wrapper" >
           
	           <!-- debut card-->
	            <div class="card">

	                <div class="card-header" style="background-color: #ecefed; height: 50px;">
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">LISTE DES PATIENTS à CONSULTER</h2>
	                </div>

	                <div class="col-sm-8 col-9 text-right m-b-20" style="margin-left: 30%; margin-top: 10px;">
                        <a href="<?php echo base_url()?>index.php/Observation/AjoutObs" class="btn btn btn-primary btn-rounded float-right active"><i class="fa fa-plus"></i>Add Consultation</a>
                    </div>
	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">
	                    
		                <!-- debut table-->
			                <table class="table table-striped" id="table_datatable" >

			                    <thead style="background-color: #367fa9; color: #fff;">
			                        <tr>
			                            <th><b>Nom</b></th>
			                            <th><b>Prénom</b></th>
			                            
			                            <th><b>Actions</b></th>
			                        </tr>
			                    </thead>
			                    <tbody>

		                    		<?php foreach($affichCo as $pe):?>
				                        <tr>
				                      
				                            <td><img width="28" height="28" src="<?php echo base_url()?>assets/img/user.jpg" class="rounded-circle m-r-5" alt=""><?php echo $pe->nom; ?></td>
				                            <td><?php echo $pe->prenom; ?></td>
				                           
				                            <td>
												<button type="submit"></button>
				                            </td>
A				                        </tr>
			                    	<?php endforeach;?>
				                        
		                    </tbody>

			                </table>
		                <!-- fin du table-->
		            	</div>
		            <!-- fin container-fluid-->
	                </div>
	                <!-- fin card body-->
	            </div>
	            <!-- fin du card-->
        	</div>
			<!-- fin du contenu de page-->
		</div>
		<!-- fin wrapper -->
	</div>
	<?php include("include/footer.php");?>
</body>
</html>