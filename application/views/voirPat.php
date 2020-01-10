<!DOCTYPE html>
<html>
	<head>
		<title>AjoutObservation</title>
	</head>
	<style type="text/css">

		.container{
			display: flex;
			flex-direction: row-reverse;
			}
		h3{
			text-align: center;
			}
		#menu2{
			text-align: left;
			margin-left: 0px;
			margin-top: 10px;
			margin-right: 10%;
			
			display: inline-block;
			position: fixed;
			left: 0%;
			width: 100%;	
		}

		
	</style>
<body>
	<?php include("include/header.php");?>
	
	<h3>OBSERVATION MEDICAL</h2>
	<h4>ETAT CIVIL</h4>

		<div class="container">
		<!-- <?php include("include/sidebar.php");?> -->
		
			<div class="box">
				<label>Nom : <?php echo set_value('name',$affichConsult->nom);?></label><br>
				<label>Date de naissance : <?php echo set_value('ddn',$affichConsult->DDN);?></label><br>
				<label>Numéro téléphone : <?php echo set_value('phone',$affichConsult->phone);?></label>
			</div>
			<div class="box" >
				<label>Age :  <?php echo set_value('ddn',$affichConsult->age);?></label>
			</div>
			<div class="box" >
				<label>Prenom : <?php echo set_value('fname',$affichConsult->prenom);?></label><br>
				<label>Adresse : <?php echo set_value('adress',$affichConsult->adresse);?></label><br>
				<label>Numéro téléphone : <?php echo set_value('phonepro',$affichConsult->phoneProche);?></label>
			</div>	
		</div>
				  <!-- Tab panes -->
				  <div class="" class="tab-content">
				      <h4>RESUME DE L'OBSERVATION</h4>
				      <table class="table" border="solid" position: fixed; left: 0%;>
					    <thead class="thead-dark">
					      <tr>
					        <th>Neuphropathie initiale</th>
					        <th>Date du diagnostic</th>
					        <th>Début d'hémodialyse</th>
					        <th>Histoire de la maladie</th>
					        <th>Antécédents</th>
					        <th>Comorbités</th>
					        <th>Etat général actuel</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<br>
					    
					      <tr>
					        <td>
					        	<?php echo set_value('ddn',$affichConsult->neuphroInit);?>
							</td>
					        <td>
					        	<?php echo set_value('ddn',$affichConsult->dateDiag);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->debutHemo);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->histMaladie);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->Antecedents);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->Comorbidites);?>
					        </td>
					        <td>
								<?php echo set_value('ddn',$affichConsult->etatGenAct);?>
					        </td>
					      </tr>
					      
					    </tbody>
					  </table>

					  <table class="table" border="solid">
					  	<thead class="thead-dark">
					  		<th>En attente de greffe</th>
					  		<th>Groupe sanguin</th>
					  		<th>Allergies</th>
					  	</thead>
					  	<tbody>

					  		<td>
					  			<?php echo set_value('ddn',$affichConsult->attenteGref);?>
					  		</td>

					  		<td>
					  			<?php echo set_value('ddn',$affichConsult->groupSang);?>	
					  		</td>

					  		<td>
					  			<?php echo set_value('ddn',$affichConsult->allergies);?>
					  		</td>
					  	</tbody>
					  </table>

				      <h4>ACCES VASCULAIRE</h4>
				      <table class="table" border="solid">
					    <thead class="thead-dark">
					      <tr>
					        <th>Accès vasculaire</th>
					        <th>Pose ou confection</th>
					        <th>1ere utilisation</th>
					        <th>Arrêt et ablation</th>
					        <th>commentaire</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<br>
					    
					      <tr>
					        <td>
								<?php echo set_value('ddn',$affichConsult->acceVasc);?>
							</td>
					        <td>
					        	<?php echo set_value('ddn',$affichConsult->pose);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->PremiereUse);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->Arret);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->coms);?>
					        </td>
					      </tr>
					      
					    </tbody>
					  </table>
				      
				      <h4>STATUT VIRAL</h4>
				      <table class="table" border="solid">
					    <thead  class="thead-dark">
					      <tr>
					        <th rowspan="2">VIRUS</th>
					        <th colspan="2">VHC</th>
					        <th colspan="2">VHB</th>
					        <th colspan="2">HIV</th>
					        <th colspan="2">CMV</th>
					        <th colspan="2">EBV</th>
					      </tr>
					      <tr>
					      	<th>DATE</th>
					      	<th>STATUS</th>
					      	<th>DATE</th>
					      	<th>STATUS</th>
					      	<th>DATE</th>
					      	<th>STATUS</th>
					      	<th>DATE</th>
					      	<th>STATUS</th>
					      	<th>DATE</th>
					      	<th>STATUS</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<br>
					    
					      <tr>
					        <td>SELEROSE</td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->DatSerVHC);?>
					        <td>
								<?php echo set_value('ddn',$affichConsult->statSerVHC);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->DatSerVBH);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->statSerVBH);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->DatSerHIV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->statSerHIV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->DatSerCMV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->statSerCMV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->DatSerEBV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->statSerEBV);?>
					        </td> 
					      </tr>

					      <tr>
					      	<td>Age</td>

					      	<td>
					      		<?php echo set_value('ddn',$affichConsult->DatAgeVHC);?>
					      	</td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->statAgeVHC);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->DatAgeVHB);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->statAgeVHB);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->DatAgeHIV);?>
					        	
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->statAgeHIV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->DatAgeCMV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->statAgeCMV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->DatAgeEBV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichConsult->statAgeEBV);?>
					        </td>
					      </tr>
					      
					    </tbody>
					  </table>
					  <button type="" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Ajouter</button>
						<a href="<?php echo base_url()?>index.php/Observation/affichObservation" class="btn btn-success"><span class="glyphicon glyphicon-step-backward"></span> Retour</a>
						
				  
			  			
			</div>
			
</body>
</html>