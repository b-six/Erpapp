<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sales Order</title>
	<?php $this->load->view('warehouse/_partials/css.php') ?>
</head>
<body>
	<?php $this->load->view('warehouse/_partials/navbar.php') ?>
	
	<div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s8">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Order</a>
                        <a href="production_order" class="breadcrumb">Production Order</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('warehouse/_partials/searchbar.php'); ?></div>         

        </div>

        <!-- konten tab -->
        <div id="tabelproductionorder" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Tanggal</th>
                        <th>No. Produksi</th>
                        <th>Produk</th>
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
