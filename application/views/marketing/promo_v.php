<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Promo</title>
    <?php $this->load->view('marketing/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('marketing/partials/navbar.php') ?>
    <div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Product</a>
                        <a href="promo" class="breadcrumb">Promo</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('marketing/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a class="modal-trigger" href="#add-promo-modal"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>
        </div>

        <!-- Modal Tambah Promo -->
        <div id="add-promo-modal" class="modal modal-fixed-footer" >
            <!-- modal content -->
            <div class="modal-content">
                <div class="col s12 center">
                    <h4>Tambah Promo</h4>
                </div>

                <form method="post" action="<?php echo base_url('marketing/promo/tambahPromo')?>" class="col s12" id="form-add-pb" enctype="multipart/form-data">

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="id_promo" id="id_promo" type="text" >
                            <label for="id_promo">ID Promo</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="produk" id="produk" type="text" >
                            <label for="produk">Produk</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="jumlah_pembelian" id="jumlah_pembelian" type="number" >
                            <label for="jumlah_pembelian">Jumlah Pembelian</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <div class="file-field input-field">
                                <div class="card-title">Banner Promo</div>
                                <div class="btn orange">
                                    <span><i class="material-icons">attach_file</i></span>
                                    <input id="banner-promo" name="banner_promo" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path" type="text" placeholder="Banner Promo">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 center">
                            <label for="banner-preview">Tampilan Banner</label>
                            <img src="" name="banner-preview" id="banner-preview" width="250" />
                        </div>
                    </div>

                </form> 
            </div>
            <!-- /modal content -->

            <!-- modal footer -->
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                <button class="btn waves-effect waves-light green darken-3" type="submit" name="submit-add-pb" id="submit-add-pb"><i class="material-icons">add</i></button>
            </div>
            <!-- /modal footer -->
        </div>
        <!-- /Modal tambah Promo -->

        <!-- Modal Edit Promo -->
        <div id="edit-promo-modal" class="modal modal-fixed-footer" >
            <!-- modal content -->
            <div class="modal-content">
                <div class="col s12 center">
                    <h4>Tambah Promo</h4>
                </div>

                <form method="post" action="<?php echo base_url('marketing/promo/editPromo')?>" class="col s12" id="form-edit-promo" enctype="multipart/form-data">

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="id_promo" id="id_promo-edit" type="text" >
                            <label for="id_promo">ID Promo</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="produk" id="produk-edit" type="text" >
                            <label for="produk">Produk</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="jumlah_pembelian" id="jumlah_pembelian-edit" type="number" >
                            <label for="jumlah_pembelian">Jumlah Pembelian</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <div class="file-field input-field">
                                <div class="card-title">Banner Promo Baru</div>
                                <div class="btn orange">
                                    <span><i class="material-icons">attach_file</i></span>
                                    <input id="banner-promo-edit" name="banner_promo" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path" type="text" placeholder="Banner Promo">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 center">
                            <label for="banner-preview">Tampilan Banner</label>
                            <img src="" name="banner-preview" id="banner-preview-edit" width="250" />
                        </div>
                    </div>
                </form> 
            </div>
            <!-- /modal content -->

            <!-- modal footer -->
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                <button class="btn waves-effect waves-light green darken-3" type="submit" name="submit-add-pb" id="submit-edit-promo"><i class="material-icons">add</i></button>
            </div>
            <!-- /modal footer -->
        </div>
        <!-- /Modal Edit Promo -->

        <!-- Modal Hapus Promo -->
        <div id="del-promo-modal" class="modal" >
            <!-- modal content -->
            <div class="modal-content">
                <div class="col s12 center">
                    <h4>Hapus Produk Baru</h4>
                    <p>Yakin untuk menghapus produk baru ini?</p>
                </div>
            </div>
            <!-- /modal content -->

            <!-- modal footer -->
            <div class="modal-footer">
                <a data-href="<?php echo base_url('marketing/promo/hapusPromo?id_promo='); ?>" class="btn-flat waves-effect waves-light" id="del-promo-button"><i class="material-icons icon-green">check</i></a>
                <a href="#!" class="btn modal-close waves-effect waves-light red darken-3"><i class="material-icons">close</i></a>
            </div>
            <!-- /modal footer -->
        </div>
        <!-- /Modal Hapus Promo -->

        <!-- tab -->
        <div class="row">
            <div class="col s12">
                <ul class="tabs blue-dark-grey">
                    <li class="tab col s2"><a href="#berlaku" class="active small-font">Berlaku</a></li>
                    <li class="tab col s2"><a class="small-font" href="#berakhir">Berakhir</a></li>
                </ul>
                <br>
            </div>
            <!-- konten tab -->

            <!-- tab berlaku -->
            <div id="berlaku" class="col s12 white-text">            
            
                <!-- 1 card -->
                <?php foreach($promo as $v){ ?>
                    <div class="col s12" style="padding: 0.5%;">
                        <div class="card horizontal black-text m7 hoverable rounded-card" style="margin: 0px;">
                            <div class="card-image" style="margin-left: 10px; width: 120px">
                                <img src="<?php echo (base_url('document/marketing/promo/').$v['banner_promo']); ?>" height="60" style="width: 130px;">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content" style="padding: 1%; height: 60px;">
                                    <div class="col s4">
                                        <p><b>ID Promo</b></p>
                                        <p><b>Tanggal Berlaku</b></p>
                                    </div>
                                    <div class="col s6">
                                        <p>: <?php echo $v['id_promo']; ?></p>
                                        <p>: sdfdsfds</p>
                                    </div>
                                    <div class="col s2 right-align" style="padding:inherit; height: 100%" >
                                        <div id="card-button">
                                            <a href="javascript:void(0);" class="del-promo-trigger" data-id_promo="<?php echo $v['id_promo']; ?>"><i class="material-icons delete-button oncard promo">delete_forever</i></a>
                                            <a class="edit-promo-trigger" class="modal-trigger" href="javascript:void(0);" data-id_promo="<?php echo $v['id_promo']; ?>" data-produk="<?php echo $v['produk']; ?>" data-jumlah_pembelian="<?php echo $v['jumlah_pembelian']; ?>" data-banner_promo="<?php echo $v['banner_promo']; ?>" data-tampil_link="<?php echo base_url('document/marketing/promo/'); ?>"><i class="material-icons edit-button oncard promo">create</i></a>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- /1 Card -->
            </div>
            <!-- /tab berlaku -->

            <!-- tab berakhir -->
            <div id="berakhir" class="col s12 white-text">
                <!-- 1 card -->
                <div class="col s12">
                    <div class="card horizontal black-text m7 hoverable rounded-card">
                        <div class="card-content center bold-font">
                            1.
                        </div>
                        <div class="card-image">
                            <img src="https://lorempixel.com/100/140/nature/6">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Promo</b></h6>
                                        <h6><b>Tanggal Berlaku</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSRO4NIKMAT2019</h6>
                                        <h6>: 22-02-2022 s/d 22-03-2022 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 1 card -->
                <div class="col s12">
                    <div class="card horizontal black-text m7 hoverable rounded-card maxHeight">
                        <div class="card-content center bold-font">
                            2.
                        </div>
                        <div class="card-image">
                            <img src="https://lorempixel.com/100/140/nature/6">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Promo</b></h6>
                                        <h6><b>Tanggal Berlaku</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSRO5NIKMAT2019</h6>
                                        <h6>: 22-02-2022 s/d 22-03-2022 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /tab berakhir -->
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>