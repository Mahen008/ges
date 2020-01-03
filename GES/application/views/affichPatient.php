<!DOCTYPE html>
<html>
	<head>
		<title>affichPatient</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<div id="container">
		<div id="wrapper">
				<!-- <?php include("include/sidebar.php");?> -->
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
	                    	
	                <button class="btn btn-primary active" data-toggle="modal" data-target="#exampleModalLong" style="margin-bottom: 7px;">Ajouter</button>

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

		                    <thead style="background-color: #367fa9;">
		                        <tr>
		                            <th>Nom</th>
		                            <th>Prénom</th>
		                            <th>Date de naissance</th>
		                            <th>Adresse</th>
		                            <th>Numero téléphone</th>
		                            <th>Numero téléphone du proche</th>
		                            <th>Actions</th>
		                        </tr>
		                    </thead>

		                    <tbody>

		                    		<?php foreach($affichPat as $pe):?>
				                        <tr>
				                     
				                            <td><?php echo $pe->nom; ?></td>
				                            <td><?php echo $pe->prenom; ?></td>
				                            <td><?php echo $pe->adresse; ?></td>
				                            <td><?php echo $pe->DDN; ?></td>
				                            <td><?php echo $pe->phone; ?></td>
				                            <td><?php echo $pe->phoneProche; ?></td>
				                            <td>
				                                 <div class="dropdown">
													  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1em;">
													    Action
													  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a href="<?php echo base_url()?>index.php/Patient/editPatient/<?php echo $pe->id; ?>" class="btn btn-success" role="button" style="font-size: 1em;">Modifier</a>
				                                 			<a href="<?php echo base_url()?>index.php/Patient/deletePatient/<?php echo $pe->id; ?>" class="btn btn-danger" role="button" style="font-size:1em;" onclick="return confirm('Voulez-vous vraiment supprimer')">Supprimer</a>
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