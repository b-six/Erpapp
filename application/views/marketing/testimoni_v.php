<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Testimoni</title>
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
                        <a class="breadcrumb no-pointer-event">Customer</a>
                        <a href="" class="breadcrumb">Testimoni</a>
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

        <!-- konten tab -->
        <div id="pending" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Nama Customer</th>
                        <th>Jenis Customer</th>
                        <th>Produk</th>
                        <th>Pesan</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Nasirudin Sabiq</td>
                        <td>Retailer</td>
                        <td>Teh Kotak</td>
                        <td>Jajajajajajaja</td>
                    </tr>
                    <tr>
                        <td>RVZ Didan</td>
                        <td>Personal</td>
                        <td>Teh Bundar</td>
                        <td>Medan kota marah marah</td>
                    </tr>
                    <tr>
                        <td>Rizkui Ryumada</td>
                        <td>Distributor</td>
                        <td>Teh Ajeng</td>
                        <td>Yooo</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    </div>
    <!-- js -->
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>