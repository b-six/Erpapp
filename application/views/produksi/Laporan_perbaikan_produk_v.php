<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Laporan Perbaikan Produk</title>
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
                        <a href="produk_baru" class="breadcrumb">Perbaikan</a>
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
            
        <!-- card-->
       <table class="responsive-table centered highlight white-text">
                    <thead class="bottom-border">
                        <tr>
							<th>ID Perbaikan Produk</th>
                            <th>ID Quality Control</th>
							<th>Jumlah Perbaikan</th>
                            <th>Jenis Produk</th>
                            <th>Keterangan Perbaikan</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
						<td>e85h172bn </td>
						<td>aq122bas </td>
						<td>0 </td>
						<td>Teh Botol </td>
						<td>Tidak Rusak </td>
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