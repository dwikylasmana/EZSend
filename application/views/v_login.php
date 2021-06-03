<div class="jumbotron text-center">
    <img src="assets/EZSend.png" class="w3-round" alt="EZSend" style="width:100%;max-width:520px">
	<h1>Silahkan Login <br/> ADMIN EZSend</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</div>
