<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>editer l'utilisateur</title>
</head>
<body>
	<?php include("include/header.php");?>
  <?php include("include/headerApp.php");?>
	<div class="container">
		

		<div class="row">
			<div class="col-sm-4" style="margin-left: 200px;">
				
				<form method="post" action="<?php echo base_url()?>index.php/users/updateUser/<?php echo $unUser->user_id;?>" style="margin-top: 70px;">
				<div class="form-group">
					<label>Login</label>
					<input type="text" name="log" class="form-control" value="<?php echo set_value('log',$unUser->login);?>">
					<span class="text-danger"><?php echo form_error("log");?></span>
				</div>

				<div class="form-group">
					<label>Sexe</label>
					<select name="sex"class="form-control">
						<option value="<?php echo $unUser->sexe;?>"><?php echo $unUser->sexe;?></option>
						<option value="Homme">Homme</option>
						<option value="Femme">Femme</option>
					</select>
				</div>

				<div class="form-group">
					<label>Role</label>
					<select name="roles"class="form-control">
						<option value="<?php echo $unUser->role;?>"><?php echo $unUser->role;?></option>
							<option value="Admin">Administrateur</option>
	                        <option value="Recep">Réceptionniste</option>
	                        <option value="Med">Médecin</option>
	                        <option value="Tec">Technicien</option>
					</select>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form-control" value="<?php echo set_value('pass',$unUser->password);?>">
					<span class="text-danger"><?php echo form_error("pass");?></span>
				</div>

				<button type="submit" class="btn btn-success">Modifier</button>
				<a href="<?php echo base_url()?>users/affichageUser" class="btn btn-primary">Retour</a>
				</form>
			</div>

		</div>
	</div>
	<?php include("include/footer.php");?>
</body>
</html>