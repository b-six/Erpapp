<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Production Order</title>
	<?php $this->load->view('warehouse/_partials/css.php') ?>
</head>
<body>
	<?php $this->load->view('warehouse/_partials/navbar.php') ?>
	
	<div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s8">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Order</a>
                        <a href="production_order" class="breadcrumb">Production Order</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('warehouse/_partials/searchbar.php'); ?></div>         

        </div>

        <!-- konten tab -->
        <div id="tabelproductionorder" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>No. Produksi</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $count = 0;
                    foreach ($production_order->result() as $col) :
                        $count++;
                        ?>
                        <tr>
                            <?php
                            //$hitung = 0;
            
                            foreach ($stock_barang->result() as $row) :
                              //$hitung++;
                                if ($row->id_barang == $col->id_barang) :
                                    ?>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $col->tanggal; ?></td>
                                    <td><?php echo $col->id_po; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <!--<td><?php echo $row->tanggal_kadaluarsa_barang; ?></td>
                                    <td><?php echo $row->harga_barang; ?></td>-->
                                    <td><?php echo $col->jumlah_pesanan; ?></td>
                                    <td><?php echo $col->status; ?></td>

                                <?php
                            endif;
                        endforeach;
                        ?>

                            <!--
                            <td><?php echo $col->id_so; ?></td>
                            <td><?php
                                $testimoni_barang = substr($col->testimoni_barang, 0, 25);
                                echo $testimoni_barang; ?></td>
                            <td class="button-container">
                                <div id="table-button">
                                    <a href="#"><i class="material-icons delete-button">delete_forever</i></a> 
                                    <a href="#"><i class="material-icons edit-button">create</i></a>
                                </div>
                            </td>-->
                        </tr>
                    <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </div>

    </div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
