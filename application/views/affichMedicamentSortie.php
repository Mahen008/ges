<!DOCTYPE html>
<html>
	<head>
		<title>affichage medicament sortie</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebarDial.php");?>


	<div class="page-wrapper" id="container">
		<div id="wrapper">
	
			<div id="page-content-wrapper" >
           
	           <!-- debut card-->
	            <div class="card">

	                <div class="card-header" style="background-color: #ecefed;height: 50px;">
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">LISTE DES MEDICAMENTS SORTIES</h2>
	                </div>

	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">

	                <div class="col-sm-8 col-9 text-right m-b-20" style="margin-left: 30%; margin-top: 0px;">
                        <a data-toggle="modal" data-target="#exampleModalLong" class="btn btn btn-primary btn-rounded float-right active"><i class="fa fa-plus"></i> Ajouter</a>
                    </div>

		                 <!-- Modal ajout article -->
		                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		                  <div class="modal-dialog" role="document"><br>
		                    <div class="modal-content">

		                      <div class="modal-header">

		                        <h5 class="modal-title" id="exampleModalLongTitle" ><b>AJOUTER UNE SORTIE DE MEDICAMENT</b></h5>
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                          <span aria-hidden="true">&times;</span>
		                        </button>
		                      </div>

		                    <form action="<?php echo base_url()?>index.php/MedicamentSortie/creerMedicamentSortie" method="post" role="form">
                        	
                        	<div class="modal-body">

			                            <div class="row">

			                            	<div class="col-md-6 mb-3">
			                            		<label>Patient</label>
                                                <select name="patient" class="form-control">
                                                    <?php foreach($patient as $row): ?>
                                                        <option value="<?php echo $row->id; ?>"><?php echo $row->nom; ?><?php echo " " ?><?php echo $row->prenom; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
			                            		<span class="text-danger"><?php echo form_error("patient");?></span>
			                            	</div>

			                            	<div class="col-md-6 mb-3">
			                            		<label>Medicament</label>
                                                <select name="medicament" class="form-control">
                                                    <?php foreach($medicament as $row): ?>
                                                        <option value="<?php echo $row->idMedicament; ?>"><?php echo $row->libelle; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
			                            		<span class="text-danger"><?php echo form_error("medicament");?></span>
			                            	</div>

			                            </div>

			                            <div class="row">

			                            	<div class="col-md-6 mb-3">
			                            		<label>Quantité sortie</label>
			                            		<input type="number" name="qteSortie" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("qteSortie");?></span>
                                            </div>

			                            	<div class="col-md-6 mb-3">
				                                <label>Date de sortie</label>
				                                <input type="date" name="dateSortieMed" class="form-control">
				                                <span class="text-danger"><?php echo form_error("dateSortieMed");?></span>
			                            	</div>

			                            </div>

			                            <div class="modal-footer">
		                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
		                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
		                                </div>
	                       			</div>
	                     		</form>
		                    </div>
		                  </div>
		                </div>
		                <!-- fin du modal ajout bon d'entree-->
		                <!-- debut table-->
		                <table class="table table-striped" id="table_datatable" >

		                    <thead style="background-color: #367fa9; color: #fff;">
		                        <tr>
		                            <th>Patient</th>
		                            <th>Medicament</th>
		                            <th>Date de sortie</th>
		                            <th>Quantité sortie</th>
		                            <th>Actions</th>
		                        </tr>
		                    </thead>

		                    <tbody>

		                    		<?php foreach($MedicamentSortie as $row):?>
				                        <tr>
				                     
				                            <td><img width="28" height="28" src="<?php echo base_url()?>assets/img/logou.png" class="rounded-circle m-r-5" alt=""><?php echo $row->nom; ?><?php echo " " ?><?php echo $row->prenom; ?></td>
				                            <td><?php echo $row->libelle; ?></td>
				                            <td><?php echo $row->dateSortieMedic ; ?></td>
				                            <td><?php echo $row->qteSortie; ?></td>
				                           
				                            <td>
				                                <div class="dropdown">
													<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1em;">
													    Action
													</button>
														<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a href="<?php echo base_url()?>index.php/MedicamentSortie/editMedicamentSortie/<?php echo $row->idMedicamentSorti; ?>" class="btn btn-success" role="button" style="font-size: 1em;"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
				                                 			<a href="<?php echo base_url()?>index.php/MedicamentSortie/deleteMedicamentSortie/<?php echo $row->idMedicamentSorti; ?>" class="btn btn-danger" role="button" style="font-size:1em;" onclick="return confirm('Voulez-vous vraiment supprimer')"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
														</div>
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