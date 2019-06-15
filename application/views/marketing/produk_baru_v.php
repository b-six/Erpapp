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
    <div id="add-pb-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 center">
                    <h4>Tambah Produk Baru</h4>
                </div>

                <form method="post" action="<?php echo base_url('marketing/produk_baru/uploadGambar')?>" class="col s12" id="form-add-pb" enctype="multipart/form-data">

                    <!-- <div class="row">
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
                        <div class="btn orange">
                            <span><i class="material-icons">attach_file</i></span>
                            <input name="file_desain" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path" type="text" placeholder="File Desain">
                        </div>
                    </div> -->

                    <!-- <div class="file-field input-field">
                        <div class="btn orange">
                            <span><i class="material-icons">attach_file</i></span>
                            <input name="tampilan_produk" id="tampilan_produk" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path" type="text" placeholder="Tampilan Produk">
                        </div>
                    </div> -->

                </form>
                
                <div class="input-field">
                    <div class="card"></div>
                    <div class="card-title">Image Upload</div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s4 center-align">
                                <div id="upload-demo" style="width: 350px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4" style="padding-top: 30px;">
                                <div class="file-field input-field">
                                    <div class="btn orange">
                                        <span><i class="material-icons">attach_file</i></span>
                                        <input name="tampilan_produk" id="tampilan_produk" type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path" type="text" placeholder="Tampilan Produk">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <button class="btn upload-result">Upload Image</button>
                            <div class="col s4">
                                <div id="upload-demo-i" style="background: #e1e1e1; width: 300px; padding: 30px; height: 300px; margin-top: 30px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light green darken-3" type="submit" name="submit-add-pb" id="submit-add-pb"><i class="material-icons">add</i></button>
        </div>

    </div>
    <!-- /Modal tambah Produk Baru -->

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

        <!-- cards-->
        <div id="pending" class="col s12 white-text content-color">
            <!-- 1 card -->
            <div class="col s12">
                <div class="card horizontal black-text m7 hoverable rounded-card">
                    <div class="card-content center">
                        1.
                    </div>
                    <div class="card-image">
                        <img src="https://lorempixel.com/100/170/nature/6">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s3">
                                    <h6><b>Nama Produk</b></h6>
                                    <h6><b>Kadaluwarsa</b></h6>
                                    <h6><b>Harga Produk</b></h6>
                                </div>
                                <div class="col s9">
                                    <h6>: Sosro1</h6>
                                    <h6>: 22-02-2022</h6>
                                    <h6>: Rp. 258.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content center">
                        <h6 class="small-text"><b>Jumlah Permintaan</b></h6>
                        <h3>258</h3>
                    </div>
                </div>
            </div>

            <!-- 1 card -->
            <div class="col s12">
                <div class="card horizontal black-text m7 hoverable rounded-card">
                    <div class="card-content center">
                        2.
                    </div>
                    <div class="card-image">
                        <img src="https://lorempixel.com/100/170/nature/6">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s3">
                                    <h6><b>Nama Produk</b></h6>
                                    <h6><b>Kadaluwarsa</b></h6>
                                    <h6><b>Harga Produk</b></h6>
                                </div>
                                <div class="col s9">
                                    <h6>: Sosro1</h6>
                                    <h6>: 22-02-2022</h6>
                                    <h6>: Rp. 258.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content center">
                        <h6 class="small-text"><b>Jumlah Permintaan</b></h6>
                        <h3>258</h3>
                    </div>
                </div>
            </div>

            <!-- 1 card -->
            <div class="col s12">
                <div class="card horizontal black-text m7 hoverable rounded-card">
                    <div class="card-content center">
                        3.
                    </div>
                    <div class="card-image">
                        <img src="https://lorempixel.com/100/170/nature/6">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s3">
                                    <h6><b>Nama Produk</b></h6>
                                    <h6><b>Kadaluwarsa</b></h6>
                                    <h6><b>Harga Produk</b></h6>
                                </div>
                                <div class="col s9">
                                    <h6>: Sosro1</h6>
                                    <h6>: 22-02-2022</h6>
                                    <h6>: Rp. 258.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content center">
                        <h6 class="small-text"><b>Jumlah Permintaan</b></h6>
                        <h3>258</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /cards -->
    </div>
    <!-- /konten -->



    <!-- js -->
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>