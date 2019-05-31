<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Sales Order</title>
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
                        <a class="breadcrumb no-pointer-event">Order</a>
                        <a href="sales_order" class="breadcrumb">Sales Order</a>
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
                    <li class="tab col s2"><a href="#pending" class="active small-font">Pending</a></li>
                    <li class="tab col s2"><a class="small-font" href="#on-process">
                            On-Process</a></li>
                    <li class="tab col s2"><a href="#success" class="small-font">
                            Success</a></li>
                </ul>
                <br>
            </div>
            <!-- konten tab -->
            <div id="pending" class="col s12 white-text content-color">
                <table class="responsive-table centered highlight">
                    <thead class="bottom-border">
                        <tr>
                            <th>Tanggal</th>
                            <th>No. Order</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>02 - 02 - 2058</td>
                            <td>1125356</td>
                            <td>Nasirudin Sabiq</td>
                            <td>2580</td>
                            <td>Rp. 25800000</td>
                        </tr>
                        <tr>
                            <td>02 - 02 - 2058</td>
                            <td>1125357</td>
                            <td>RVZ Didan</td>
                            <td>2580</td>
                            <td>Rp. 25800000</td>
                        </tr>
                        <tr>
                            <td>02 - 02 - 2058</td>
                            <td>1125358</td>
                            <td>Aowkwk</td>
                            <td>2580</td>
                            <td>Rp. 25800000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="on-process" class="col s12 white-text content-color">
                <table class="responsive-table centered highlight">
                    <thead class="bottom-border">
                        <tr>
                            <th>Tanggal</th>
                            <th>No. Order</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>02 - 02 - 2058</td>
                            <td>1125356</td>
                            <td>Nasirudin Sabiq</td>
                            <td>2580</td>
                            <td>Rp. 25800000</td>
                        </tr>
                        <tr>
                            <td>02 - 02 - 2058</td>
                            <td>1125358</td>
                            <td>Aowkwk</td>
                            <td>2580</td>
                            <td>Rp. 25800000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="success" class="col s12 white-text content-color">
                <table class="responsive-table centered highlight">
                    <thead class="bottom-border">
                        <tr>
                            <th>Tanggal</th>
                            <th>No. Order</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>02 - 02 - 2058</td>
                            <td>1125356</td>
                            <td>Nasirudin Sabiq</td>
                            <td>2580</td>
                            <td>Rp. 25800000</td>
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