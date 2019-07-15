<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Penerimaan Bahan Baku</title>
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
                        <a class="breadcrumb no-pointer-event">Bahan Baku</a>
                        <a href="penerimaan" class="breadcrumb">Penerimaan</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('warehouse/_partials/searchbar.php'); ?></div>


        </div>

        <!-- konten tab -->
        <div id="tabelpenerimaan" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No.</th>
                        <th>No. Penerimaan</th>
                        <th>Nama Bahan Baku</th>
                        <th>Jumlah</th>
                        <th>Supplier</th>
                        <th>Tanggal masuk</th>
                        <th colspan="2"> </th>
                    </tr>
                </thead>

                 <tbody>
                    <?php
                    //$count = 0;
                    foreach ($bahan_baku_masuk->result() as $col) :
                        
                        //$count++;
                        ?>
                        <tr>
                            <?php
                            
                            foreach ($bahan_baku->result() as $row) :
                                $hitung = 0;
                                foreach ($supplier->result() as $s) :
                                $hitung++;
                                if ($row->id_bahan_baku == $col->id_bahan_baku) :
                                    if ($col->id_supplier == $s->id_supplier) :
                                    ?>
                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $col->id_bahan_baku_masuk; ?></td>
                                    <td><?php echo $row->nama_bahan_baku; ?></td>
                                    <td><?php echo $col->jml_bahan_baku_masuk; ?></td>
                                    <td><?php echo $s->nama_supplier; ?></td>
                                    <td><?php echo $col->tgl_bahan_baku_masuk; ?></td>
                                    <td class="button-container">
                            <div id="table-button">
                                <a href="#" name="sesuai"><i class="material-icons delete-button">check</i></a>
                                <a href="#retur" class="modal-trigger" name="retur"><i class="material-icons edit-button">arrow_back</i></a> 
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
  	<div id="retur" class="modal modal-fixed-footer">
    	<div class="row">
            <div class="col s12 right">
                <h5>Form Retur Bahan Baku</h5>
            </div>
        </div>
        <div class="row">
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="nopemesanan" id="nopemesanan" value="1 (Contoh)">
                    <label for="nopemesanan">No Pemesanan</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="jmltdksesuai" id="jmltdksesuai" value="12 (Contoh)" >
                    <label for="jmlbb">Jumlah yg tidak sesuai</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<textarea id="alasanretur" class="materialize-textarea" placeholder="Alasan Pengembalian"></textarea>
                    <label for="supbb">Supplier</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="date" class="datepicker">
                    <label for="datepicker">Tanggal Retur</label>
               	</div>
        	</div>
        </div>
    	<div class="modal-footer">
            <a href="penerimaan" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="tambah_pemesanan" id="tambah_pemesanan"> <a href="#konfirm" class="modal-trigger">Save</a>
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
            <a href="penerimaan" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="tambah_pemesanan" id="tambah_pemesanan"> <a href="#!" class="modal-trigger">Ya</a>
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>