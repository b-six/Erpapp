<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Laporan Biaya Produksi</title>
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
                        <a class="breadcrumb no-pointer-event">Laporan</a>
                        <a href="promo" class="breadcrumb">Laporan Biaya Produksi</a>
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
                    <li class="tab col s2"><a href="#" class="active small-font">Berlaku</a></li>
                </ul>
                <br>
            </div>
            <!-- konten tab -->

            <!-- tab berlaku -->
            <div id="berlaku" class="col s12 white-text">
                <!-- 1 card -->
                <table class="responsive-table centered highlight white-text">
                    <thead class="bottom-border">
                        <tr>
							<th>ID Biaya Produksi</th>
							<th>ID Hasil Produksi</th>
							<th>Biaya Tenaga Kerja</th>
							<th>Biaya Waktu Produksi</th>
							<th>Biaya Peralatan</th>
							<th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
						<td>bp17ab09 </td>
						<td>hp18bann </td>
						<td>Rp.  20.000 per Jam </td>
						<td>Rp.   2.500 per produk </td>
						<td>Rp. 500.000 </td>
						<td> </td>
						</tr>
                    </tbody>

                </table>
            </div>

            <!-- tab berakhir -->
           
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('produksi/partials/js.php') ?>
</body>

</html>