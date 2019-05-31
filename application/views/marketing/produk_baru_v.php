<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Produk Baru</title>
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
                        <a href="produk_baru" class="breadcrumb">Produk Baru</a>
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

        <!-- card-->
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




    </div>
    </div>
    <!-- js -->
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>