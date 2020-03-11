<!DOCTYPE html>
<html>
	<head>
		<title>editPatient</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebarStock.php");?>

	
	<div class="content">
		<div class="row">
			<div class="col-lg-8 offset-lg-2" style="margin-top: 60px;">
                        <h4 class="page-title">Modifier un medicament</h4>
                    </div>
			<div class="col-sm-4" style="margin-left: 400px; margin-top: 0px;">

				<?php // if($msg = $this->session->flashdata('message')): ?>
					<!-- <div class="btn-primary" style="line-height: 10px;" align="center">
						<?php echo $msg;?>
					</div> -->
				<?php //endif; ?>

				<form method="post" action="<?php echo base_url()?>index.php/medicament/updateMedicament/<?php echo $unMedicament->idMedicament;?>" style="margin-top: 20px;">
				
				<div class="form-group">
					<label>Libellé</label>
					<input type="text" name="libelle" class="form-control" value="<?php echo set_value('libelle',$unMedicament->libelle);?>">
					<span class="text-danger"><?php echo form_error("libelle");?></span>
				</div>

				<div class="form-group">
					<label>Nombre détaillé</label>
					<input type="number" name="nbrDetail" class="form-control" value="<?php echo set_value('nbrDetail',$unMedicament->nbrDetail);?>">
					<span class="text-danger"><?php echo form_error("nbrDetail");?></span>
				</div>

				<button type="submit" class="btn btn-success">Modifier</button>
				<a href="<?php echo base_url()?>index.php/medicament/affichMedicament" class="btn btn-primary">Retour</a>
				</form>
			</div>

		</div>
		<!-- </div> -->
	</div>
	<?php include("include/footer.php");?>
	
</body>
</html>