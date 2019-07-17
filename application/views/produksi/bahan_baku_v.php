<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Bahan Baku</title>
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
                        <a href="bahan_baku" class="breadcrumb">Bahan Baku</a>
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
            <div class="col s12">
                <ul class="tabs blue-dark-grey">
                    <li class="tab col s2"><a href="#kemasan" class="active small-font">Kemasan</a></li>
                    <li class="tab col s2"><a class="small-font" href="#minuman">Minuman</a></li>
                </ul>
                <br>
            </div>
            <!-- konten tab -->

            <!-- tab kemasan -->
            <div id="kemasan" class="col s12 white-text">
                <!-- 1 card -->
                <div class="col s12">
                    <div class="card horizontal black-text m7 hoverable rounded-card">
                        <div class="card-content center bold-font">
                            1.
                        </div>
                        <div class="card-image">
                            <img width="40px" height="100px" src="<?php echo base_url('assets/img/produksi/btl.jpg'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Bahan Baku</b></h6>
                                        <h6><b>Jenis Bahan Baku</b></h6>
                                        <h6><b>Tanggal Berlaku</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSRO1PLASTIK</h6>
                                        <h6>: Plastik</h6>
                                        <h6>: 22-02-2022 s/d 22-03-2022 </h6>
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
                            <img style="margin-left:20px;margin-right:20px; " width="40px" height="100px" src="<?php echo base_url('assets/img/produksi/250.jpg'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Bahan Baku</b></h6>
                                        <h6><b>Jenis Bahan Baku</b></h6>
                                        <h6><b>Tanggal Berlaku</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSRO2KARDUS</h6>
                                        <h6>: Kardus</h6>
                                        <h6>: 22-02-2022 s/d 22-03-2022 </h6>
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
                            <img width="40px" height="100px" src="<?php echo base_url('assets/img/produksi/klg.jpg'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Bahan Baku</b></h6>
                                        <h6><b>Jenis Bahan Baku</b></h6>
                                        <h6><b>Tanggal Berlaku</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSRO3KALENG</h6>
                                        <h6>: Kaleng</h6>
                                        <h6>: 22-02-2022 s/d 22-03-2022 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- tab minuman -->
            <div id="minuman" class="col s12 white-text">
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
                                        <h6><b>Id Bahan Baku</b></h6>
                                        <h6><b>Jenis Bahan Baku</b></h6>
                                        <h6><b>Tanggal Berlaku</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSROEKSTRAKTEHMELATI</h6>
                                        <h6>: Ekstrak Teh</h6>
                                        <h6>: 22-02-2022 s/d 22-03-2022 </h6>
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
                            1.
                        </div>
                        <div class="card-image">
                            <img src="https://lorempixel.com/100/140/nature/6">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4">
                                        <h6><b>Id Bahan Baku</b></h6>
                                        <h6><b>Jenis Bahan Baku</b></h6>
                                        <h6><b>Tanggal Berlaku</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSROGULA</h6>
                                        <h6>: Gula</h6>
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
                                        <h6><b>Id Bahan Baku</b></h6>
                                        <h6><b>Jenis Bahan Baku</b></h6>
                                        <h6><b>Tanggal Berlaku</b></h6>
                                    </div>
                                    <div class="col s8">
                                        <h6>: SOSROPERASABUAH</h6>
                                        <h6>: Perasa Buah-buahan</h6>
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