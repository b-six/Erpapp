<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Surat Jalan Bahan Baku</title>
	<?php $this->load->view('warehouse/_partials/css.php') ?>
</head>
<body>
	<?php $this->load->view('warehouse/_partials/navbar.php') ?>
	
	<div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Surat Jalan</a>
                        <a href="sj_bahan_baku" class="breadcrumb">Bahan Baku</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('warehouse/_partials/searchbar.php'); ?></div>

            <!-- tambah pemesanan -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#sj_bahan" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>
            

        </div>

        <!-- konten tab -->
        <div id="sjbahanbaku" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>ID Produk</th>
                        <th>No. Surat Jalan DBB</th>
                        <th>Distributor</th>
                        <th>Tgl Surat Jalan DBB</th>
                        <th>ID Sales Order</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                	<tr>
                    	<td>12345</td>
                    	<td>12345</td>
                    	<td>12345</td>
                    	<td>12345</td>
                    	<td>12345</td>
                    	<td class="button-container">
                            <div id="table-button">
                            	<a href="#"><i class="material-icons delete-button">delete_forever</i></a> 
                            	<a href="#"><i class="material-icons edit-button">create</i></a>
                            	<a href="#"><i class="material-icons edit-button">print</i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!-- modal input -->
  	<div id="sj_bahan" class="modal modal-fixed-footer">
    	<div class="row">
            <div class="col s12 right">
                <h5>Form Input Surat Jalan DBB</h5>
            </div>
        </div>
        <div class="row">
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="idproduk" id="idproduk">
                    <label for="idproduk">ID Produk</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="namapdist" id="namadist">
                    <label for="namaproduk">Nama Distributor</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="date" name="tgl" id="tgl">
                    <label for="tgl">Tgl Surat Jalan</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="idsalesorder" id="idsalesorder">
                    <label for="jmlproduk">ID Sales Order</label>
               	</div>
        	</div>
        </div>
    	<div class="modal-footer">
            <a href="sj_bahan_baku" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="tambah_produk" id="tambah_produk"> <a href="#konfirm" class="modal-trigger">Submit</a>
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>

  	<!-- Modal Konfirm -->
  	<div id="konfirm" class="modal">
    	<div class="modal-content">
	    	<h5>Apakah Data akan Disimpan? </h5>
    	</div>
    	<div class="modal-footer">
            <a href="sj_bahan_baku" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="konfirm_tambah" id="konfirm_tambah"> <a href="#!" class="modal-trigger">Ya</a>
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
