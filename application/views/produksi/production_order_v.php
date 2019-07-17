<!DOCTYPE html>
<html lang="en">

<head>
    <title>produksi - Production Order</title>
    <?php $this->load->view('produksi/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('produksi/partials/navbar.php') ?>

    <!-- konten -->
    <div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Order</a>
                        <a href="production_order" class="breadcrumb">Production Order</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('marketing/partials/searchbar.php'); ?></div>

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

            <!-- tab pending -->
            <div id="pending" class="col s12 white-text content-color">
                <table class="responsive-table centered highlight">
                    <thead class="bottom-border">
                        <tr>
                            <th>Tanggal</th>
                            <th>No. Produksi</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($production_order->result() as $row) :
                            $count++;

                            if ($row->status == 'pending') :
                                ?>
                                <tr>
                                    <td><?php echo $row->tanggal; ?></td>
                                    <td><?php echo $row->id_po; ?></td>
                                    <td>
                                        <?php
                                        $hitung = 0;
                                        foreach ($stock_barang->result() as $col) :
                                            $hitung++;
                                            if ($row->id_barang == $col->id_barang) :
                                                echo $col->nama_barang;
                                            endif;
                                        endforeach;
                                        ?>

                                    </td>
                                    <td><?php echo $row->jumlah_pesanan; ?></td>

                                    <td><a href="<?php echo base_url('produksi/production_order/ubah_onprocess?id_po='.$row->id_po); ?>"><i class="material-icons">check_circle_outline</i></a></td>
                                </tr>
                            <?php
                            endif;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- tab onprocess -->
            <div id="on-process" class="col s12 white-text content-color">
                <table class="responsive-table centered highlight">
                    <thead class="bottom-border">
                        <tr>
                            <th>Tanggal</th>
                            <th>No. Produksi</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($production_order->result() as $row) :
                            $count++;

                            if ($row->status == 'onprocess') :
                                ?>
                                <tr>
                                    <td><?php echo $row->tanggal; ?></td>
                                    <td><?php echo $row->id_po; ?></td>
                                    <td>
                                        <?php
                                        $hitung = 0;
                                        foreach ($stock_barang->result() as $col) :
                                            $hitung++;
                                            if ($row->id_barang == $col->id_barang) :
                                                echo $col->nama_barang;
                                            endif;
                                        endforeach;
                                        ?>
                                    </td>
                                    <td><?php echo $row->jumlah_pesanan; ?></td>
                                    <td><a href="<?php echo base_url('produksi/production_order/ubah_success?id_po='.$row->id_po); ?>"><i class="material-icons">check_circle_outline</i></a></td>
                                </tr>
                            <?php
                            endif;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- tab success -->
            <div id="success" class="col s12 white-text content-color">
                <table class="responsive-table centered highlight">
                    <thead class="bottom-border">
                        <tr>
                            <th>Tanggal</th>
                            <th>No. Produksi</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($production_order->result() as $row) :
                            $count++;

                            if ($row->status == 'success') :
                                ?>
                                <tr>
                                    <td><?php echo $row->tanggal; ?></td>
                                    <td><?php echo $row->id_po; ?></td>
                                    <td>
                                        <?php
                                        $hitung = 0;
                                        foreach ($stock_barang->result() as $col) :
                                            $hitung++;
                                            if ($row->id_barang == $col->id_barang) :
                                                echo $col->nama_barang;
                                            endif;
                                        endforeach;
                                        ?>

                                    </td>
                                    <td><?php echo $row->jumlah_pesanan; ?></td>
                                </tr>
                            <?php
                            endif;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('produksi/partials/js.php') ?>
</body>

</html>