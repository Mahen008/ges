<!DOCTYPE html>
<html lang="en">

<?php include("include/header.php");?>
<!-- login23:11-->

<body>
    <div class="main-wrapper account-wrapper" style="background-color:#374850;">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box" style="background-color: #fff;">
                    <form action="<?php echo base_url()?>index.php/Welcome/signin" class="form-signin" method="post">

						<div class="account-logo">
                            <a href="index-2.html"><img src="<?php echo base_url()?>assets/img/logo2.png" alt=""></a>
                        </div>
                        <?php if($msg = $this->session->flashdata('message')): ?>
                            <div class="btn-danger" style="line-height: 30px;" align="center">
                                <?php echo $msg;?>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label><b>Login</b></label>
                            <input type="text" name="log" autofocus="" class="form-control" placeholder="Login">
                            <span class="text-danger"><?php echo form_error("log");?></span>
                        </div>
                        <div class="form-group">
                            <label><b>Password</b></label>
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                            <span class="text-danger"><?php echo form_error("pass");?></span>
                        </div>
                       
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Connect</button>
                        </div>
                        
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

<?php include("include/footer.php");?>
<!-- login23:12-->
</html>