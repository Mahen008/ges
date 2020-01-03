<!DOCTYPE html>
<html>
	<head>
		<title>editPatient</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<div class="container">
		<!-- <?php include("include/sidebar.php");?> -->

		<div class="row">
			<div class="col-sm-4" style="margin-left: 200px;">
				<?php if($msg = $this->session->flashdata('message')): ?>
					<div class="btn-primary" style="line-height: 30px;" align="center">
						<?php echo $msg;?>
					</div>
				<?php endif; ?>

				<form method="post" action="<?php echo base_url()?>index.php/Patient/updatePatient/<?php echo $unPatient->id;?>" style="margin-top: 20px;">
				<div class="form-group">
					<label>Nom</label>
					<input type="text" name="name" class="form-control" value="<?php echo set_value('name',$unPatient->nom);?>">
					<span class="text-danger"><?php echo form_error("name");?></span>
				</div>

				<div class="form-group">
					<label>Prenom</label>
					<input type="text" name="fname" class="form-control" value="<?php echo set_value('fname',$unPatient->prenom);?>">
					<span class="text-danger"><?php echo form_error("fname");?></span>
				</div>

				<div class="form-group">
					<label>Date de naissance</label>
			        <input type="date" name="ddn" class="form-control" value="<?php echo set_value('ddn',$unPatient->DDN);?>">
					<span class="text-danger"><?php echo form_error("ddn");?></span>
				</div>

				<div class="form-group">
					<label>adresse</label>
				    <input type="text" name="adress" class="form-control" value="<?php echo set_value('adress',$unPatient->adresse);?>">
					<span class="text-danger"><?php echo form_error("adress");?></span>
				</div>

				<div class="form-group">
					<label>Téléphone</label>
				    <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone',$unPatient->phone);?>">
					<span class="text-danger"><?php echo form_error("phone");?></span>
				</div>

				<div class="form-group">
					<label>Téléphone du proche</label>
				    <input type="text" name="phonepro" class="form-control" value="<?php echo set_value('phonepro',$unPatient->phoneProche);?>">
					<span class="text-danger"><?php echo form_error("phonepro");?></span>
				</div>

				<button type="submit" class="btn btn-success">Modifier</button>
				<a href="<?php echo base_url()?>index.php/Patient/affichPatient" class="btn btn-primary">Retour</a>
				</form>
			</div>

		</div>
	</div>
</body>
</html>