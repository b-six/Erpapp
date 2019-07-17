<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Surat Jalan Pengiriman Barang Baku</title>
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
                        <a href="sj_produk_jadi" class="breadcrumb">Pengiriman Bahan Baku</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('warehouse/_partials/searchbar.php'); ?></div>

            <!-- tambah pemesanan -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#add_sjpbb" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>
            

        </div>

        <!-- konten tab -->
       
        <div id="tabelsjpbb" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No</th>
                        <th>No. Surat Jalan PBB</th>
                        <th>Nama Produk</th>
                        <th>Distributor</th>
                        <th>Tgl Surat Jalan PBB</th>
                        
                        
                    </tr>
                </thead>

                <tbody>
                    <?php
                    //$count = 0;
                    $hitung = 0;
                    foreach ($surat_jalan_pengiriman_bahan_baku->result() as $col) :

                        //$count++;
                        ?>
                        
                            <?php
                            
                            foreach ($bahan_baku->result() as $row) :

                                
                                if ($row->id_bahan_baku == $col->id_bahan_baku) :
                                    $hitung++;
                                    ?>
                                    <tr>
                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $col->no_surat_jalan_pbb; ?></td>
                                    <td><?php echo $row->nama_bahan_baku; ?></td>
                                    <td><?php echo $col->nama_kurir; ?></td>
                                    <td><?php echo $col->tgl_surat_jalan_pbb; ?></td>
                        <td class="button-container">
                            <div id="table-button">
                                
                                <a href="<?php echo base_url("warehouse/sj_bahan_baku/delete?id=". $col->no_surat_jalan_pbb); ?>" id="delete_<?php echo $col->no_surat_jalan_pbb;?>" name="delete"  data-no_surat_jalan_pbb="<?php echo $col->no_surat_jalan_pbb; ?>"><i class="material-icons delete-button">delete_forever</i></a> 
                                <a href="#"><i class="material-icons edit-button">create</i></a>
                                <a href="#"><i class="material-icons edit-button">print</i></a>
                            </div>
                        </td>
                                    </td>

                                </tr>
                                <?php
                            endif;


                        endforeach;
                        ?>

                          
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>

        </div>


    
    <!-- modal input -->
    <div id="add_sjpbb" class="modal modal-fixed-footer">
        <div class="modal-content">
        <div class="row">
            <form id="form-add-sjpbb" class="col s12" action="<?php echo site_url('warehouse/sj_bahan_baku/save_surat_jalan_pbb'); ?>" method="post">
                <div class="row">
                    <div class="col s12 center">
                       <h4>Form Input Surat Jalan DBB</h4>
                   </div>
               </div>

           <!-- generate id sales order -->
               <?php
               $hitung = 0;
               $jumlahIdSama = 0;
               $date = date('Ymd');
               foreach ($surat_jalan_pengiriman_bahan_baku->result() as $row) :
                $hitung++;
                if (strpos($row->no_surat_jalan_pbb, $date) !== false) {
                    $jumlahIdSama++;
                }
            endforeach;
            $no_surat = $date . ($jumlahIdSama + 1);
            foreach ($surat_jalan_pengiriman_bahan_baku->result() as $row) :
                $sama = 0;
                if ($no_surat == $row->no_surat_jalan_pbb) {
                    $sama++;
                }   
            endforeach;
            $no_surat_jalan_pbb = 'SJPBB' . $date . ($jumlahIdSama + 1 + $sama);
            ?>
            <!-- end generate id sales order-->

           
        <div class="row">
             <div class="input-field col s12">
                    <input id="no_surat_jalan_pbb" name="no_surat_jalan_pbb" type="text" class="validate" autocomplete="off" value="<?php echo $no_surat_jalan_pbb; ?>" readonly>
                    <label for="no_surat_jalan_pbb">No. SJPBB</label>
                </div>
            
            
            <div class="col s12">
                <div class="input-field col s12">
                    <input type="text" name="namadist" id="namadist">   
                    <label for="namadist">Nama Kurir</label>
                </div>
            </div>

             <div class="col s12">
                <div class="input-field col s12">
            <select id="id_bahan_baku" name="id_bahan_baku" me="id_bahan_baku">
                                <option value="" disabled selected>Pilih Produk</option>
                                <?php $hitung = 0;
                                foreach ($bahan_baku->result() as $col) :
                                    $hitung++;
                                    ?>
                                    <option value="<?php echo $col->id_bahan_baku ?>"><?php echo $col->nama_bahan_baku ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Bahan baku</label>
                        </div>
                    </div>

            <div class="col s12">
                <div class="input-field col s12">
                    <input type="date" name="tgl" id="tgl" placeholder=" ">
                    <label for="tgl">Tgl Surat Jalan</label>
                </div>
            </div>
        
            
        </div>
    </form>
    </div>
</div>
        <div class="modal-footer">

            <a href="sj_produk_jadi" class="modal-close waves-effect waves-green btn-flat">Delete</a>
            <button class="btn waves-effect orange darken-3" type="submit" name="tambah_produk" id="tambah_produk"> <a href="#konfirm" class="modal-trigger">Submit</a>
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
    

<!-- modal edit -->
    <div id="edit_sjpbb" class="modal modal-fixed-footer">
        <div class="modal-content">
        <div class="row">
            <form id="form-edit-sjpbb" class="col s12" action="<?php echo site_url('warehouse/sj_bahan_baku/edit_surat_jalan_pbb'); ?>" method="post">
                <div class="row">
                    <div class="col s12 center">
                       <h4>Form Input Surat Jalan DBB</h4>
                   </div>
               </div>

                
        <div class="row">
             <div class="input-field col s12">
                    <input id="no_surat_jalan_pbb" name="no_surat_jalan_pbb" type="text" class="validate" autocomplete="off" value="<?php echo $no_surat_jalan_pbb; ?>" readonly>
                    <label for="no_surat_jalan_pbb">No. SJPBB</label>
                </div>
            
            
            <div class="col s12">
                <div class="input-field col s12">
                    <input type="text" name="namadist" id="namadist">   
                    <label for="namadist">Nama Kurir</label>
                </div>
            </div>

             <div class="col s12">
                <div class="input-field col s12">
            <select id="id_bahan_baku" name="id_bahan_baku" me="id_bahan_baku">
                                <option value="" disabled selected>Pilih Produk</option>
                                <?php $hitung = 0;
                                foreach ($bahan_baku->result() as $col) :
                                    $hitung++;
                                    ?>
                                    <option value="<?php echo $col->id_bahan_baku ?>"><?php echo $col->nama_bahan_baku ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Bahan baku</label>
                        </div>
                    </div>

            <div class="col s12">
                <div class="input-field col s12">
                    <input type="date" name="tgl" id="tgl" placeholder=" ">
                    <label for="tgl">Tgl Surat Jalan</label>
                </div>
            </div>
        
            
        </div>
    </form>
    </div>
</div>
        <div class="modal-footer">

            <a href="sj_produk_jadi" class="modal-close waves-effect waves-green btn-flat">Delete</a>
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
            <button class="btn waves-effect orange darken-3" type="submit" name="konfirm_tambah" id="konfirm_tambah">Ya
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
    
    <?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
