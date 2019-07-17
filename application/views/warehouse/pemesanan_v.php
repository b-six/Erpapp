<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rencana Pemesanan Bahan Baku</title>
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
                        <a href="pemesanan" class="breadcrumb">Rencana Pemesanan</a>
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

<!-- tab -->
        <div class="row">
            <div class="col s12">
                <ul class="tabs blue-dark-grey">
                    <li class="tab col s2"><a href="#belum-disetujui" class="active small-font">Belum disetujui</a></li>
                    <li class="tab col s2"><a class="small-font" href="#disetujui">
                            Disetujui</a></li>
                    <li class="tab col s2"><a href="#dipesan" class="small-font">
                            Dipesan</a></li>
                </ul>
                <br>
            </div>
        </div>

        <!-- konten tab -->
        <div id="belum-disetujui" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Hitung</th>
                        <th>No. Pemesanan</th>
                        <th>Nama Bahan Baku</th>
                        <th>Jumlah</th>
                        <th>Supplier</th>
                        <th>Tgl Pengiriman</th>
                        <th>Status</th>
                        <th colspan="2"> </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $count = 0;
                    $hitung = 0;
                    foreach ($pemesanan_bb->result() as $col) :
                        
                        $count++;
                        if ($col->status == 'Belum disetujui') :
                        ?>
                        
                            <?php
                            
                            foreach ($bahan_baku->result() as $row) :
                                
                                foreach ($supplier->result() as $s) :
                                 
                                if ($row->id_bahan_baku == $col->id_bahan_baku) :
                                    if ($col->id_supplier == $s->id_supplier) :
                                        $hitung++;
                                    ?>
<tr>

                                    <td ><?php echo $hitung; ?></td>
                                    <td><?php echo $col->id_pemesanan_bb; ?></td>
                                    <td><?php echo $row->nama_bahan_baku; ?></td>
                                    <td><?php echo $col->jumlah; ?></td>
                                    <td><?php echo $s->nama_supplier; ?></td>
                                    <td><?php echo $col->tanggal_pengiriman; ?></td>
                                    <td><?php echo $col->status; ?></td>
                                    <td class="button-container">

                                      
                            <div id="table-button">
                                <a href="<?php echo base_url("warehouse/pemesanan/delete?id=". $col->id_pemesanan_bb); ?>" id="delete_<?php echo $col->id_pemesanan_bb;?>" name="delete" onClick="getDelete(this.id)" data-id_pemesanan_bb="<?php echo $col->id_pemesanan_bb; ?>"><i class="material-icons delete-button">delete_forever</i></a> 
                                
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
                    endif;
                endforeach;
                ?>
                </tbody>
                    	
                   
            </table>
        </div>

<!-- konten tab -->
        <div id="disetujui" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Hitung</th>
                        <th>No. Pemesanan</th>
                        <th>Nama Bahan Baku</th>
                        <th>Jumlah</th>
                        <th>Supplier</th>
                        <th>Tgl Pengiriman</th>
                        <th>Status</th>
                        <th colspan="2"> </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $count = 0;
$hitung = 0;
                    foreach ($pemesanan_bb->result() as $col) :
                        
                        $count++;
                        if ($col->status == 'Disetujui') :
                        ?>
                        
                            <?php
                            
                            foreach ($bahan_baku->result() as $row) :
                                
                                foreach ($supplier->result() as $s) :
                                 
                                if ($row->id_bahan_baku == $col->id_bahan_baku) :
                                    if ($col->id_supplier == $s->id_supplier) :
                                        $hitung++;
                                    ?>
<tr>

                                    <td ><?php echo $hitung; ?></td>
                                    <td><?php echo $col->id_pemesanan_bb; ?></td>
                                    <td><?php echo $row->nama_bahan_baku; ?></td>
                                    <td><?php echo $col->jumlah; ?></td>
                                    <td><?php echo $s->nama_supplier; ?></td>
                                    <td><?php echo $col->tanggal_pengiriman; ?></td>
                                    <td><?php echo $col->status; ?></td>
                                    <td class="button-container">
                            <div id="table-button">
                                 <a href="<?php echo base_url("warehouse/pemesanan/pesan?id=". $col->id_pemesanan_bb); ?>" id="pesan_<?php echo $col->id_pemesanan_bb;?>" name="pesan" onClick="getPesan(this.id)" data-id_pemesanan_bb="<?php echo $col->id_pemesanan_bb; ?>"><i class="material-icons delete-button">check</i>
                                 </a>
                                
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
                    endif;
                endforeach;
                ?>
                </tbody>
                        
                   
            </table>
        </div>
    
