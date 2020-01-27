<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ajout</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dist/css/bootstrap.css">
</head>
<body>
	<!-- <div class="jumbotron"></div> -->
		<div class="row">
			<div class="col-sm-4" style="margin-left: 200px;">

				<form method="post" action="<?php echo base_url()?>checkbox/ajout">
				<div class="form-group">
					<label>Checkbox</label>

					<label>Congé</label>
					<input type="checkbox" name="enCongé" id="check">

					<label>Pas en Congé</label>
					<input type="checkbox" name="enCongé" id="notCheck">

					<span class="text-danger"><?php echo form_error("enCongé");?></span>
				</div>

				<button type="submit" class="btn btn-success">Ajouter</button>
		
				</form>
			</div>

		</div>
		<!-- Small modal -->
		<!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button> -->

		<!-- div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-sm">
		    <div class="modal-content">
		      Veuillez choisir un seul choix
		    </div>
		  </div>
		</div> -->

	<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Information</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	          <h5>Veuillez choisir un seul choix</h5>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		$(function(){

			let check = $('#check');notCheck = $('#notCheck');
		
			check.on('click',function(){
				if(this.checked){
					$(this).val("1");
				}
				notCheck.on('click',function(){
					// alert('veuillez choisir un seul option');
					$('#infoModal').modal('show');
				});
			});

			notCheck.on('click',function(){
				if(this.checked){
					$(this).val("0");
				}
				check.on('click',function(){
					// alert('veuillez choisir un seul option');
					$('#infoModal').modal('show');
				});
			});

		});
	</script> 
</body>
</html>