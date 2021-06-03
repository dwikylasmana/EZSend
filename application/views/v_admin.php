<div class="jumbotron text-center">
    <img src="assets/EZSend.png" class="w3-round" alt="EZSend" style="width:100%;max-width:520px">
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</div>