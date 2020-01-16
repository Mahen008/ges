
<!DOCTYPE html>
<html>
	<head>
		<title>affichObservation</title>
		
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebar.php");?>

	<div id="container">
		<!-- debut wrapper -->
		<div id="wrapper">

				<!-- <?php include("include/sidebar.php");?> -->
			<!-- contenu de la page-->
			<div id="page-content-wrapper" style="margin-left: 210px; margin-top: 30px; width: 1159px;">
           
	           <!-- debut card-->
	            <div class="card">

	                <div class="card-header" style="background-color: #ecefed; height: 50px;">
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">LISTE DES PATIENTS CONSULTER</h2>
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

		                    <thead style="background-color: #367fa9;">
		                        <tr>
		                            <th><b>Nom</b></th>
		                            <th><b>Prénom</b></th>
		                            
		                            <th><b>Actions</b></th>
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
														    <a href="<?php echo base_url()?>index.php/Affichage/ficheMedical/<?php echo $pe->id; ?>" class="btn btn-success" role="button" style="font-size: 1em;"><i class="fa fa-eye"></i> Voir</a>
														    <a href="<?php echo base_url()?>index.php/Observation/editObs/<?php echo $pe->id; ?>" class="btn btn-success" role="button" style="font-size: 1em;"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
				                                 			<a href="<?php echo base_url()?>index.php/Observation/deleteObservation/<?php echo $pe->id; ?>" class="btn btn-danger" role="button" style="font-size:1em;" onclick="return confirm('Voulez-vous vraiment supprimer')"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
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
	<?php include("include/footer.php");?>
</body>
</html>