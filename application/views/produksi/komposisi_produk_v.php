<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Komposisi Produk</title>
    <?php $this->load->view('produksi/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('produksi/partials/navbar.php') ?>
    <div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Produksi</a>
                        <a href="promo" class="breadcrumb">Komposisi Produk</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('produksi/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href=""><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>

        <!-- tab -->
        <div class="row">
           
            <!-- konten tab -->

            <!-- tab berlaku -->
            <div class="col s12 white-text">
                <!-- 1 card -->
                <div class="col s12">
                    <div class="card horizontal black-text m7 hoverable rounded-card">
                        <div class="card-content center bold-font">
                            1.
                        </div>
                        <div class="card-image">
                            <img width="40px" height="100px" src="<?php echo base_url('assets/img/produksi/tbtss.jpg'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Komposisi</b></h6>
                                        <h6><b>Nama Produk</b></h6>
                                        <h6><b>Komposisi</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSROKOMPOSISITEHBOTOL</h6>
                                        <h6>: Teh Botol</h6>
                                        <h6>: Air, Ekstrak Teh Melati dan Gula Water, Extract of Jasmine Tea and Sugar</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 1 card -->
                <div class="col s12">
                    <div class="card horizontal black-text m7 hoverable rounded-card">
                        <div class="card-content center bold-font">
                            2.
                        </div>
                        <div class="card-image">
                            <img width="40px" height="100px" src="<?php echo base_url('assets/img/produksi/ft.png'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Komposisi</b></h6>
                                        <h6><b>Nama Produk</b></h6>
                                        <h6><b>Komposisi</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSROKOMPOSISIFRUITTEA</h6>
                                        <h6>: Fruit Tea</h6>
                                        <h6>: Air, gula, sirup jagung tinggi fruktosa, teh hitam, pengatur keasaman asam sitrat, natrium sitrat, konsentrat buah, perisa identik alami dan antikosidan (Asam askorbat).</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 1 card -->
                <div class="col s12">
                    <div class="card horizontal black-text m7 hoverable rounded-card">
                        <div class="card-content center bold-font">
                            3.
                        </div>
                        <div class="card-image">
                            <img width="40px" height="100px" src="<?php echo base_url('assets/img/produksi/yuzu.png'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Komposisi</b></h6>
                                        <h6><b>Nama Produk</b></h6>
                                        <h6><b>Komposisi</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSROKOMPOSISIYUZUTEA</h6>
                                        <h6>: Yuzu Tea</h6>
                                        <h6>: Air, gula, teh hijau, perisa sintetik yuzu, pengatur keasaman (asam sitrat, natrim sitrat), konsentrat buah lemon, dan antioksidan (asam askorbat).</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('produksi/partials/js.php') ?>
</body>

</html>