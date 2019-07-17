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
                    $hitung = 0;
                    //$count = 0;
                    foreach ($produk_jadi_keluar->result() as $col) :
                        
                        //$count++;
                        ?>
                        
                            <?php
                            
                            foreach ($stock_barang->result() as $row) :
                                
                                foreach ($customer->result() as $s) :
                                
                                if ($row->id_barang == $col->id_barang) :
                                    if ($col->id_pelanggan == $s->id_pelanggan) :
                                        $hitung++;
                                    ?>
                                    <tr>
                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $col->tgl_produk_keluar; ?></td>
                                    <td><?php echo $col->id_produk_keluar; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <td><?php echo $col->jml_produk_keluar; ?></td>
                                    <td><?php echo $s->nama_pelanggan; ?></td>
                                    
                                    <td class="button-container">
                                    <td class="button-container">
                            <div id="table-button">
                                <a class="modal-trigger" href="#konfirm-delete-PJK" id="<?php echo $col->id_produk_keluar;  ?>" onclick="getidDelete(this.id)"><i class="material-icons delete-button">delete_forever</i></a> 
                                <a href="#"><i class="material-icons edit-button">create</i></a>
                            </div>
                        </td>
                        </tr>
                        
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
                        
                    <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </div>

    </div>
    <!-- modal input -->
  	<div id="pengiriman-modal" class="modal modal-fixed-footer">
        <?php
            $count = 0; 
            foreach ($produk_jadi_keluar->result() as $x) {
                $count++;
            }
            $id_produk_keluar = 'POUT000000'.($count+1);

        ?>
    	<div class="row">
            <div class="col s12 right">
                <h5>Form Input Produk Keluar</h5>
            </div>
        </div>
        <form action="<?php echo site_url('warehouse/pengiriman/inputPjk') ?>" method="post" id="pjk" name="pjk">
        <input type="text" name="id_produk_keluar" id="id_produk_keluar" value="<?php echo $id_produk_keluar ?>" placeholder="" hidden>
        <div class="row">
            <div class="col s12">
        		<div class="input-field col s12">
                	<select name="id_barang" id="id_barang">
                        <option value="" disabled selected>Pilih Produk</option>
                        <?php foreach ($stock_barang->result() as $row) :

                         ?>
                        <option id="option-<?php echo $row->id_barang; ?>" data-namabarang="<?php echo $row->nama_barang; ?>" value="<?php echo $row->id_barang; ?>"><?php echo $row->nama_barang; ?></option>
                        <?php 
                        endforeach; 
                    ?>
                        
                    </select>
                    <label for="id_barang">Pilih Produk</label>
               	</div>
        	</div>
            <div class="col s12">
                <div class="input-field col s12">
                    <select name="id_pelanggan" id="id_pelanggan">
                        <option value="" disabled selected>Pilih Customer</option>
                        <?php foreach ($customer->result() as $row) :

                         ?>
                        <option id="option-<?php echo $row->id_pelanggan; ?>" data-namapelanggan="<?php echo $row->nama_pelanggan; ?>" value="<?php echo $row->id_pelanggan; ?>"><?php echo $row->nama_pelanggan; ?></option>
                        <?php 
                        endforeach; 
                    ?>
                        
                    </select>
                    <label for="id_barang">Pilih Customer yang akan dituju</label>
                </div>
            </div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="jml_produk_keluar" id="jml_produk_keluar">
                    <label for="jml_produk_keluar">Jumlah Produk</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="date" name="tgl_produk_keluar" id="tgl_produk_keluar">
                    <label for="tgl_produk_keluar">Tanggal</label>
               	</div>
        	</div>
        </div>
        </form>
    	<div class="modal-footer">
            <a href="pengiriman" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="keluar_produk" id="keluar_produk"> <a href="#konfirm" class="modal-trigger">Submit</a>
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>

  	<!-- Modal Konfirm -->
  	<div id="konfirm" class="modal modal-custom">
    	<div class="modal-content">
	    	<h6>Apakah Data akan Disimpan? </h6>
    	</div>
    	<div class="modal-footer">
            <a href="pengiriman" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="tambah_pjk" id="tambah_pjk">Ya
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>

    <!-- Modal Konfirmasi Delete -->
    <div id="konfirm-delete-PJK" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menghapus data pengiriman ini?</p>
            <form id="form-delete-pjk" class="col s12" action="<?php echo site_url('warehouse/pengiriman/deleteDataPjk'); ?>" method="get">
                <input type="text" id="id_pjk_delete" name="id_pjk_delete" hidden>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light red darken-2" type="submit" name="submit-delete-pjk" id="submit-delete-pjk">Delete
                <i class="material-icons right">delete</i>
            </button>
        </div>
    </div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
