<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Surat Jalan Produk Jadi</title>
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
                        <a href="sj_produk_jadi" class="breadcrumb">Produk Jadi</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('warehouse/_partials/searchbar.php'); ?></div>

            <!-- tambah pemesanan -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#sj_produk" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>
            

        </div>

        <!-- konten tab -->
        <div id="tabelsjdpj" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No</th>
                        <th>No. Surat Jalan DPJ</th>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Distributor</th>
                        <th>Tgl Surat Jalan DPJ</th>
                        <th>ID Sales Order</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    //$count = 0;
                    $hitung = 0;
                    foreach ($surat_jalan_distribusi_produk_jadi->result() as $col) :
                        
                        //$count++;
                        ?>
                        <tr>
                            <?php
                            
                            foreach ($stock_barang->result() as $row) :
                                
                                
                                if ($row->id_barang == $col->id_barang) :
                                    $hitung++;
                                    ?>
                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $col->no_surat_jalan_dpj; ?></td>
                                    <td><?php echo $col->id_barang; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <td><?php echo $col->nama_distributor; ?></td>
                                    <td><?php echo $col->tgl_surat_jalan_dpj; ?></td>
                                    <td><?php echo $col->id_so; ?></td>
                        <td class="button-container">
                            <div id="table-button">
                                <a class="modal-trigger" href="#konfirm-delete-SJDPJ" id="<?php echo $col->no_surat_jalan_dpj;  ?>" onclick="idDel(this.id)"><i class="material-icons delete-button">delete_forever</i></a> 
                                <a href="#"><i class="material-icons edit-button">create</i></a>
                                <a href="#"><i class="material-icons edit-button">print</i></a>
                            </div>
                        </td>
                    
                        
                                <?php
                                endif;
                             
                       
                        endforeach;
                        ?>

                        </tr>
                    <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </div>

    </div>
    <!-- modal input -->
  	<div id="sj_produk" class="modal modal-fixed-footer">

        <?php 

        // generate id pjm
        $count = 0;
        foreach ($surat_jalan_distribusi_produk_jadi->result() as $x) {
            $count++;
        }
        $no_surat_jalan_dpj = 'SJDPJ000000'.($count+1);
        ?>
    	<div class="row">
            <div class="col s12 right">
                <h5>Form Input Surat Jalan DPJ</h5>
            </div>
        </div>

        <form action="<?php echo site_url('warehouse/sj_produk_jadi/inputSjdpj') ?>" id="sjdpj" name="sjdpj" method="post">
        <input type="text" name="no_surat_jalan_dpj" id="no_surat_jalan_dpj" value="<?php echo $no_surat_jalan_dpj ?>" placeholder="" hidden>
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
                	<input type="text" name="nama_distributor" id="nama_distributor">
                    <label for="nama_distributor">Nama Distributor</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="date" name="tgl_surat_jalan_dpj" id="tgl_surat_jalan_dpj">
                    <label for="tgl">Tgl Surat Jalan</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
                	<select name="id_so" id="id_so">
                        <option value="" disabled selected>Id Sales Order</option>
                        <?php foreach ($surat_jalan_distribusi_produk_jadi->result() as $row) :

                         ?>
                        <option id="option-<?php echo $row->id_so; ?>" value="<?php echo $row->id_so; ?>"><?php echo $row->id_so; ?></option>
                        <?php 
                        endforeach; 
                    ?>
                        
                    </select>
                    <label for="id_so">Pilih ID Sales Order</label>
               	</div>
        	</div>
        </div>
    	<div class="modal-footer">
            <a href="sj_produk_jadi" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
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
            <a href="sj_produk_jadi" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="konfirm_sjdpj" id="konfirm_sjdpj"> Ya
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>

    <!-- Modal Konfirmasi Delete -->
    <div id="konfirm-delete-SJDPJ" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menghapus data penyimpanan ini?</p>
            <form id="form-delete-sjdpj" class="col s12" action="<?php echo base_url('warehouse/sj_produk_jadi/deleteDataSjdpj'); ?>" method="get">
                <input type="text" id="id_sjdpj_delete" name="id_sjdpj_delete" hidden>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light red darken-2" type="submit" name="submit-delete-sjdpj" id="submit-delete-sjdpj">Delete
                <i class="material-icons right">delete</i>
            </button>
        </div>
    </div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
