<!DOCTYPE html>
<html>
	<head>
		<title>edit medicament entree</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebarStock.php");?>

	
	<div class="content">
		<div class="row">
			<div class="col-lg-8 offset-lg-2" style="margin-top: 60px;">
                        <h4 class="page-title">Modifier un medicament entrée</h4>
                    </div>
			<div class="col-sm-4" style="margin-left: 400px; margin-top: 0px;">

				<?php // if($msg = $this->session->flashdata('message')): ?>
					<!-- <div class="btn-primary" style="line-height: 10px;" align="center">
						<?php echo $msg;?>
					</div> -->
				<?php //endif; ?>

				<form method="post" action="<?php echo base_url()?>index.php/medicamentEntree/updateMedicamentEntree/<?php echo $unMedicamentEntree->idMedEntree;?>" style="margin-top: 20px;">
				
				<!-- <div class="form-group">
					<label>Libellé</label>
					<input type="text" name="libelle" class="form-control" value="<?php echo set_value('libelle',$unMedicamentEntree->libelle);?>">
					<span class="text-danger"><?php echo form_error("libelle");?></span>
				</div> -->

				<div class="form-group">
					<label>Date d'entrée</label>
					<input type="date" name="dateEntreeMed" class="form-control" value="<?php echo set_value('dateEntreeMed',$unMedicamentEntree->dateEntreeMed);?>">
					<span class="text-danger"><?php echo form_error("dateEntreeMed");?></span>
				</div>

				<div class="form-group">
					<label>Quantité entrée</label>
					<input type="number" name="qteEntree" class="form-control" value="<?php echo set_value('qteEntree',$unMedicamentEntree->qteEntree);?>">
					<span class="text-danger"><?php echo form_error("qteEntree");?></span>
				</div>

				<div class="form-group">
					<label>Prix</label>
					<input type="number" name="prixMed" class="form-control" value="<?php echo set_value('prixMed',$unMedicamentEntree->prixMed);?>">
					<span class="text-danger"><?php echo form_error("prixMed");?></span>
				</div>

				<div class="form-group">
					<label>Paquet</label>
					<input type="number" name="paquet" class="form-control" value="<?php echo set_value('paquet',$unMedicamentEntree->paquet);?>">
					<span class="text-danger"><?php echo form_error("paquet");?></span>
				</div>


				<button type="submit" class="btn btn-success">Modifier</button>
				<a href="<?php echo base_url()?>index.php/medicamentEntree/affichMedicamentEntree" class="btn btn-primary">Retour</a>
				</form>
			</div>

		</div>
		<!-- </div> -->
	</div>
	<?php include("include/footer.php");?>
	
</body>
</html>