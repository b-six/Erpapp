<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Stok Barang</title>
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
                        <a class="breadcrumb no-pointer-event">Produk</a>
                        <a href="stok_produk" class="breadcrumb">Stok Barang</a>
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
        
        <!-- Card Wrapper -->
        <div class="col s12 white-text content-color">
            <!-- 1 card -->
            <?php foreach($stok_produk->result_array() as $v){ ?>
                <div class="col s12">
                    <div class="card horizontal black-text m7 hoverable rounded-card">
                        <div class="card-stacked">
                            <div class="card-content card-content-stok-barang">
                                <div class="row">
                                    <div class="col s3 margin-0">
                                        <h6><b>Nama Produk</b></h6>
                                        <h6><b>Kadaluwarsa</b></h6>
                                        <h6><b>Harga Produk</b></h6>
                                    </div>
                                    <div class="col s9 margin-0">
                                        <h6>: <?php echo $v['nama_barang']; ?></h6>
                                        <h6>: <?php echo $v['tanggal_kadaluarsa_barang']; ?></h6>
                                        <h6>: <?php echo $v['harga_barang']; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-image card-content-stok-barang valign-wrapper">
                            <div class="">
                                <img src="https://lorempixel.com/120/120/nature/6">
                            </div>
                        </div>
                        <div class="card-content card-content-stok-barang valign-wrapper">
                            <div>
                                <h2 class="margin-0"><?php echo $v['jumlah_stok_barang']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- /1 card -->
        </div>
        <!-- /Card Wrapper -->




    </div>
    </div>
    <!-- js -->
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>