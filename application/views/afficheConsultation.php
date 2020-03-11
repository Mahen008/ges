<!DOCTYPE html>
<html>
	<head>
		<title>consultation</title>
	</head>
<body>
	<?php include("include/header.php");?>
	<?php include("include/headerApp.php");?>
	<?php include("include/sidebarDial.php");?>


	<div class="page-wrapper" id="container">
		<div id="wrapper">
	
			<div id="page-content-wrapper" >
           
	           <!-- debut card-->
	            <div class="card">

	                <div class="card-header" style="background-color: #ecefed;height: 50px;">
	                    <h2 align="center" style="color: #000;font-size: 1.5em;">CONFIRMATION DES CONSULTATIONS</h2>
	                </div>

	                <!-- debut card body-->
	                <div class="card-body">
	                	<!-- debut container-fluid-->
	                    <div class="container-fluid">

	                <!-- <div class="col-sm-8 col-9 text-right m-b-20" style="margin-left: 30%; margin-top: 0px;">
                        <a data-toggle="modal" data-target="#exampleModalLong" class="btn btn btn-primary btn-rounded float-right active"><i class="fa fa-plus"></i>Add Consultation</a>
                    </div> -->
                    
		                <!-- fin du modal ajout bon d'entree-->
		                <!-- debut table-->
		                <table class="table table-striped" id="table_datatable" >

		                    <thead style="background-color: #367fa9; color: #fff;">
		                        <tr>
		                            <th style="display:none;">Id</th>
		                            <th>Nom et Prénom</th>
		                            <th>Consultation</th>
                                    
		                            <th>Actions</th>
		                        </tr>
		                    </thead>

		                    <tbody>
                                <?php foreach($affich as $row): ?>
		                    		
				                        <tr>
                                            <td style="display:none;">
				                                <?php echo $row->idPatient; ?>
											</td>
				                            <td>
                                                <img width="28" height="28" src="<?php echo base_url()?>assets/img/user.jpg" class="rounded-circle m-r-5" alt="">
                                                <?php echo $row->nom; ?>
                                                <?php echo $row->prenom; ?>
                                            </td>

			                                <?php if( $row->consulter == '1'): ?>
			                            	<td><span class="custom-badge status-blue">confirmé</span></td>
				                            <?php else: ?>
				                            	<td><span class="custom-badge status-red">non confirmé</span></td>
				                            <?php endif ?>
                                            
                                            
				                            <td>
                                                <button type="button"  class="btn btn-info btnConsulter"><b><i class="fa fa-check"></i></b></button>
                                            </td>
                                            
                                            
											</div>
				                            </td>
				                        </tr>
                                <?php endforeach ?>	
			                        
	                    </tbody>

		                </table>
                        <!-- fin du table-->
                        
                        <!--  Modal d editer consultation -->
                        <div class="modal fade" id="modalEditer" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Consultation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo base_url("index.php/Patient/user_action")?>" method="post" id="editForm">
                                            <input type="checkbox" name="consulté" class="cochage">
                                            <label>Consulté</label>
                                            <span class="text-danger"><?php echo form_error("consulté");?></span>
											
											<div class="form-group">
												<input type="text" name="patient_id" id="patient_id" class="form-control"style="display:none;">
											</div>

                                            <div class="modal-footer">
												
												<!-- <input type="submit" name="action" id="action" class="btn btn-success" value="Modifier" />  -->
												<button type="submit" class="btn btn-success">Modifier</button> 
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin Modal d editer consultation -->


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
    <script>
        $(function(){

        	let cocher = $('.cochage');

            // ----------script modification------------------------------
            $('.btnConsulter').on('click',function(){
                // alert('modal');
                $('#modalEditer').modal('show');

                $tr = $(this).closest('tr');

                let data = $tr.children('td').map(function(){
                    return $(this).text();
                }).get();

                // console.log(data);

                let id = data[0];

				$('#patient_id').val(id); 

				// alert(  $('.cochage').val() );

                // console.log(id);

                // alert( cocher.html() );

                $(cocher).each(function(){
					$(this).on('click',function(){
						if( $(this).is(':checked') ){
							$(this).val("1");
							// alert( $(this).val() );
						}

						else{
							$(this).val("0");
							// alert( $(this).val() );
						}
					});
				});

				// console.log(`http://localhost/ges/index.php/Patient/updatePatients/{id}`);

                // $("#editForm").attr('action','http://localhost/ges/index.php/Patient/updatePatients/'+data[0]);

				// $('#editForm').on('submit',function(e){
				// 	e.preventDefault();  
					// alert('soumis');

					// $('#editForm').attr('action','http://localhost/ges/index.php/patient/user_action');

					// let consulter = $('.cocher').val();

					// $.ajax({  
					// 	url:"<?php echo base_url() . 'index.php/patient/user_action'?>",  
					// 	method:'POST',  
					// 	data:new FormData(this),  
					// 	contentType:false,  
					// 	processData:false,  
					// 	success:function(data)  
					// 	{  
					// 		// alert("vita soa gny aligna");
					// 		// alert(data);  
					// 		$('#modalEditer').modal('hide');  
					// 		location.reload();
					// 	}  
					// });  
				// });
            });


            // ---------------script cocher et decocher ----------------

        	// 

        	


        });
    </script>
</body>
</html>