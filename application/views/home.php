<!DOCTYPE html>
<html>
<?php include("include/header.php");?>

<nav class="navbar navbar-light navbar-expand-md sticky-top bg-dark" style="color:rgb(247,250,252);background-color:rgb(52,52,52);">
    <div class="container-fluid">
        <a href="#" class="navbar-brand" style="color:rgba(201,195,195,0.9); font-size: 0.9em;"></a>
    </div>
</nav>
<!--  -->
<div class="container" style="margin-top: 45px;">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 80%; height: 90%; margin: auto;">
                <div class="card-body">
                    <h1 class="text-center">
                    	<img src="<?php echo base_url("assets/img/acceuil.png");?>" height="100" class="rounded-circle" />
                    </h1>
                    <h4 class="text-center card-title">RECEPTIONNISTE</h4>
                    <h6 class="text-uppercase text-center text-muted card-subtitle mb-2">RESPONSABLE ACCUEIL</h6>
                    <a href="<?php echo base_url();?>index.php/Frontend/acceuil" class="btn btn-secondary btn-lg btn-block">Commencer</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card"style="width: 80%; height: 90%; margin: auto;">
                <div class="card-body">
                    <h1 class="text-center">
                    	<img src="<?php echo base_url("assets/img/dial.png");?>" height="100" class="rounded-circle" />
                    </h1>
                    <h4 class="text-center card-title">DIALYSE</h4>
                    <h6 class="text-uppercase text-center text-muted card-subtitle mb-2">SCEANCE DE DIALYSE</h6>
                    <a href="<?php echo base_url();?>index.php/Affichage/affichListMod" class="btn btn-secondary btn-lg btn-block">Commencer</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 80%; height: 90%; margin: auto;">
                <div class="card-body">
                    <h1 class="text-center">
                    	<img src="<?php echo base_url("assets/img/chimio.png");?>" class="rounded-circle" height="100" />
                    </h1>
                    <h4 class="text-center card-title">CHIMIOTHERAPIE</h4>
                    <h6 class="text-uppercase text-center text-muted card-subtitle mb-2">SCEANCE DE CHIMIOTHERAPIE</h6>
                    <a href="<?php echo base_url();?>index.php/welcome/login_admin" class="btn btn-secondary btn-lg btn-block">Commencer</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col">
            <div class="card" style="width: 60%; height: 90%; margin: auto;">
                <div class="card-body">
                    <h1 class="text-center">
                        <img src="<?php echo base_url("assets/img/stock.png");?>" class="rounded-circle" height="100" />
                    </h1>
                    <h4 class="text-center card-title">STOCK</h4>
                    <h6 class="text-uppercase text-center text-muted card-subtitle mb-2">GESTION DE STOCK</h6>
                    <a href="<?php echo base_url();?>index.php/stock/affichStock" class="btn btn-secondary btn-lg btn-block">Commencer</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 60%; height: 90%; margin: auto;">
                <div class="card-body">
                    <h1 class="text-center">
                        <img src="<?php echo base_url("assets/img/gen.png");?>" class="rounded-circle" height="100" />
                    </h1>
                    <h4 class="text-center card-title">CONSULTATION</h4>
                    <h6 class="text-uppercase text-center text-muted card-subtitle mb-2">CONSULTATION GENERALISTE</h6>
                    <a href="<?php echo base_url();?>index.php/welcome/login_admin" class="btn btn-secondary btn-lg btn-block">Commencer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php");?>
</body>

</html>