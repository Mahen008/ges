<!DOCTYPE html>
<html>
<head>
	<title>page de l'administrateur</title>
</head>
<body>
<?php include("include/header.php");?>
  <?php include("include/headerApp.php");?>
	<div class="page-wrapper" id="container">
		<!-- contenu -->
		<div id="wrapper">
			<!-- sidebar -->
			
			<!-- fin n sidebar-->

			<!-- Page Content -->
        <div id="page-content-wrapper" style="margin-top: 70px;">
          <div class="card">
        	<div class="card-header" style="background-color: #367fa9;height: 50px;">
                    <h2 align="center" style="color: #fff;font-size: 1em;">UTILISATEUR</h2>
            </div>

            <div class="card-body">
                <div class="container-fluid">
                   
                     <button class="btn btn-primary active" data-toggle="modal" data-target="#exampleModalLong" style="margin-bottom: 7px;">Ajouter</button>


                <!-- Modal ajout article -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document"><br>
                    <div class="modal-content">

                      <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle" >Ajouter un utilisateur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                       <form method="post" action="<?php base_url()?>creeUser" role="form">

                                  <div class="modal-body">

                                  	<div class="row">

					                             <div class="col-md-6 mb-3">
                                            <label>Login</label>
                                            <input type="text"name="log" class="form-control">
                                            <span class="text-danger"><?php echo form_error("log");?></span>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                        <label>Sexe</label>
                                        <select name="sex" class="form-control">
                                          <option value="Homme">Homme</option>
                                          <option value="Femme">Femme</option>
                                        </select>
                                      </div>


			                             </div>

                                   <div class="row">
                                     
                                      <div class="col-md-6 mb-3">
                                        <label>Rôle</label>
                                        <select name="roles" class="form-control">
                                          <option value="Admin">Administrateur</option>
                                          <option value="Recep">Réceptionniste</option>
                                          <option value="Med">Médecin</option>
                                          <option value="Tec">Technicien</option>
                                        </select>
                                      </div>

                                       <div class="col-md-6 mb-3">
                                          <label>Password</label>
                                          <input type="password" name="pass" class="form-control">
                                          <span class="text-danger"><?php echo form_error("pass");?></span>
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
                <!-- fin de modal ajout -->
                
                <table class="table table-striped" id="table_datatable" >

                    <thead style="background-color: #367fa9;">
                        <tr>
                            <th style="display:none;">Id de l'utilisateur</th>
                            <th>Login</th>
                            <th>Sexe</th>
                            <th>Role</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php foreach($users as $user): ?>

                       <tr>
                       		<td style="display:none;"><?php echo $user->user_id; ?></td>
                       		<td><?php echo $user->login; ?></td>
                       		<td><?php echo $user->sexe; ?></td>
                       		<td><?php echo $user->role; ?></td>
                       		<td><?php echo $user->password; ?></td>
                          <td>
                            <a href="<?php echo base_url()?>index.php/users/editUser/<?php echo $user->user_id; ?>" class="btn btn-success" style="font-size:1em;">Modifier</a>
                            <a href="<?php echo base_url()?>index.php/users/deleteUser/<?php echo $user->user_id; ?>" class="btn btn-danger" style="font-size:1em;">Supprimer</a>
                          </td>
                       </tr>

                     <?php endforeach; ?>

                    </tbody>

                </table>

                </div>
            </div>
            </div>
        </div>
        <!-- fin page content-->
		</div>
	</div>
  <?php include("include/footer.php");?>
</body>
</html>