<!-- konten tab -->
        <div id="dipesan" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Hitung</th>
                        <th>No. Pemesanan</th>
                        <th>Nama Bahan Baku</th>
                        <th>Jumlah</th>
                        <th>Supplier</th>
                        <th>Tgl Pengiriman</th>
                        <th>Status</th>
                        <th colspan="2"> </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $count = 0;
                    $hitung = 0;
                    foreach ($pemesanan_bb->result() as $col) :
                        
                        $count++;
                        if ($col->status == 'Dipesan') :
                        ?>
                        
                            <?php
                            
                            foreach ($bahan_baku->result() as $row) :
                                
                                foreach ($supplier->result() as $s) :
                                 
                                if ($row->id_bahan_baku == $col->id_bahan_baku) :
                                    if ($col->id_supplier == $s->id_supplier) :
                                        $hitung++;
                                    ?>
<tr>

                                    <td ><?php echo $hitung; ?></td>
                                    <td><?php echo $col->id_pemesanan_bb; ?></td>
                                    <td><?php echo $row->nama_bahan_baku; ?></td>
                                    <td><?php echo $col->jumlah; ?></td>
                                    <td><?php echo $s->nama_supplier; ?></td>
                                    <td><?php echo $col->tanggal_pengiriman; ?></td>
                                    <td><?php echo $col->status; ?></td>
                                    <td class="button-container">
                            
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
                    endif;
                endforeach;
                ?>
                </tbody>
                        
                   
            </table>
        </div>

    <!-- modal input -->
  	<div id="pemesanan-modal" class="modal modal-fixed-footer">
    	<div class="row">
        <form id="form-add-so" class="col s12" action="<?php echo site_url('warehouse/pemesanan/save_pemesanan'); ?>" method="post">
        <div class="row">
            <div class="col s12 right">
                <h5>Form Pemesanan</h5>
            </div>
        </div>
<!-- update status pemesanan-->
        <div id="pesan" action="<?php echo site_url('warehouse/pemesanan/pesan'); ?>" method="get" value="<?php echo $col->id_pemesanan_bb; ?>" hidden>
        </div>

<!-- generate id sales order -->
                    <?php
                    $hitung = 0;
                    $jumlahIdSama = 0;
                    $date = date('Ymd');
                    foreach ($pemesanan_bb->result() as $row) :
                        $hitung++;
                        if (strpos($row->id_pemesanan_bb, $date) !== false) {
                            $jumlahIdSama++;
                        }
                    endforeach;
                    $id_pemesanan_bb = $date . ($jumlahIdSama + 1);
                    foreach ($pemesanan_bb->result() as $row) :
                        $sama = 0;
                        if ($id_pemesanan_bb == $row->id_pemesanan_bb) {
                            $sama++;
                        }
                    endforeach;
                    $id_pemesanan_bb = $date . ($jumlahIdSama + 1 + $sama);
                    ?>
                    <!-- end generate id sales order -->

        <div class="row">
        	<div class="col s12">
                <div class="col s12">
                <div class="input-field col s12">
                    <input type="text" name="id_pemesanan_bb" id="id_pemesanan_bb" placeholder="" value="<?php echo $id_pemesanan_bb;?>" readonly >
                    <label for="namabb">ID Pemesanan</label>
                </div>
            </div>
        		<div class="input-field col s12">
                	<select id="id-bahan-baku" name="id-bahan-baku" me="id-bahan-baku">
                                <option value="" disabled selected>Pilih Bahan Baku</option>
                                <?php $hitung = 0;
                                foreach ($bahan_baku->result() as $col) :
                                    $hitung++;
                                    ?>
                                    <option id="<?php echo $col->id_bahan_baku ?>" value="<?php echo $col->id_bahan_baku ?>"><?php echo $col->nama_bahan_baku ?></option>
                                <?php endforeach; ?>
                            </select>
               	</div>
        	</div>

        	<div class="col s12">
        		<div class="input-field col s12">
                	<input type="text" name="jmlbb" id="jmlbb" placeholder="Masukan Jumlah">
                    <label for="jmlbb">Jumlah</label>
               	</div>
        	</div>
        	<div class="col s12">
        		<div class="input-field col s12">
    				<select id="id-supplier" name="id-supplier" me="id-supplier">
                                <option value="" disabled selected>Pilih Supplier</option>
                                <?php $hitung = 0;
                                foreach ($supplier->result() as $col) :
                                    $hitung++;
                                    ?>
                                    <option id="<?php echo $col->id_supplier ?>" value="<?php echo $col->id_supplier ?>"><?php echo $col->nama_supplier ?></option>
                                <?php endforeach; ?>
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
        <div class="col s12">
                <div class="input-field col s12">
                    <input type="text" name="status" id="status" placeholder="status" value="Belum disetujui" readonly hidden>
                    
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
            <a href="pemesanan" class="modal-close waves-effe   ct waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="tambah_pemesanan" id="tambah_pemesanan">Ya</a>
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>
          
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>