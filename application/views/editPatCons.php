<!DOCTYPE html>
<html>
	<head>
		<title>editer consultation</title>
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
 	<?php include("include/headerApp.php");?>
 	<?php include("include/sidebar.php");?>

	<div class="page-wrapper">
		<h3 style="margin-top: 20px;">OBSERVATION MEDICAL</h2>
			<h4>ETAT CIVIL</h4>
							
				<form method="post" action="<?php echo base_url()?>index.php/Observation/updateConsultation/<?php echo $patCons->idOb;?>" style="margin-top: 20px;">
					
			
					  <!-- Tab panes -->
					  <div class="tab-content">
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
						    
						      <tr>
						        <td>
						        	<input list="select" class="form-control" name="nephro" value="<?php echo set_value('nephro',$patCons->neuphroInit);?>">
											<datalist id="select">    
											  <option value="NEUPHROPATHIE DIABETIQUE"/>
											  <option value="NEUPHROPATHIE SELEROSE"/>
											</datalist>
											<span class="text-danger"><?php echo form_error("nephro");?></span>
								</td>
						        <td><input type="Date" name="dateDiag" class="form-control" value="<?php echo set_value('dateDiag',$patCons->dateDiag);?>">
						        <span class="text-danger"><?php echo form_error("dateDiag");?></span></td>

						        <td><input type="Date" name="dateDebut" class="form-control" value="<?php echo set_value('dateDebut',$patCons->debutHemo);?>"><span class="text-danger"><?php echo form_error("dateDebut");?></span></td>

						        <td><input type="text" name="hist" class="form-control" value="<?php echo set_value('hist',$patCons->histMaladie);?>"><span class="text-danger"><?php echo form_error("hist");?></span></td>

						        <td><input list="ant" name="ant" class="form-control" value="<?php echo set_value('ant',$patCons->Antecedents);?>">
						        	<datalist id="ant">    
									  <option value="HTA"/>
									  <option value="DIABETE"/>
									</datalist>
									<span class="text-danger"><?php echo form_error("ant");?></span>
						        </td>

						        <td><input type="text" name="como" class="form-control" value="<?php echo set_value('como',$patCons->Comorbidites);?>"><span class="text-danger"><?php echo form_error("como");?></span></td>
						        <td>
									<select list="Etat" type="" name="Etat" class="form-control" value="<?php echo set_value('Etat',$patCons->etatGenAct);?>">		       		
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
						  			<!-- <label class="custom-control custom-checkbox">OUI
									  <input type="radio" name="attenteGre" value="OUI">
									  <span class="checkmark"></span>
									</label>
									<label class="custom-control custom-checkbox">NON
									  <input type="radio" checked="checked" name="attenteGre" value="NON">
									  <span class="checkmark"></span>
									</label>
						  			<span class="text-danger"><?php echo form_error("attenteGre");?></span> -->
						  		</td>

						  		<td>
						  			<select list="groupSan" type="" name="groupSan" class="form-control" value="<?php echo set_value('groupSan',$patCons->groupSang);?>">		       		
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

						  		<td><input type="text" name="allergie" class="form-control" value="<?php echo set_value('allergie',$patCons->allergies);?>"><span class="text-danger"><?php echo form_error("allergie");?></span></td>
						  	</tbody>
						  </table>
						<br>
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
						    
						      <tr>
						        <td>
									<select list="Etat" type="" name="vasc" class="form-control" value="<?php echo set_value('vasc',$patCons->acceVasc);?>">		       		
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
						        <td><input type="Date" name="pose" class="form-control" value="<?php echo set_value('pose',$patCons->pose);?>"><span class="text-danger"><?php echo form_error("pose");?></span></td>

						        <td><input type="Date" name="PremiereUtil" class="form-control" value="<?php echo set_value('PremiereUtil',$patCons->PremiereUse);?>"><span class="text-danger"><?php echo form_error("PremiereUtil");?></span></td>

						        <td><input type="Date" name="Aablation" class="form-control" value="<?php echo set_value('Aablation',$patCons->Arret);?>"><span class="text-danger"><?php echo form_error("Aablation");?></span></td>

						        <td><input type="text" name="coms" class="form-control" value="<?php echo set_value('coms',$patCons->coms);?>"><span class="text-danger"><?php echo form_error("coms");?></span></td>
						      </tr>
						      
						    </tbody>
						  </table>
					    <br>
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
						    
						      <tr>
						        <td>Selerose</td>

						        <td><input type="Date" name="DateSerVHC" class="form-control" value="<?php echo set_value('DateSerVHC',$patCons->DatSerVHC);?>"></td>
						        <span class="text-danger"><?php echo form_error("DateSerVHC");?></span>
						        <td>

						        	<select class="form-control" name="statutSerVHC" value="<?php echo set_value('statutSerVHC',$patCons->statSerVHC);?>">
						        		<option value="POS">POS</option>
						        		<option value="NEG">NEG</option>
						        	</select>
						        	<span class="text-danger"><?php echo form_error("statutSerVHC");?></span>
						        </td>

						        <td><input type="Date" name="DateSerVBH" class="form-control" value="<?php echo set_value('DateSerVBH',$patCons->DatSerVBH);?>"><span class="text-danger"><?php echo form_error("DateSerVBH");?></span></td>

						        <td>
						        	<select class="form-control" name="statutSerVBH" value="<?php echo set_value('statutSerVBH',$patCons->statSerVBH);?>">
						        		<option value="POS">POS</option>
						        		<option value="NEG">NEG</option>
						        	</select>
						        	<span class="text-danger"><?php echo form_error("statutSerVBH");?></span>
						        </td>

						        <td><input type="Date" name="DateSerHIV" class="form-control" value="<?php echo set_value('DateSerHIV',$patCons->DatSerHIV);?>"><span class="text-danger"><?php echo form_error("DateSerHIV");?></span></td>

						        <td>
						        	<select class="form-control" name="statutSerHIV" value="<?php echo set_value('statutSerHIV',$patCons->statSerHIV);?>">
						        		<option value="POS">POS</option>
						        		<option value="NEG">NEG</option>
						        	</select>
						        	<span class="text-danger"><?php echo form_error("statutSerHIV");?></span>
						        </td>

						        <td><input type="Date" name="DateSerCMV" class="form-control" value="<?php echo set_value('DateSerCMV',$patCons->DatSerCMV);?>"><span class="text-danger"><?php echo form_error("DateSerCMV");?></span></td>

						        <td>
						        	<select class="form-control" name="statutSerCMV" value="<?php echo set_value('DateSerEBV',$patCons->statSerCMV);?>">
						        		<option value="POS">POS</option>
						        		<option value="NEG">NEG</option>
						        	</select>
						        	<span class="text-danger"><?php echo form_error("DateSerEBV");?></span>
						        </td>

						        <td><input type="Date" name="DateSerEBV" class="form-control" value="<?php echo set_value('DateSerEBV',$patCons->DatSerEBV);?>"><span class="text-danger"><?php echo form_error("DateSerEBV");?></span></td>

						        <td>
						        	<select class="form-control" name="statutSerEBV" value="<?php echo set_value('statutSerEBV',$patCons->statSerEBV);?>">
						        		<option value="POS">POS</option>
						        		<option value="NEG">NEG</option>
						        	</select>
						        	<span class="text-danger"><?php echo form_error("statutSerEBV");?></span>
						        </td> 
						      </tr>

						      <tr>
						      	<td>Age</td>
						      	<td><input type="Date" name="DateAgeVHC" class="form-control" value="<?php echo set_value('DateAgeVHC',$patCons->DatAgeVHC);?>"><span class="text-danger"><?php echo form_error("DateAgeVHC");?></span></td>

						        <td>
						        	<select class="form-control" name="statutAgeVHC" value="<?php echo set_value('statutAgeVHC',$patCons->statAgeVHC);?>">
						        		<option value="POS">POS</option>
						        		<option value="NEG">NEG</option>
						        	</select>
						        	<span class="text-danger"><?php echo form_error("statutAgeVHC");?></span>
						        </td>

						        <td><input type="Date" name="DateAgeVHB" class="form-control" value="<?php echo set_value('DateAgeVHB',$patCons->DatAgeVHB);?>"><span class="text-danger"><?php echo form_error("DateAgeVHB");?></span></td>

						        <td>
						        	<select class="form-control" name="statutAgeVHB" value="<?php echo set_value('statutAgeVHB',$patCons->statAgeVHB);?>">
						        		<option value="POS">POS</option>
						        		<option value="NEG">NEG</option>
						        	</select>
						        	<span class="text-danger"><?php echo form_error("statutAgeVHB");?></span>
						        </td>

						        <td><input type="Date" name="DateAgeHIV" class="form-control" value="<?php echo set_value('DateAgeHIV',$patCons->DatAgeHIV);?>"><span class="text-danger"><?php echo form_error("DateAgeHIV");?></span></td>

						        <td>
						        	<select class="form-control" name="statutAgeHIV" value="<?php echo set_value('statutAgeHIV',$patCons->statAgeHIV);?>">
						        		<option value="POS">POS</option>
						        		<option value="NEG">NEG</option>
						        	</select>
						        	<span class="text-danger"><?php echo form_error("statutAgeHIV");?></span>
						        </td>

						        <td><input type="Date" name="DateAgeCMV" class="form-control" value="<?php echo set_value('DateAgeCMV',$patCons->DatAgeCMV);?>"><span class="text-danger"><?php echo form_error("DateAgeCMV");?></span></td>

						        <td>
						        	<select class="form-control" name="statutAgeCMV" value="<?php echo set_value('statutAgeCMV',$patCons->statAgeCMV);?>">
						        		<option value="POS">POS</option>
						        		<option value="NEG">NEG</option>
						        	</select>
						        	<span class="text-danger"><?php echo form_error("statutAgeCMV");?></span>
						        </td>

						        <td><input type="Date" name="DateAgeEBV" class="form-control" value="<?php echo set_value('DateAgeEBV',$patCons->DatAgeEBV);?>"><span class="text-danger"><?php echo form_error("DateAgeEBV");?></span></td>

						        <td>
						        	<select name="statutAgeEBV" class="form-control" value="<?php echo set_value('statutAgeEBV',$patCons->statAgeEBV);?>">
								    	<option value="POS">POS</option>
								    	<option value="NEG">NEG</option>	
								    </select>
								    <span class="text-danger"><?php echo form_error("statutAgeEBV");?></span>
						        </td>

										    
										
						      </tr>
						      				<!-- <select list="Etat" type="" name="Etat" class="form-control">		       		
								        		<option value="BEG">BEG</option>
								        		<option value="ABEG">ABEG</option>
								        		<option value="AEG">AEG</option>
								        	</select> -->
						    </tbody>
						  </table>
						  <button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-plus"></span>Modifier</button>
							<a href="<?php echo base_url()?>index.php/Observation/affichListPat" class="btn btn-success"><span class="glyphicon glyphicon-step-backward"></span> Retour</a>
						
					  </div>
				  			
					</form>
				</div>
	</div>	
</body>
<?php include("include/footer.php");?>
</html>