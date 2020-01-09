<!DOCTYPE html>
<html>
	<head>
		<title>affichObservation</title>
		
	</head>
<body>
	<?php include("include/header.php");?>

	<div id="container">
		<!-- debut wrapper -->
		<div id="wrapper">

				<!-- <?php include("include/sidebar.php");?> -->
			<!-- contenu de la page-->
			<div id="page-content-wrapper" style="margin-left: 120px;width: 1140px;">
           
	           <!-- debut card-->
	            <div class="card">

	                <div class="card-header" style="background-color: #367fa9;height: 50px;">
	                    <h2 align="center" style="color: #fff;font-size: 1em;">LISTE DE PATIENT</h2>
	                </div>

	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">
	                    
		                <!-- debut table-->
		                <table class="table table-striped" id="table_datatable" >

		                    <thead style="background-color: #367fa9;">
		                        <tr>
		                            <th>Nom</th>
		                            <th>Prénom</th>
		                            
		                            <th>Actions</th>
		                        </tr>
		                    </thead>
		                    <tbody>

		                    		<?php foreach($affichPatient as $pe):?>
				                        <tr>
				                      
				                            <td><?php echo $pe->nom; ?></td>
				                            <td><?php echo $pe->prenom; ?></td>
				                           
				                            <td>
				                                <divSS class="dropdown">
													<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1em;">
													    Action
													</button>
														<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a href="<?php echo base_url()?>index.php/Affichage/ficheMedical/<?php echo $pe->id; ?>" class="btn btn-success" role="button" style="font-size: 1em;">voir</a>
				                                 			<a href="<?php echo base_url()?>index.php/Observation/deleteObservation/<?php echo $pe->id; ?>" class="btn btn-danger" role="button" style="font-size:1em;" onclick="return confirm('Voulez-vous vraiment supprimer')">Supprimer</a>
														</div>
												</div>
				                            </td>
				                        </tr>
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
</body>
</html>