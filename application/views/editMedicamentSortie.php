<!DOCTYPE html>
<html>
	<head>
		<title>edit medicament sortie</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebarDial.php");?>

	
	<div class="content">
		<div class="row">
			<div class="col-lg-8 offset-lg-2" style="margin-top: 60px;">
                        <h4 class="page-title">Modifier un medicament sortie</h4>
                    </div>
			<div class="col-sm-4" style="margin-left: 400px; margin-top: 0px;">

				<?php // if($msg = $this->session->flashdata('message')): ?>
					<!-- <div class="btn-primary" style="line-height: 10px;" align="center">
						<?php echo $msg;?>
					</div> -->
				<?php //endif; ?>

				<form method="post" action="<?php echo base_url()?>index.php/medicamentSortie/updateMedicamentSortie/<?php echo $unMedicamentSortie->idMedicamentSorti;?>" style="margin-top: 20px;">
				
				<div class="form-group">
					<label>Date de sortie</label>
					<input type="date" name="dateSortieMed" class="form-control" value="<?php echo set_value('dateSortieMed',$unMedicamentSortie->dateSortieMed);?>">
					<span class="text-danger"><?php echo form_error("dateSortieMed");?></span>
				</div>

				<div class="form-group">
					<label>Quantité sortie</label>
					<input type="number" name="qteSortie" class="form-control" value="<?php echo set_value('qteSortie',$unMedicamentSortie->qteSortie);?>">
					<span class="text-danger"><?php echo form_error("qteSortie");?></span>
				</div>

				<button type="submit" class="btn btn-success">Modifier</button>
				<a href="<?php echo base_url()?>index.php/medicamentSortie/affichMedicamentSortie" class="btn btn-primary">Retour</a>
				</form>
			</div>

		</div>
		<!-- </div> -->
	</div>
	<?php include("include/footer.php");?>
	
</body>
</html>