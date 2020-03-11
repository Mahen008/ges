<!DOCTYPE html>
<html>
	<head>
		<title>etat de stock</title>
	</head>
<body>
	<?php include("include/header.php");?>
 	<?php include("include/headerApp.php");?>
	<?php include("include/sidebarStock.php");?>
	<?php include("include/footer.php");?>

	<div class="page-wrapper" id="container">
		<div id="wrapper">
	
			<div id="page-content-wrapper" >
           
	           <!-- debut card-->
	            <div class="card">

	                <div class="card-header" style="background-color: #ecefed;height: 50px;">
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">ETAT DES STOCKS</h2>
	                </div>

	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">

		                <!-- debut table-->
		                <table class="table table-striped" id="table_datatable" >

		                    <thead style="background-color: #367fa9; color: #fff;">
		                        <tr>
		                            <th>Medicament</th>
		                            <th>Quantité initiale</th>
		                            <th>Quantité entrée</th>
		                            <th>Quantité sortie</th>
		                            <th>Stock</th>
		                        </tr>
		                    </thead>

		                    <tbody>

		                    		<?php foreach($stock as $row):?>
				                        <tr>
				                     
				                            <td><img width="28" height="28" src="<?php echo base_url()?>assets/img/logou.png" class="rounded-circle m-r-5" alt=""><?php echo $row->libelle; ?></td>
				                            <td><?php echo $row->nbrDetail; ?></td>
				                            <td><?php echo $row->qteEntree ; ?></td>
				                            <td><?php echo $row->qteSortie; ?></td>
				                            <td><?php echo $row->stock; ?></td>
				                           
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
	
	<?php include("include/footer.php");?>
</body>
</html>