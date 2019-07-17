<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Penyimpanan Produk Jadi</title>
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
                        <a href="penyimpanan" class="breadcrumb">Penyimpanan</a>
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
                <nav class="no-shadows blue-dark-grey"><a href="#penyimpanan-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>
            

        </div>

        <!-- konten tab -->
        <div id="tabelpenyimpanan" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>ID Produk Masuk</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    //$count = 0;
                    $hitung = 0;
                    foreach ($produk_jadi_masuk->result() as $col) :
                        
                        //$count++;
                        ?>
                        <tr>
                            <?php
                            
                            foreach ($stock_barang->result() as $row) :
                                
                                
                                if ($row->id_barang == $col->id_barang) :
                                    $hitung++;
                                    ?>

                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $col->tgl_produk_masuk; ?></td>
                                    <td><?php echo $col->id_produk_jadi_masuk; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <td><?php echo $col->jml_barang_masuk; ?></td>
                                    
                                    <td class="button-container">
                                    <div id="table-button">
                                <a class="modal-trigger" href="#konfirm-delete-PJM" id="<?php echo $col->id_produk_jadi_masuk;  ?>" onclick="idDelete(this.id)"><i class="material-icons delete-button">delete_forever</i></a> 
                                <a class="modal-trigger" href="#penyimpanan-modal-edit" id="<?php echo $col->id_produk_jadi_masuk; ?>" onclick="idEdit(this.id)" data-jumlah="<?php echo $col->jml_barang_masuk; ?>"><i class="material-icons edit-button">create</i></a>
                            </div>
                        </td>
                    
                        
                                <?php
                                endif;
                             
                       
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
  	<div id="penyimpanan-modal" class="modal modal-fixed-footer">
        <?php 

        // generate id pjm
        $count = 0;
        foreach ($produk_jadi_masuk->result() as $x) {
            $count++;
        }
        $id_produk_jadi_masuk = 'PIN000000'.($count+1);
        ?>

    	<div class="row">
            <div class="col s12 right">
                <h5>Form Input Produk Masuk</h5>
            </div>
        </div>
        <form action="<?php echo site_url('warehouse/penyimpanan/inputDataPjm') ?>" id="pjm" name="pjm" method="post">
        <input type="text" name="id_produk_jadi_masuk" id="id_produk_jadi_masuk" value="<?php echo $id_produk_jadi_masuk ?>" placeholder="" hidden>
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
                	<input type="text" name="jml_barang_masuk" id="jml_barang_masuk">
                    <label for="jml_barang_masuk">Jumlah Produk</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="date" name="tgl_produk_masuk" id="tgl_produk_masuk">
                    <label for="tgl_produk_masuk">Tanggal</label>
               	</div>
        	</div>
        </div>
    	<div class="modal-footer">
            <a href="penyimpanan" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <a href="#konfirm" class="modal-trigger"> <button class="btn waves-effect orange darken-3" type="submit" name="tambah_produk" id="tambah_produk"> Submit
                <i class="material-icons right">send</i>
            </button>
            </a>
        </div>
        </form>
  	</div>

    <!-- modal edit -->
    <div id="penyimpanan-modal-edit" class="modal modal-fixed-footer">
        <div class="row">
            <div class="col s12 right">
                <h5>Form Edit Produk Masuk</h5>
            </div>
        </div>
        <form action="" id="pjm-edit" name="pjm-edit" method="post">
        <input type="text" name="id_pjm_edit" id="id_pjm_edit" hidden>
        <div class="row">
            <div class="col s12">
                <div class="input-field col s12">
                    <select name="idproduk-edit" id="idproduk-edit">
                        <option value="" disabled selected>Pilih Produk</option>
                        <?php foreach ($stock_barang->result() as $row) :

                         ?>
                        <option value="<?php echo $row->id_barang; ?>"><?php echo $row->nama_barang; ?></option>
                        <?php 
                        endforeach; 
                    ?>
                        
                    </select>
                    <label for="idproduk-edit">Pilih Produk</label>
                </div>
            </div>
            <div class="col s12">
                <div class="input-field col s12">
                    <input type="text" name="jmlproduk-edit" id="jmlproduk-edit" placeholder=" ">
                    <label for="jmlproduk-edit">Jumlah Produk</label>
                </div>
            </div>
            <div class="col s12">
                <div class="input-field col s12">
                    <input type="date" name="tgl-edit" id="tgl-edit">
                    <label for="tgl-edit">Tanggal</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="penyimpanan" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <a href="#konfirm-edit" class="modal-trigger"> <button class="btn waves-effect orange darken-3" type="submit" name="edit_produk" id="edit_produk"> Submit
                <i class="material-icons right">send</i>
            </button>
            </a>
        </div>
        </form>
    </div>

  	<!-- Modal Konfirm -->
  	<div id="konfirm" class="modal modal-custom">
    	<div class="modal-content">
	    	<h6>Apakah Data akan Disimpan? </h6>
    	</div>
    	<div class="modal-footer">
            <a href="penyimpanan" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="konfirm_tambah" id="konfirm_tambah">Ya
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>

    <!-- Modal Konfirm Edit -->
    <div id="konfirm-edit" class="modal modal-custom">
        <div class="modal-content">
            <h6>Apakah Data akan Disimpan? </h6>
        </div>
        <div class="modal-footer">
            <a href="penyimpanan" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="konfirm_edit" id="konfirm_edit">Ya
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>

    <!-- Modal Konfirmasi Delete -->
    <div id="konfirm-delete-PJM" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menghapus data penyimpanan ini?</p>
            <form id="form-delete-pjm" class="col s12" action="<?php echo site_url('warehouse/penyimpanan/deleteDataPjm'); ?>" method="get">
                <input type="text" id="id_produk_jadi_masuk_delete" name="id_produk_jadi_masuk_delete" hidden>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light red darken-2" type="submit" name="submit-delete-pjm" id="submit-delete-pjm">Delete
                <i class="material-icons right">delete</i>
            </button>
        </div>
    </div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
