
<!DOCTYPE html>
<html>
	<head>
		<title>affichListFicheMed</title>
		
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebar.php");?>

	<div class="page-wrapper">
		<!-- debut wrapper -->
		<divs>
				<!-- <?php include("include/sidebar.php");?> -->
			<!-- contenu de la page-->
			<div id="page-content-wrapper" >
	           <!-- debut card-->
	            <div class="card">

	                <div class="card-header" style="background-color: #ecefed; height: 50px;">
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">FICHE MEDICALE DES PATIENTS </h2>
	                </div>
	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">
	                    
		                <!-- debut table-->
			                <table class="table table-striped" id="table_datatable" >

			                    <thead style="background-color: #367fa9; color: #fff;">
			                        <tr>
			                            <th><b>Nom</b></th>
			                            <th><b>Prénom</b></th>
			                            
			                            <th><b>Actions</b></th>
			                        </tr>
			                    </thead>
			                    <tbody>

			                    		<?php foreach($affichCon as $al):?>
					                        <tr>
					                      
					                            <td><img width="28" height="28" src="<?php echo base_url()?>assets/img/user.jpg" class="rounded-circle m-r-5" alt=""><?php echo $al->nom; ?></td>
					                            <td><?php echo $al->prenom; ?></td>
					                           
					                            <td>
			                                		<div>
													    <a href="<?php echo base_url()?>index.php/Affichage/ficheMedical/<?php echo $al->id; ?>" class="btn btn-success" role="button" style="font-size: 1em;"><i class="fa fa-eye"></i> Voir</a>
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
		<!-- fin wrapalr -->
	</div>
	<?php include("include/footer.php");?>
</body>
</html>