<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stok Produk Jadi</title>
	<?php $this->load->view('warehouse/_partials/css.php') ?>
</head>
<body>
	<?php $this->load->view('warehouse/_partials/navbar.php') ?>
	
	<div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s6">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Bahan Baku</a>
                        <a href="stok_produk" class="breadcrumb">Stok Bahan Baku</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4">
            	<div class="input-field">
                	<select class="white browser-default">
      					<option value="" disabled selected>Nama Produk</option>
      					<option value="1">Bawang</option>
      					<option value="2">Bau Bawang</option>
      					<option value="3">Rizuki Bau Bawang</option>
    				</select>
               	</div>
            </div>

            <!-- tambah pemesanan -->
            <div class="col s2">
                <a class="waves-effect waves-light btn-large btn-floating"><i class="material-icons">file_download</i>button</a>
                <a class="waves-effect waves-light btn-large btn-floating"><i class="material-icons">print</i>button</a>
            </div>
            

        </div>

        <!-- konten tab -->
        <div id="stokproduk" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Tanggal</th>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>

                <tbody>
                	<tr>
                    	<td>12345</td>
                    	<td>12345</td>
                    	<td>12345</td>
                    	<td>12345</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
