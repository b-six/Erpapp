<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Laporan Produksi</title>
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
                        <a href="stok_produk" class="breadcrumb">Laporan Produksi</a>
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
		<div class="row">
            
        <table class="responsive-table centered highlight white-text">
                    <thead class="bottom-border">
                        <tr>
							<th>ID Laporan Produksi</th>
							<th>Tanggal Laporan</th>
                            <th>ID Hasil Produksi</th>
                            <th>ID Perencanaan Produksi</th>
                            <th>ID Perbaikan Produk</th>
							<th>ID Biaya Produksi</th>
							<th>Jumlah Barang</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
						<td>b81ba73bn</td>
						<td>2-02-2022</td>
						<td>cn1982h58</td>
						<td>d192ndnq8</td>
						<td>e85h172bn</td>
						<td>fmanbs923</td>
						<td>100 dus</td>
						<td> </td>
						</tr>
                    </tbody>

                </table>
		</div>



    </div>
    </div>
    <!-- js -->
    <?php $this->load->view('produksi/partials/js.php') ?>
</body>

</html>