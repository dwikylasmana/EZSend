<!DOCTYPE html>
<html>
<head>
	<title>EZSend Official Site</title>
	<style type="text/css">
		body {
			font-family: sans-serif, arial;
			font-size: 14px;
		}
		.menu {
			font-size: 20px;
			font-weight: bold;
		}
		.menu ul {
			list-style: none;
			margin: 0;
			padding: 0 0 0 4px;
		}
		.menu ul li {
			display: inline-table;
			margin-left: -4px;
		}
		.menu ul li.active { background-color: #3636e3; }
		.menu ul li a {
			display: block;
			text-decoration: none;
			line-height: 50px;
			padding: 0 10px;
			color: #fff;
		}
		.menu ul li a:hover { background-color: #000087; }
		table.data { border-collapse: collapse; }
		table.data th { background-color: #f7ff9b; }
		table.data th, table.data td { padding: 5px; }

		.btn { cursor: pointer; }
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
		<!-- Brand/logo -->
		<a class="navbar-brand" href="#">
			<img src="assets/EZSend.png" alt="logo" style="width:100px;">
		</a>
		
		<!-- Links -->
		<div class="container">
			<div class="menu">
			<ul>
				<li class="<?=$this->uri->segment(1) == 'home' ? 'active' : null; ?>">
					<a href="<?=site_url('home');?>">Beranda</a>
				</li>
				<li class="<?=$this->uri->segment(1) == 'order' ? 'active' : null; ?>">
					<a href="<?=site_url('order');?>">Pengiriman</a>
				</li>
				<li class="<?=$this->uri->segment(1) == 'katalog' ? 'active' : null; ?>">
					<a href="<?=site_url('katalog');?>">Katalog Produk</a>
				</li>
				<li class="<?=$this->uri->segment(1) == 'about' ? 'active' : null; ?>">
					<a href="<?=site_url('kontak');?>">Kontak Kami</a>
				</li>
				<li class="<?=$this->uri->segment(1) == 'gambar' ? 'active' : null; ?>">
					<a href="<?=site_url('gambar');?>">Riwayat Pengiriman</a>
				</li>
			</ul>
			</div>
		</div>
	</nav>