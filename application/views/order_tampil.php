<br>

<div style="margin-bottom: 20px;">
	<a href="<?=site_url('order/add');?>"><button type="button" class="btn btn-success">Pengiriman Baru</button></a>
</div>

<table class="table table-primary table-hover text-center" border="0">
	<thead class="thead-dark">
		<tr>
			<th>No.Resi</th>
			<th>Nama Penerima</th>
			<th>Alamat Penerima</th>
			<th>Nomor Telepon</th>
			<th>Tipe Paket</th>
			<th></th>
		</tr>
		</thead>
		<?php
		$no = 1;
		foreach ($order as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->nama_p;?></td>
			<td><?=$row->alamat_p;?></td>
			<td><?=$row->telp_p;?></td>
			<td><?=$row->paket;?></td>
			<td>
				<a href="<?=site_url('order/del/'.$row->noresi);?>" onclick="return confirm('Yakin akan menghapus data?')"><button class="btn btn-danger">Hapus</button></a>
			</td>
		</tr>
	<?php	
	} ?>
</table>

<br>