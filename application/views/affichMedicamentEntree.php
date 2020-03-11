<!DOCTYPE html>
<html>
	<head>
		<title>affichage medicament entrée</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebarStock.php");?>


	<div class="page-wrapper" id="container">
		<div id="wrapper">
	
			<div id="page-content-wrapper" >
           
	           <!-- debut card-->
	            <div class="card">

	                <div class="card-header" style="background-color: #ecefed;height: 50px;">
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">LISTE DES MEDICAMENTS ENTREES</h2>
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

		                        <h5 class="modal-title" id="exampleModalLongTitle" >Ajouter un medicament entrée</h5>
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                          <span aria-hidden="true">&times;</span>
		                        </button>
		                      </div>

		                    <form action="<?php echo base_url()?>index.php/MedicamentEntree/creerMedicamentEntree" method="post" role="form">
                        	
                        	<div class="modal-body">

			                            <div class="row">

			                            	<div class="col-md-6 mb-3">
			                            		<label>Libellé</label>
                                                <select name="libelle" class="form-control">
                                                    <?php foreach($medicament as $row): ?>
                                                        <option value="<?php echo $row->idMedicament; ?>"><?php echo $row->libelle; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
			                            		<span class="text-danger"><?php echo form_error("libelle");?></span>
			                            	</div>

			                            	<div class="col-md-6 mb-3">
			                            		<label>Date d'entrée</label>
			                            		<input type="date" name="dateEntreeMed" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("dateEntreeMed");?></span>
			                            	</div>

			                            </div>

			                            <div class="row">

			                            	<div class="col-md-6 mb-3">
			                            		<label>Quantité entrée</label>
			                            		<input type="number" name="qteEntree" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("qteEntree");?></span>
                                            </div>

			                            	<div class="col-md-6 mb-3">
				                                <label>Prix</label>
				                                <input type="number" name="prix" class="form-control">
				                                <span class="text-danger"><?php echo form_error("prix");?></span>
			                            	</div>

			                            </div>

			                            <!-- <div class="row">

			                            	<div class="col-md-6 mb-3">
				                                <label>Paquet</label>
			                            		<input type="text" name="paquet" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("paquet");?></span>
			                            	</div>

			                            </div> -->

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
		                            <th>Libellé</th>
		                            <th>Date d'entrée</th>
		                            <th>Quantité entrée</th>
		                            <th>Prix</th>
		                            <!-- <th>Paquet</th> -->
		                            <th>Actions</th>
		                        </tr>
		                    </thead>

		                    <tbody>

		                    		<?php foreach($MedicamentEntree as $row):?>
				                        <tr>
				                     
				                            <td><img width="28" height="28" src="<?php echo base_url()?>assets/img/logou.png" class="rounded-circle m-r-5" alt=""><?php echo $row->libelle; ?></td>
				                            <td><?php echo $row->dateEntreeMedic; ?></td>
				                            <td><?php echo $row->qteEntree; ?></td>
				                            <td><?php echo $row->prixMed; ?></td>
				                            <!-- <td><?php echo $row->paquet; ?></td> -->
				                           
				                            <td>
				                                <div class="dropdown">
													<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1em;">
													    Action
													</button>
														<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a href="<?php echo base_url()?>index.php/MedicamentEntree/editMedicamentEntree/<?php echo $row->idMedEntree; ?>" class="btn btn-success" role="button" style="font-size: 1em;"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
				                                 			<a href="<?php echo base_url()?>index.php/MedicamentEntree/deleteMedicamentEntree/<?php echo $row->idMedEntree; ?>" class="btn btn-danger" role="button" style="font-size:1em;" onclick="return confirm('Voulez-vous vraiment supprimer')"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
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