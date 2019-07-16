<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Quality Control</title>
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
                        <a href="promo" class="breadcrumb">Quality Control</a>
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
                    <li class="tab col s2"><a href="#berlaku" class="active small-font">Berlaku</a></li>
                    <li class="tab col s2"><a class="small-font" href="#berakhir">Berakhir</a></li>
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
							<th>ID Quality Control</th>
							<th>ID Hasil Produksi</th>
                            <th>Status</th>
							<th>Kategory</th>
							<th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
						<td>aq122bas </td>
						<td>b19bba7b </td>
						<td>Normal </td>
						<td>Normal </td>
						</tr>
                    </tbody>
					<tbody>
                        <tr>
						<td>aq122bas </td>
						<td>b19bba7b </td>
						<td>Rusak </td>
						<td>Parah </td>
						</tr>
                    </tbody>

                </table>
            </div>

            <!-- tab berakhir -->
            <div id="berakhir" class="col s12 white-text">
                <!-- 1 card -->
                <table class="responsive-table centered highlight white-text">
                    <thead class="bottom-border">
                        <tr>
							<th>ID Quality Control</th>
							<th>ID Hasil Produksi</th>
                            <th>Status</th>
							<th>Kategory</th>
							<th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
						<td>a </td>
						<td>b </td>
						<td>c </td>
						<td>d </td>
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