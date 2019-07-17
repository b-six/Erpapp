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
                    $count = 0;
                    foreach ($bahan_baku_masuk->result() as $col) :
                        
                        $count++;
                        ?>
                        
                            <?php
                            
                            foreach ($bahan_baku->result() as $row) :
                                $hitung = 0;
                                foreach ($supplier->result() as $s) :
                                $hitung++;
                                if ($row->id_bahan_baku == $col->id_bahan_baku) :
                                    if ($col->id_supplier == $s->id_supplier) :
                                    ?>
<tr>
                                    <td ><?php echo $hitung; ?></td>
                                    <td><?php echo $col->id_bahan_baku_masuk; ?></td>
                                    <td><?php echo $row->nama_bahan_baku; ?></td>
                                    <td><?php echo $col->jml_bahan_baku_masuk; ?></td>
                                    <td><?php echo $s->nama_supplier; ?></td>
                                    <td><?php echo $col->tgl_bahan_baku_masuk; ?></td>
                                    <td class="button-container">
                                        <input type="text" id="id_supplier<?php echo $col->id_bahan_baku_masuk; ?>" value="<?php echo $s->id_supplier; ?>" hidden>
                                        <!-- <input type="text" id="nama_supplier<?php echo $col->id_bahan_baku_masuk; ?>" value="<?php echo  $s->nama_supplier; ?>" hidden> -->
                                       <input type="text" id="<?php echo $col->id_bahan_baku; ?>" value="<?php echo $col->id_bahan_baku; ?>" hidden>
                            <div id="table-button">
                               
                                <a href="#addretur-modal" id="retur_<?php echo $col->id_bahan_baku;?>" onClick="getRetur(this.id)" data-id_supplier="<?php echo $col->id_supplier; ?>" class="modal-trigger"><i class="material-icons edit-button">arrow_back</i></a> 
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

    
    <!-- modal input retur -->
    <div id="addretur-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">
                <form id="form-add-retur-bahan-baku" class="col s12" action="<?php echo site_url('warehouse/penerimaan/save_retur_bahan_baku'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h5>Form Retur Bahan Baku</h5>
                        </div>
                    </div>
                    <!-- generate id sales order -->
                    <?php
                    $hitung = 0;
                    $jumlahIdSama = 0;
                    $count = 0;
                    $date = date('Ymd');
                    foreach ($retur_bahan_baku->result() as $row) :
                        $hitung++;
                        if (strpos($row->id_retur, $date) !== false) {
                            $jumlahIdSama++;
                        }
                    endforeach;
                    $id_retur= $date . ($jumlahIdSama + 1);
                    foreach ($retur_bahan_baku->result() as $row) :
                        $count = 0;
                        if ($id_retur == $row->id_retur) {
                            $count++;

                        }
                    endforeach;
                    $id_retur = $date . ($jumlahIdSama + 1 + $count);
                    ?>
                    <!-- end generate id sales order -->
                    <div class="row">
                       <div class="col s12">
                            <div class="input-field col s12">
                                <input id="id-retur" name="id-retur" me="id-retur" type="text" class="validate" autocomplete="off" value="<?php echo $id_retur; ?>" readonly>
                                <label for="id-retur">No Retur</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="input-field col s12">
                                <input id="id-bahan-baku" name="id-bahan-baku" type="text" class="validate" autocomplete="off"  value="<?php echo $col->id_bahan_baku;?>" readonly>
                                <label for="id-bahan-baku">ID Bahan Baku</label>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                       <div class="col s12">
                            <div class='input-field col s12'>
                                <input id='jml-bahan-baku' name='jml-bahan-baku' type='number' class='validate' autocomplete='off' placeholder="0" value="">
                                <label for='jml-bahan-baku'>Jumlah</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="input-field col s12">
                               <textarea id="alasan" name="alasan" class="materialize-textarea" placeholder="Alasan Pengembalian"></textarea>
                               <label for="alasan">Alasan Pengembalian</label>
                            </div>
                        </div>
                   </div>

                   <div class="row">
                        <div class="col s12">
                            <div class="input-field col s12">
                                <input id="id_supplier" name="id_supplier" class="materialize-textarea" placeholder="id_supplier" value="" readonly>
                                <label for="id_supplier">ID Supplier</label>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col s12">
                            <div class="input-field col s12">
                                <input id="tanggal" type="date" class="datepicker" placeholder="Tanggal retur">
                                <label for="datepicker">Tanggal Retur</label>
                            </div>
                        </div>
                    </div>
 -->
                </form>

  	</div>
  </div>
<div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="save_retur_bahan_baku" id="save_retur_bahan_baku"> <a href="#konfirm-addretur" class="modal-trigger">Save
                <i class="material-icons right">send</i>
            </button>
        </div>



  	<!-- Modal Konfirm add retur-->
  	<div id="konfirm-addretur" class="modal">
    	<div class="modal-content">
	    	<h5>Apakah Data akan Disimpan? </h5>
            <form id="form-konfirm-add-retur" class="col s12" action="<?php echo site_url('warehouse/penerimaan/save_retur_bahan_baku'); ?>" method="get">
    	</div>
    	<div class="modal-footer">
            <a href="penerimaan" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="tambah_retur" id="submit-form-add-retur-bahan-baku"> <!--<a href="#!" class="modal-trigger">-->Ya</a>
                <i class="material-icons right">send</i>
            </button>
        </div>
  	</div>



	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>