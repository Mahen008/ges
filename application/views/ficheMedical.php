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
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebar.php");?>
	<div class="page-wrapper" id="">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Fiche Medical</h4>
                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-sm">
                            <!-- <button class="btn btn-white">CSV</button> -->
                            <button class="btn btn-white" onclick='window.print();'><i class="fa fa-print fa-lg"></i> PDF</button>
                            <!-- <button class="btn btn-white"> Print</button> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="payslip-title">OBSERVATION MEDICAL</h4>
                            <div class="row">
                                <div class="col-sm-6 m-b-20">
                                    <img src="<?php echo base_url()?>assets/img/logo2.png" class="inv-logo" alt="">
                                    <ul class="list-unstyled mb-0">
                                        <li>GASIKARA EXPLORATION SERVICE</li>
                                        <li>Lot III/10 CA MANAJARA</li>
                                        <li>101 ANTANANARIVO</li>
                                        <li>(+261) 34 17 612 27</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 m-b-20">
                                    <div class="invoice-details">
                                        <h3 class="text-uppercase">fiche medicale</h3>
                                        <ul class="list-unstyled">
                                            <li>Fiche Mois: <span>Janvier, 2020</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 m-b-20">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5 class="mb-0"><strong>ETAT CIVIL</strong></h5></li>
                                        <li><span><?php echo set_value('name',$affichCons->nom);?> </span> <?php echo set_value('fname',$affichCons->prenom);?>, <?php echo set_value('ddn',$affichCons->age);?> Ans</li>
                                        <li><?php echo set_value('adress',$affichCons->adresse);?></li>
                                        <li><?php echo set_value('phone',$affichCons->phone);?>, <?php echo set_value('phonepro',$affichCons->phoneProche);?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <h4 class="m-b-10"><strong>RESUME DE L'OBSERVATION</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Neuphropathie initiale</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->neuphroInit);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Date du diagnostic</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->dateDiag);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Début d'hémodialyse</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->debutHemo);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Histoire de la maladie</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->histMaladie);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Antécédents</strong> <span class="float-right"><strong><?php echo set_value('ddn',$affichCons->Antecedents);?></strong></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Comorbités</strong> <span class="float-right"><strong><?php echo set_value('ddn',$affichCons->Comorbidites);?></strong></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Etat général actuel</strong> <span class="float-right"><strong><?php echo set_value('ddn',$affichCons->etatGenAct);?></strong></span></td>
                                                </tr>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h4 class="m-b-10"><strong>TRANSPLANTATION</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td><strong>En attente de greffe</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->attenteGref);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Groupe sanguin</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->groupSang);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Allergies</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->allergies);?></span></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h4 class="m-b-10"><strong>ACCES VASCULAIRE</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Accès vasculaire</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->acceVasc);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Pose ou confection</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->pose);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>1ere utilisation</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->PremiereUse);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Arrêt et ablation</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->Arret);?></span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>commentaire</strong> <span class="float-right"><?php echo set_value('ddn',$affichCons->coms);?></span></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>
				      <h4  class="m-b-10"><strong>STATUT VIRAL</strong></h4>
				      <table class="table table-bordered">
					    <thead>
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
					        	<?php echo set_value('ddn',$affichCons->DatSerVHC);?>
					        <td>
								<?php echo set_value('ddn',$affichCons->statSerVHC);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->DatSerVBH);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->statSerVBH);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->DatSerHIV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->statSerHIV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->DatSerCMV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->statSerCMV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->DatSerEBV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->statSerEBV);?>
					        </td> 
					      </tr>

					      <tr>
					      	<td>Age</td>

					      	<td>
					      		<?php echo set_value('ddn',$affichCons->DatAgeVHC);?>
					      	</td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->statAgeVHC);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->DatAgeVHB);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->statAgeVHB);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->DatAgeHIV);?>
					        	
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->statAgeHIV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->DatAgeCMV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->statAgeCMV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->DatAgeEBV);?>
					        </td>

					        <td>
					        	<?php echo set_value('ddn',$affichCons->statAgeEBV);?>
					        </td>
					      </tr>
					      
					    </tbody>
					  </table>
					  </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>


					  <button type="" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Ajouter</button>
						<a href="<?php echo base_url()?>index.php/Observation/affichListPat" class="btn btn-success"><span class="glyphicon glyphicon-step-backward"></span> Retour</a>
						
				  
			  			
			</div>
	<?php include("include/footer.php");?>	
	<script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
            } );
         
            table.buttons().container()
                .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
        } );
    </script>		
</body>
</html>