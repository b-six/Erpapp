<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pemesanan Bahan Baku</title>
	<?php $this->load->view('warehouse/_partials/css.php') ?>
</head>
<body>
	<?php $this->load->view('warehouse/_partials/navbar.php') ?>
	
	
	<!-- konten -->
	<div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Bahan Baku</a>
                        <a href="pemesanan" class="breadcrumb">Pemesanan</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('warehouse/_partials/searchbar.php'); ?></div>

            <!-- tambah pemesanan -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#pemesanan-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>

        <!-- konten tab -->
        <div id="tabelpemesanan" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No. Pemesanan</th>
                        <th>Nama Bahan Baku</th>
                        <th>Jumlah</th>
                        <th>Supplier</th>
                        <th>Tgl Pengiriman</th>
                        <th colspan="2"> </th>
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
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!-- modal input -->
  	<div id="pemesanan-modal" class="modal modal-fixed-footer">
    	<div class="row">
            <div class="col s12 right">
                <h5>Form Pemesanan</h5>
            </div>
        </div>
        <div class="row">
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="namabb" id="namabb" placeholder="Masukan Nama Bahan Baku">
                    <label for="namabb">Nama Bahan Baku</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="jmlbb" id="jmlbb" placeholder="Masukan Jumlahnya">
                    <label for="jmlbb">Jumlah</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
    				<select>
      					<option value="" disabled selected>Pilih Supplier</option>
      					<option value="1">PT. A</option>
      					<option value="2">PT. B</option>
      					<option value="3">PT. C</option>
    				</select>
    				<label>Supplier</label>
  				</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="date" name="tglkirim" id="tglkirim" placeholder="Masukan Tanggal Pengiriman">
                    <label for="jmlbb">Tanggal Pengiriman</label>
               	</div>
        	</div>
        </div>
    	<div class="modal-footer">
            <a href="pemesanan" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="tambah_pemesanan" id="tambah_pemesanan"> <a href="#konfirm" class="modal-trigger">Submit</a>
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
            <a href="pemesanan" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="tambah_pemesanan" id="tambah_pemesanan"> <a href="#!" class="modal-trigger">Ya</a>
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>
          
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>