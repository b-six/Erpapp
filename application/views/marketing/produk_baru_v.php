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

                <form action="" method="POST">
                    <div class="input-field"> 
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Input field">
                            <label class="control-label" for="">label</label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn">label</button>
                </form>
            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-add-po" id="submit-add-po">Submit
                <i class="material-icons right">+</i>
            </button>
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