<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Data Produk Jadi</title>
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
                        <a href="promo" class="breadcrumb">Data Produk Jadi</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('marketing/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href=""><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>

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
                <div class="col s12">
                    <div class="card horizontal black-text m7 hoverable rounded-card">
                        <div class="card-content center bold-font">
                            1.
                        </div>
                        <div class="card-image">
                            <img width="40px" height="100px" src="<?php echo base_url('assets/img/produksi/250.jpg'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Produk</b></h6>
                                        <h6><b>Nama Produk</b></h6>
                                        <h6><b>Waktu Produksi</b></h6>
                                        <h6><b>Tanggal Kadaluarsa</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSROTEHBOTOL250ML</h6>
                                        <h6>: Teh Botol 250 ml</h6>
                                        <h6>: 22-02-2022</h6>
                                        <h6>: 22-02-2023</h6>
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
                            <img width="40px" height="100px" src="<?php echo base_url('assets/img/produksi/ft350.jpg'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                <div class="col s4">
                                        <h6><b>Id Produk</b></h6>
                                        <h6><b>Nama Produk</b></h6>
                                        <h6><b>Waktu Produksi</b></h6>
                                        <h6><b>Tanggal Kadaluarsa</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSROFRUITTEA250ML</h6>
                                        <h6>: Fruit Tea 350 ml</h6>
                                        <h6>: 22-02-2022</h6>
                                        <h6>: 22-02-2023</h6>
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
                            <img width="40px" height="100px" src="<?php echo base_url('assets/img/produksi/yz350.jpg'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                <div class="col s4">
                                        <h6><b>Id Produk</b></h6>
                                        <h6><b>Nama Produk</b></h6>
                                        <h6><b>Waktu Produksi</b></h6>
                                        <h6><b>Tanggal Kadaluarsa</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSROYUZUTEA250ML</h6>
                                        <h6>: Yuzu Tea 350 ml</h6>
                                        <h6>: 22-02-2022</h6>
                                        <h6>: 22-02-2023</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

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
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('produksi/partials/js.php') ?>
</body>

</html>