<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pengiriman Produk Jadi</title>
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
                        <a class="breadcrumb no-pointer-event">Produk Jadi</a>
                        <a href="pengiriman" class="breadcrumb">Pengiriman</a>
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
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#pengiriman-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>
            

        </div>

        <!-- konten tab -->
        <div id="tabelpengiriman" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>ID Pengiriman Produk</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Customer</th>
                    </tr>
                </thead>

                 <tbody>
                    <?php
                    //$count = 0;
                    foreach ($produk_jadi_keluar->result() as $col) :
                        
                        //$count++;
                        ?>
                        <tr>
                            <?php
                            
                            foreach ($stock_barang->result() as $row) :
                                $hitung = 0;
                                foreach ($customer->result() as $s) :
                                $hitung++;
                                if ($row->id_barang == $col->id_barang) :
                                    if ($col->id_pelanggan == $s->id_pelanggan) :
                                    ?>
                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $col->tgl_produk_keluar; ?></td>
                                    <td><?php echo $col->id_produk_keluar; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <td><?php echo $col->jml_produk_keluar; ?></td>
                                    <td><?php echo $s->nama_pelanggan; ?></td>
                                    
                                    <td class="button-container">
                            <td class="button-container">
                            <div id="table-button">
                                <a href="#"><i class="material-icons delete-button">delete_forever</i></a> 
                                <a href="#"><i class="material-icons edit-button">create</i></a>
                            </div>
                        </td>
                        
                                <?php
                                endif;
                            endif;
                        endforeach;
                        endforeach;
                        ?>

                            <!--
                            <td><?php echo $col->id_so; ?></td>
                            <td><?php
                                $testimoni_barang = substr($col->testimoni_barang, 0, 25);
                                echo $testimoni_barang; ?></td>
                            <td class="button-container">
                                <div id="table-button">
                                    <a href="#"><i class="material-icons delete-button">delete_forever</i></a> 
                                    <a href="#"><i class="material-icons edit-button">create</i></a>
                                </div>
                            </td>-->
                        </tr>
                    <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </div>

    </div>
    <!-- modal input -->
  	<div id="pengiriman-modal" class="modal modal-fixed-footer">
    	<div class="row">
            <div class="col s12 right">
                <h5>Form Input Produk Keluar</h5>
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
                	<input type="text" name="namaproduk" id="namaproduk">
                    <label for="namaproduk">Nama Produk</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="jmlproduk" id="jmlproduk">
                    <label for="jmlproduk">Jumlah Produk</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="date" name="tgl" id="tgl">
                    <label for="tgl">Tanggal</label>
               	</div>
        	</div>
        </div>
    	<div class="modal-footer">
            <a href="pengiriman" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="keluar_produk" id="keluar_produk"> <a href="#konfirm" class="modal-trigger">Submit</a>
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
            <a href="pengiriman" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="konfirm_tambah" id="konfirm_tambah"> <a href="#!" class="modal-trigger">Ya</a>
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
