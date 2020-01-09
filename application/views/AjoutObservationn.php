<!DOCTYPE html>
<html>
	<head>
		<title>AjoutObservationn</title>
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
				<label>Nom : <?php echo set_value('name',$unPatientObs->nom);?></label><br>
				<label>Date de naissance : <?php echo set_value('ddn',$unPatientObs->DDN);?></label><br>
				<label>Numéro téléphone : <?php echo set_value('phone',$unPatientObs->phone);?></label>
			</div>
			<div class="box" >
				<label>Age : </label>
			</div>
			<div class="box" >
				<label>Prenom : <?php echo set_value('fname',$unPatientObs->prenom);?></label><br>
				<label>Adresse : <?php echo set_value('adress',$unPatientObs->adresse);?></label><br>
				<label>Numéro téléphone : <?php echo set_value('phonepro',$unPatientObs->phoneProche);?></label>
			</div>	
		</div>
			<form method="post" action="<?php echo base_url()?>index.php/Observation/AjoutConsultation">
				      
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
					        	<input list="select" class="form-control" name="nephro">
										<datalist id="select">    
										  <option value="NEUPHROPATHIE DIABETIQUE"/>
										  <option value="NEUPHROPATHIE SELEROSE"/>
										</datalist>
										<span class="text-danger"><?php echo form_error("nephro");?></span>
							</td>
					        <td><input type="Date" name="dateDiag" class="form-control">
					        <span class="text-danger"><?php echo form_error("dateDiag");?></span></td>

					        <td><input type="Date" name="dateDebut" class="form-control"><span class="text-danger"><?php echo form_error("dateDebut");?></span></td>

					        <td><input type="text" name="hist" class="form-control"><span class="text-danger"><?php echo form_error("hist");?></span></td>

					        <td><input list="ant" name="ant" class="form-control">
					        	<datalist id="ant">    
								  <option value="HTA"/>
								  <option value="DIABETE"/>
								</datalist>
								<span class="text-danger"><?php echo form_error("ant");?></span>
					        </td>

					        <td><input type="text" name="como" class="form-control"><span class="text-danger"><?php echo form_error("como");?></span></td>
					        <td>
								<select list="Etat" type="" name="Etat" class="form-control">		       		
					        		<option value="BEG">BEG</option>
					        		<option value="ABEG">ABEG</option>
					        		<option value="AEG">AEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("Etat");?></span>
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
					  			<label class="custom-control custom-checkbox">OUI
								  <input type="radio" name="attenteGre" value="OUI">
								  <span class="checkmark"></span>
								</label>
								<label class="custom-control custom-checkbox">NON
								  <input type="radio" checked="checked" name="attenteGre" value="NON">
								  <span class="checkmark"></span>
								</label>
					  			<span class="text-danger"><?php echo form_error("attenteGre");?></span>
					  		</td>

					  		<td>
					  			<select list="groupSan" type="" name="groupSan" class="form-control">		       		
					        		<option value="A+">A+</option>
					        		<option value="B+">B+</option>
					        		<option value="AB+">AB+</option>
					        		<option value="O+">O+</option>
					        		<option value="A-">A-</option>
					        		<option value="B-">B-</option>
					        		<option value="AB-">BEG</option>
					        		<option value="O-">ABEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("groupSan");?></span></td>

					  		<td><input type="text" name="allergie" class="form-control"><span class="text-danger"><?php echo form_error("allergie");?></span></td>
					  	</tbody>
					  </table>
				      
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
								<select list="Etat" type="" name="vasc" class="form-control">		       		
					        		<option value="KT_fG">KT femorale Gauche</option>
					        		<option value="KT_fD">KT femorale Droite</option>
					        		<option value="KT_jG">KT jigulaire Gauche</option>
					        		<option value="KT_jD">KT jigulaire Droite</option>	
					        		<option value="KT_jigTun">KT jigulaire tunneliser</option>
					        		<option value="KT_jigCan">KT jigulaire canau</option>
					        		<option value="FAVG">FAV Gauche</option>
					        		<option value="FAVD">FAV Droite</option>
					        		<option value="radCephPr">radio cephalique proximal</option>
					        		<option value="brBr">branchio branchiale</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("vasc");?></span>
							</td>
					        <td><input type="Date" name="pose" class="form-control"><span class="text-danger"><?php echo form_error("pose");?></span></td>

					        <td><input type="Date" name="1ereUtil" class="form-control"><span class="text-danger"><?php echo form_error("1ereUtil");?></span></td>

					        <td><input type="Date" name="Aablation" class="form-control"><span class="text-danger"><?php echo form_error("Aablation");?></span></td>

					        <td><input type="text" name="coms" class="form-control"><span class="text-danger"><?php echo form_error("coms");?></span></td>
					      </tr>
					      
					    </tbody>
					  </table>
				      
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

					        <td><input type="Date" name="DateSerVHC" class="form-control"></td>
					        <span class="text-danger"><?php echo form_error("DateSerVHC");?></span>
					        <td>

					        	<select class="form-control" name="statutSerVHC">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutSerVHC");?></span>
					        </td>

					        <td><input type="Date" name="DateSerVBH" class="form-control"><span class="text-danger"><?php echo form_error("DateSerVBH");?></span></td>

					        <td>
					        	<select class="form-control" name="statutSerVBH">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutSerVBH");?></span>
					        </td>

					        <td><input type="Date" name="DateSerHIV" class="form-control"><span class="text-danger"><?php echo form_error("DateSerHIV");?></span></td>

					        <td>
					        	<select class="form-control" name="statutSerHIV">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutSerHIV");?></span>
					        </td>

					        <td><input type="Date" name="DateSerCMV" class="form-control"><span class="text-danger"><?php echo form_error("DateSerCMV");?></span></td>

					        <td>
					        	<select class="form-control" name="statutSerCMV">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutSerCMV");?></span>
					        </td>

					        <td><input type="Date" name="DateSerEBV" class="form-control"><span class="text-danger"><?php echo form_error("DateSerEBV");?></span></td>

					        <td>
					        	<select class="form-control" name="statutSerEBV">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutSerEBV");?></span>
					        </td> 
					      </tr>

					      <tr>
					      	<td>Age</td>
					      	<td><input type="Date" name="DateAgeVHC" class="form-control"><span class="text-danger"><?php echo form_error("DateAgeVHC");?></span></td>

					        <td>
					        	<select class="form-control" name="statutAgeVHC">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutAgeVHC");?></span>
					        </td>

					        <td><input type="Date" name="DateAgeVHB" class="form-control"><span class="text-danger"><?php echo form_error("DateAgeVHB");?></span></td>

					        <td>
					        	<select class="form-control" name="statutAgeVHB">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutAgeVHB");?></span>
					        </td>

					        <td><input type="Date" name="DateAgeHIV" class="form-control"><span class="text-danger"><?php echo form_error("DateAgeHIV");?></span></td>

					        <td>
					        	<select class="form-control" name="statutAgeHIV">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutAgeHIV");?></span>
					        </td>

					        <td><input type="Date" name="DateAgeCMV" class="form-control"><span class="text-danger"><?php echo form_error("DateAgeCMV");?></span></td>

					        <td>
					        	<select class="form-control" name="statutAgeCMV">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutAgeCMV");?></span>
					        </td>

					        <td><input type="Date" name="DateAgeEBV" class="form-control"><span class="text-danger"><?php echo form_error("DateAgeEBV");?></span></td>

					        <td>
					        	<select class="form-control" name="statutAgeEBV">
					        		<option value="">POS</option>
					        		<option value="">NEG</option>
					        	</select>
					        	<span class="text-danger"><?php echo form_error("statutAgeEBV");?></span>
					        </td>
					      </tr>
					      
					    </tbody>
					  </table>
					  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Ajouter</button>
						<a href="<?php echo base_url()?>index.php/Observation/affichObservation" class="btn btn-success"><span class="glyphicon glyphicon-step-backward"></span> Retour</a>
			  			
				</form>
			</div>
			
</body>
</html>