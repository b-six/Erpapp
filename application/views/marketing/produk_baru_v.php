<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Produk Baru</title>
    <?php $this->load->view('marketing/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('marketing/partials/navbar.php') ?>
    
    <!-- Modal Tambah Produk Baru -->
    <div id="add-pb-modal" class="modal modal-fixed-footer" >
        <!-- modal content -->
        <div class="modal-content">
            <div class="col s12 center">
                <h4>Tambah Produk Baru</h4>
            </div>

            <form method="post" action="<?php echo base_url('marketing/produk_baru/tambahProduk')?>" class="col s12" id="form-add-pb" enctype="multipart/form-data">

                <div class="row">
                    <div class="input-field col s12">
                        <input name="nama" id="nama" type="text" >
                        <label for="nama">Nama</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="jenis" id="jenis" type="text" >
                        <label for="jenis">Jenis</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="harga" id="harga" type="number" >
                        <label for="harga">Harga</label>
                    </div>
                </div>


                <div class="file-field input-field">
                    <div class="card-title">File Desain</div>
                    <div class="btn orange">
                        <span><i class="material-icons">attach_file</i></span>
                        <input name="file_desain" type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text" placeholder="File Desain">
                    </div>
                </div>

                <!-- simpan nama gambar hasil croppan di sini -->
                <div class="row" style="display: none;">
                    <div class="input-field col s12">
                        <input class="hasil-tampilan-produk" name="hasil-tampilan-produk" id="tampilan-produk" name="tampilan-produk" type="text" >
                    </div>
                </div>
            </form>

            <div class="row" >
                <div class="input-field col s12">
                    <!-- image selector -->
                    <div class="row">
                        <div class="file-selector">
                            <div class="file-field input-field">
                                <div class="card-title">Tampilan Produk</div>
                                <div class="btn orange">
                                    <span><i class="material-icons">attach_file</i></span>
                                    <input name="tampilan_produk" class="tampilan_produk" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path" type="text" name="tampilan_produk" placeholder="Tampilan Produk">
                                </div>
                                <!-- <button class="btn rotate">rotate</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- /image selector -->
                    
                    <!-- image viewport -->
                    <div class="row">
                        <div class="col s8 center-align">
                            <div class="image-crop-view" style=""></div>
                        </div>
                        <div class="col s4 center-align">
                            <button class="btn btn-crop" style="display: none;">Crop Image</button>
                        </div>
                    </div>
                    <!-- /image viewport -->
                </div>
            </div>
        </div>
        <!-- /modal content -->

        <!-- modal footer -->
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light green darken-3" type="submit" name="submit-add-pb" id="submit-add-pb"><i class="material-icons">add</i></button>
        </div>
        <!-- /modal footer -->
    </div>
    <!-- /Modal tambah Produk Baru -->

    <!-- Modal Edit Produk Baru -->
    <div id="edit-pb-modal" class="modal modal-fixed-footer" >
        <!-- modal content -->
        <div class="modal-content">
            <div class="col s12 center">
                <h4>Edit Produk Baru</h4>
            </div>

            <form method="post" action="<?php echo base_url('marketing/produk_baru/editProduk')?>" class="col s12" id="form-edit-pb" enctype="multipart/form-data">

                <div class="row">
                    <div class="input-field col s12">
                        <input name="nama-edit" class="nama-edit" type="text" >
                        <label for="nama">Nama</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="jenis-edit" class="jenis-edit" type="text" >
                        <label for="jenis">Jenis</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="harga-edit" class="harga-edit" type="number" >
                        <label for="harga">Harga</label>
                    </div>
                </div>


                <div class="file-field input-field">
                    <div class="card-title">File Desain</div>
                    <div class="btn orange">
                        <span><i class="material-icons">attach_file</i></span>
                        <input name="file_desain" type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file_desain-edit" class="file-path" type="text" placeholder="File Desain">
                    </div>
                </div>

                <!-- simpan nama gambar hasil croppan di sini -->
                <div class="row" style="display: none;">
                    <div class="input-field col s12">
                        <input class="hasil-tampilan-produk" name="hasil-tampilan-produk" type="text" >
                    </div>
                </div>
                <!-- /simpan nama gambar hasil croppan di sini -->

                <div class="row" style="display: none;">
                    <div class="input-field col s12">
                        <input class="id_barang" name="id_barang" type="text" >
                    </div>
                </div>
            </form>

            <div class="row" >
                <div class="input-field col s12">
                    <!-- image selector -->
                    <div class="row">
                        <div class="file-selector">
                            <div class="file-field input-field">
                                <div class="card-title">Tampilan Produk</div>
                                <div class="btn orange">
                                    <span><i class="material-icons">attach_file</i></span>
                                    <input name="tampilan_produk" class="tampilan_produk-edit" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path" type="text" name="tampilan_produk" placeholder="Tampilan Produk">
                                </div>
                                <!-- <button class="btn rotate">rotate</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- /image selector -->
                    
                    <!-- image viewport -->
                    <div class="row">
                        <div class="col s8 center-align">
                            <div class="image-crop-view-edit" style=""></div>
                        </div>
                        <div class="col s4 center-align">
                            <button class="btn btn-crop-edit" style="display: none;">Crop Image</button>
                        </div>
                    </div>
                    <!-- /image viewport -->
                </div>
            </div>

        </div>
        <!-- /modal content -->

        <!-- modal footer -->
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light green darken-3" type="submit" name="submit-edit-pb" id="submit-edit-pb"><i class="material-icons">add</i></button>
        </div>
        <!-- /modal footer -->
    </div>
    <!-- /Modal Edit Produk Baru -->

    <!-- Modal Hapus Produk Baru -->
    <div id="del-pb-modal" class="modal" >
        <!-- modal content -->
        <div class="modal-content">
            <div class="col s12 center">
                <h4>Hapus Produk Baru</h4>
                <p>Yakin untuk menghapus produk baru ini?</p>
            </div>

            <!-- <form method="post" action="<?php //echo base_url('marketing/produk_baru/tambahProduk')?>" class="col s12" id="form-add-pb" enctype="multipart/form-data">
                <input id="del-pb-input" name="id_barang" type="hidden" >
            </form>      -->   
        </div>
        <!-- /modal content -->

        <!-- modal footer -->
        <div class="modal-footer">
            <a data-href="<?php echo base_url('marketing/produk_baru/hapusProdukBaru?id_barang='); ?>" class="btn-flat waves-effect waves-light" id="del-pb-button"><i class="material-icons icon-green">check</i></a>
            <a href="#!" class="btn modal-close waves-effect waves-light red darken-3"><i class="material-icons">close</i></a>
        </div>
        <!-- /modal footer -->
    </div>
    <!-- /Modal Hapus Produk Baru -->

    <!-- konten -->
    <div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Product</a>
                        <a href="produk_baru" class="breadcrumb">Produk Baru</a>
                    </div>
                </nav>
            </div>
            <!-- /breadcrumb -->

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('marketing/partials/searchbar.php'); ?></div>
            <!-- /searchbar -->

            <!-- add Produk Baru -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#add-pb-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>
            <!-- /add Produk Baru -->
        </div>
        
        <!-- card Wrapper-->
        <div id="pending" class="col s12 white-text content-color">
            <?php $no=1; ?>
            
            <!-- 1 card -->
            <?php foreach($produk_baru->result_array() as $v){ ?>
                <div class="col s12">
                    <div class="card horizontal black-text m7 hoverable rounded-card">
                        <div class="card-content center">
                            <?php echo $no; ?>
                        </div>
                        <div class="card-image">
                            <img src="<?php echo (base_url('document/marketing/produk_baru/tampilan/').$v['tampilan_produk']); ?>" width="130" height="130">
                        </div>
                        <div class="card-stacked">
                            <!-- card content wrapper -->
                            <div class="row card-content" style="margin:0px; padding: 1%; height: 130px;">
                                <div class="col s4">
                                    <p><b>Nama Produk</b></p>
                                    <p><b>Jenis</b></p>
                                    <p><b>Harga Produk</b></p>
                                    <br/>
                                    <p><b>File Desain</b></p>
                                </div>
                                <div class="col s7">
                                    <p>: <?php echo $v['nama']; ?></p>
                                    <p>: <?php echo $v['jenis']; ?></p>
                                    <p>: <?php echo $v['harga']; ?></p>
                                    <br/>
                                    <p>: <a href="<?php echo (base_url('document/marketing/produk_baru/desain/').$v['file_desain']); ?>">Klik untuk membuka file...</a></p>
                                </div>

                                <div class="col s1" style="height: 100%; padding: inherit; margin: 0px;" >
                                    <div id="card-button" class="center">
                                        <a href="javascript:void(0);" class="del-pb-trigger" data-id_barang="<?php echo $v['id_barang']; ?>"><i class="material-icons delete-button oncard">delete_forever</i></a>
                                        <br/><br/>
                                        <a class="edit-pb-trigger" class="modal-trigger" href="javascript:void(0);" data-id_barang="<?php echo $v['id_barang']; ?>" data-nama="<?php echo $v['nama']; ?>" data-jenis="<?php echo $v['jenis']; ?>" data-harga="<?php echo $v['harga']; ?>" data-file_desain="<?php echo $v['file_desain']; ?>" data-tampilan_produk="<?php echo $v['tampilan_produk']; ?>" data-tampil_link="<?php echo base_url('document/marketing/produk_baru/tampilan/'); ?>"><i class="material-icons edit-button oncard">create</i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /card content wrapper -->
                        </div>
                    </div>
                </div>
            <?php $no++; 
                } ?>
            <!-- /1 Card -->
        </div>
        <!-- /card Wrapper -->
    </div>
    <!-- /konten -->



    <!-- js -->
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>