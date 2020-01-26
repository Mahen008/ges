<!DOCTYPE html>
<html>
	<head>
		<title>editPatient</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebar.php");?>

	
	<div class="content">
		<div class="row">
			<div class="col-lg-8 offset-lg-2" style="margin-top: 60px;">
                        <h4 class="page-title">Modifier Patient</h4>
                    </div>
			<div class="col-sm-4" style="margin-left: 400px; margin-top: 0px;">
				<?php if($msg = $this->session->flashdata('message')): ?>
					<div class="btn-primary" style="line-height: 10px;" align="center">
						<?php echo $msg;?>
					</div>
				<?php endif; ?>

				<form method="post" action="<?php echo base_url()?>index.php/Patient/updatePatient/<?php echo $unPatient->id;?>" style="margin-top: 10px;">
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

				<div class="form-group">
					<label>Téléphone du proche</label>
				    <input type="text" name="phonepro" class="form-control" value="<?php echo set_value('phonepro',$unPatient->phoneProche);?>">
					<span class="text-danger"><?php echo form_error("phonepro");?></span>
				</div>

				<div class="form-check">

					<label class="custom-control custom-checkbox">OUI
					  <input type="radio" name="consult" value="<?php echo set_value('consult',$unPatient->consulter);?>">
					  <span class="checkmark"></span>
					</label>
					<label class="custom-control custom-checkbox">NON
					  <input type="radio" checked="checked" name="consult" value="<?php echo set_value('consult',$unPatient->consulter);?>">
					  <span class="checkmark"></span>
					</label>
		  			<span class="text-danger"><?php echo form_error("consult");?></span>
                 
                </div><br>

				<button type="submit" class="btn btn-success">Modifier</button>
				<a href="<?php echo base_url()?>index.php/Patient/affichPatient" class="btn btn-primary">Retour</a>
				</form>
			</div>

		</div>
		<!-- </div> -->
	</div>
	<?php include("include/footer.php");?>
</body>
</html>