<br>
<div>
<?php echo form_open('order/proses'); ?>
	<table class="table table-borderless">
		<tr>
			<td>Nama Penerima</td>
			<td>:</td>
			<td>
				<?php echo form_input('nama_p', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Alamat Penerima</td>
			<td>:</td>
			<td>
				<?php echo form_input('alamat_p', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>No. Telp</td>
			<td>:</td>
			<td>
				<?php echo form_input('telp_p', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Tipe Paket</td>
			<td>:</td>
			<td>
				<?php echo form_input('paket', '', 'required="required"'); ?>
			</td>
		</tr>
		<br>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?php echo form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'Tambah')); ?>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>

<br>