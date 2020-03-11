<!DOCTYPE html>
<html>
	<head>
		<title>affichPatient</title>
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
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">LISTE DE PATIENT</h2>
	                </div>

	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">

	                <!-- <div class="col-sm-8 col-9 text-right m-b-20" style="margin-left: 30%; margin-top: 0px;">
                        <a data-toggle="modal" data-target="#exampleModalLong" class="btn btn btn-primary btn-rounded float-right active"><i class="fa fa-plus"></i>Add Consultation</a>
                    </div> -->
                    <div class="col-sm-8 col-9 text-right m-b-20" style="margin-left: 30%; margin-top: 0px;">
	                    <a data-toggle="modal" data-target="#exampleModalLong" class="btn btn btn-primary btn-rounded float-right active"><i class="fa fa-plus"></i>Add Consultation</a>
	                </div>

		                 <!-- Modal ajout article -->
		                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		                  <div class="modal-dialog" role="document"><br>
		                    <div class="modal-content">

		                      <div class="modal-header">

		                        <h5 class="modal-title" id="exampleModalLongTitle" >Ajouter un nouveau consommation</h5>
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                          <span aria-hidden="true">&times;</span>
		                        </button>
		                      </div>

		                    <form action="<?php echo base_url()?>index.php/consommation/ajoutConsommation" method="post" role="form">
                        	
                        	<div class="modal-body">

                        				<div class="row">
			                            	<div class="col-md-6 mb-3">
			                            		<label>Nom de patient</label>
			                            		<select name="idPat" class="form-control">
						                            <option value="#">choix de patient</option>
						                                <?php foreach($affichCo as $pt): ?>
						                                    <option value="<?php echo $pt->id; ?>"><?php echo $pt->nom; ?><?php echo $pt->prenom; ?></option>
						                                <?php endforeach; ?>
						                        </select>
			                            		<span class="text-danger"><?php echo form_error("idPat");?></span>
			                            	</div>
			                            </div>
			                            <div class="row">
			                            	<div class="col-md-6 mb-3">
			                            		<label>Nom de stock</label>
			                            		<select name="idSt" class="form-control">
						                            <option value="#">choix de consommation</option>
						                                <?php foreach($affichStock as $st): ?>
						                                    <option value="<?php echo $st->idSt; ?>"><?php echo $st->libelle; ?></option>
						                                <?php endforeach; ?>
						                        </select>
			                            		<span class="text-danger"><?php echo form_error("idSt");?></span>
			                            	</div>
			                            	<div class="col-md-6 mb-3">
				                                <label>Date</label>
				                                <input type="date" name="date" class="form-control">
				                                <span class="text-danger"><?php echo form_error("date");?></span>
			                            	</div>
			                            </div>

			                            <div class="row">
			                            	<div class="col-md-6 mb-3">
			                            		<label>Nombre en détaille</label>
			                            		<input type="text" name="nd" class="form-control">
			                            		<span class="text-danger"><?php echo form_error("nd");?></span>
			                            	</div>
			                            	<div class="col-md-6 mb-3">
				                                <label>paquet</label>
				                                <input type="text" name="pt" class="form-control">
				                                <span class="text-danger"><?php echo form_error("pt");?></span>
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
		                            <th>Nom et Prénom</th>
		                            <th>Actions</th>
		                        </tr>
		                    </thead>

		                    <tbody>

		                    		
				                        <tr>
				                     
				                            <td><img width="28" height="28" src="<?php echo base_url()?>assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
				                            <td>
				                                
											</td>
												<!-- <div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div> -->
											</div>
				                            </td>
				                        </tr>
			                    	
			                        
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