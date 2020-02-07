<!DOCTYPE html>
<html>
	<head>
		<title>affichPatient</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebarAcc.php");?>


	<div class="page-wrapper" id="container">
		<div id="wrapper">
	
			<div id="page-content-wrapper" >
           
	           <!-- debut card-->
	            <div class="card">

	                <div class="card-header" style="background-color: #ecefed;height: 50px;">
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">LISTE DE PATIENT</h2>
	                </div>

	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">

	                <div class="col-sm-8 col-9 text-right m-b-20" style="margin-left: 30%; margin-top: 0px;">
                        <a data-toggle="modal" data-target="#exampleModalLong" class="btn btn btn-primary btn-rounded float-right active"><i class="fa fa-plus"></i>Add Patient</a>
                    </div>

		                 <!-- Modal ajout article -->
		                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		                  <div class="modal-dialog" role="document"><br>
		                    <div class="modal-content">

		                      <div class="modal-header">

		                        <h5 class="modal-title" id="exampleModalLongTitle" >Ajouter un nouveau patient</h5>
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                          <span aria-hidden="true">&times;</span>
		                        </button>
		                      </div>

		                    <form action="<?php echo base_url()?>index.php/Patient/ajoutNewPatient" method="post" role="form">
                        	
                        	<div class="modal-body">

			                            <div class="row">
			                            	<div class="col-md-6 mb-3">
			                            		<label>Nom</label>
			                            		<input type="text" name="name" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("name");?></span>
			                            	</div>
			                            	<div class="col-md-6 mb-3">
			                            		<label>Prénom</label>
			                            		<input type="text" name="fname" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("fname");?></span>
			                            	</div>
			                            </div>

			                            <div class="row">
			                            	<div class="col-md-6 mb-3">
			                            		<label>Date de naissance</label>
			                            		<input type="date" name="ddn" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("ddn");?></span>
			                            	</div>
			                            	<div class="col-md-6 mb-3">
				                                <label>adresse</label>
				                                <input type="text" name="adress" class="form-control">
				                                <span class="text-danger"><?php echo form_error("adress");?></span>
			                            	</div>
			                            </div>

			                            <div class="row">

			                            	<div class="col-md-6 mb-3">
				                                <label>Téléphone</label>
				                                <input type="text" name="phone" class="form-control">
				                                <span class="text-danger"><?php echo form_error("phone");?></span>
			                            	</div>

				                            <div class="col-md-6 mb-3">
				                                <label>Téléphone du proche</label>
				                                <input type="text" name="phonepro" class="form-control">
				                                <span class="text-danger"><?php echo form_error("phonepro");?></span>
			                            	</div>

			                            </div>

			                            <div class="row">

			                            	<div class="col-md-6 mb-3">
			                            		<label>Consultation</label>
												<label class="custom-control custom-checkbox">OUI
												  <input type="radio" name="consulter[]" value="1">
												</label>
												  <span class="checkmark"></span>
												<!-- </label> -->
												<label class="custom-control custom-checkbox">NON
												  <input type="radio" checked="checked" name="consulter[]" value="2">
												</label>  
												  <span class="checkmark"></span>
												
									  			<span class="text-danger"><?php echo form_error("consulter");?></span>
			                            	</div>

			                            </div>

			                            <div class="row">
			                            	
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
		                            <th>Nom</th>
		                            <th>Prénom</th>
		                            <th>Date de naissance</th>
		                            <th>Adresse</th>
		                            <th>Numero téléphone</th>
		                            <th>Numero téléphone du proche</th>
		                            <th>Consultation</th>
		                            <th>Actions</th>
		                        </tr>
		                    </thead>

		                    <tbody>

		                    		<?php foreach($affichPat as $pe):?>
				                        <tr>
				                     
				                            <td><img width="28" height="28" src="<?php echo base_url()?>assets/img/user.jpg" class="rounded-circle m-r-5" alt=""><?php echo $pe->nom; ?></td>
				                            <td><?php echo $pe->prenom; ?></td>
				                            <td><?php echo $pe->adresse; ?></td>
				                            <td><?php echo $pe->DDN; ?></td>
				                            <td><?php echo $pe->phone; ?></td>
				                            <td><?php echo $pe->phoneProche; ?></td>

				                            <?php if( $pe->consulter == '1'): ?>
				                            	<td><span class="custom-badge status-green">Faite</span></td>
				                            <?php else: ?>
				                            	<td><span class="custom-badge status-red">En attente</span></td>
				                            <?php endif ?>

				                            <!-- <td><?php echo $pe->consulter; ?></td> -->
				                            <td>
				                                <div class="dropdown">
													<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1em;">
													    Action
													</button>
														<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a href="<?php echo base_url()?>index.php/Patient/editPatient/<?php echo $pe->id; ?>" class="btn btn-success" role="button" style="font-size: 1em;"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
				                                 			<a href="<?php echo base_url()?>index.php/Patient/deletePatient/<?php echo $pe->id; ?>" class="btn btn-danger" role="button" style="font-size:1em;" onclick="return confirm('Voulez-vous vraiment supprimer')"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
														</div>
												</div>
												<!-- <div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div> -->
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