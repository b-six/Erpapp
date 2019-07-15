<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Buat Planning</title>
    <?php $this->load->view('produksi/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('produksi/partials/navbar.php') ?>

    <!-- Modal Add Sales Order -->
    <div id="addSO-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-add-so" class="col s12" action="<?php echo site_url('produksi/sales_order/save_sales_order'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Buat Plan Baru</h4>
                        </div>
                    </div>

                    <!-- generate id sales order -->
                    <?php
                    $hitung = 0;
                    $jumlahIdSama = 0;
                    $date = date('Ymd');
                    foreach ($sales_order->result() as $row) :
                        $hitung++;
                        if (strpos($row->id_so, $date) !== false) {
                            $jumlahIdSama++;
                        }
                    endforeach;
                    $id_so = $date . ($jumlahIdSama + 1);
                    ?>
                    <!-- end generate id sales order -->

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="id_so" name="id_so" type="text" class="validate" autocomplete="off" value="<?php echo $id_so; ?>" readonly>
                            <label for="id_so">No. Order</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">

                            <?php $hitung2 = 0;
                            foreach ($customer->result() as $col2) :
                                $hitung2++;
                                ?>
                                <input id="<?php echo $col2->id_pelanggan; ?>" value="<?php echo $col2->wilayah; ?>" hidden>
                                <input id="<?php echo "x" . $col2->id_pelanggan; ?>" value="<?php echo $col2->tipe_customer; ?>" hidden>
                            <?php endforeach; ?>

                            <select id="id_pelanggan" name="id_pelanggan">
                                <option value="" disabled selected>Select Customer</option>
                                <?php $hitung = 0;
                                foreach ($customer->result() as $col) :
                                    $hitung++;
                                    ?>
                                    <option value="<?php echo $col->id_pelanggan ?>"><?php echo $col->nama_pelanggan ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Customer</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="show-wilayah" id="show-wilayah" placeholder="-" readonly>
                            <label for="show-wilayah">Wilayah</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="show-tipe-customer" id="show-tipe-customer" placeholder="-" readonly>
                            <label for="show-tipe-customer">Tipe Customer</label>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-add-so" id="submit-add-so">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>

    </div>

    <!-- konten -->
    <div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Plan</a>
                        <a href="buat_planning" class="breadcrumb">Buat Planning</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('produksi/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#addSO-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>

        <!-- tab -->
        <div class="row">
            <div class="col s12">
                <ul class="tabs blue-dark-grey">
                    <li class="tab col s2"><a href="#pending" class="active small-font">Terbaru</a></li>
                    <li class="tab col s2"><a class="small-font" href="#on-process">
                            Disetujui</a></li>
                    <li class="tab col s2"><a href="#success" class="small-font">
                            Pending</a></li>
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
                            <th>No. Order</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($sales_order->result() as $row) :
                            $count++;

                            if ($row->status == 'pending') :

                                $hitung = 0;
                                foreach ($customer->result() as $col) :
                                    $hitung++;


                                    if ($col->id_pelanggan == $row->id_pelanggan) :
                                        $nama_pelanggan = $col->nama_pelanggan; ?>
                                        <tr class="clickable-row" data-href="<?php echo site_url('produksi/shopping_cart/index/' . $row->id_so); ?>">
                                            <td><?php echo $row->tanggal_pesanan; ?></td>
                                            <td><?php echo $row->id_so; ?></td>
                                            <td><?php echo $nama_pelanggan; ?></td>
                                            <td><?php echo $row->total_barang; ?></td>
                                            <td><?php echo "Rp. " . number_format($row->total_pesanan) ?></td>
                                            <td class="button-container">
                                                <div id="table-button">
                                                    <a href="#"><i class="material-icons delete-button">delete_forever</i></a> <a href="#"><i class="material-icons edit-button">create</i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif;
                            endforeach;
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
                            <th>No. Order</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($sales_order->result() as $row) :
                            $count++;

                            if ($row->status == 'onprocess') :

                                $hitung = 0;
                                foreach ($customer->result() as $col) :
                                    $hitung++;


                                    if ($col->id_pelanggan == $row->id_pelanggan) :
                                        $nama_pelanggan = $col->nama_pelanggan; ?>
                                        <tr class="clickable-row" data-href="<?php echo site_url('produksi/shopping_cart/index/' . $row->id_so); ?>">
                                            <td><?php echo $row->tanggal_pesanan; ?></td>
                                            <td><?php echo $row->id_so; ?></td>
                                            <td><?php echo $nama_pelanggan; ?></td>
                                            <td><?php echo $row->total_barang; ?></td>
                                            <td><?php echo "Rp. " . number_format($row->total_pesanan) ?></td>
                                            <td class="button-container">
                                                <div id="table-button">
                                                    <a href="#"><i class="material-icons delete-button">delete_forever</i></a> <a href="#"><i class="material-icons edit-button">create</i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif;
                            endforeach;
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
                            <th>No. Order</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($sales_order->result() as $row) :
                            $count++;

                            if ($row->status == 'success') :
                                $hitung = 0;
                                foreach ($customer->result() as $col) :
                                    $hitung++;


                                    if ($col->id_pelanggan == $row->id_pelanggan) :
                                        $nama_pelanggan = $col->nama_pelanggan; ?>
                                        <tr class="clickable-row" data-href="<?php echo site_url('produksi/shopping_cart/index/' . $row->id_so); ?>">
                                            <td><?php echo $row->tanggal_pesanan; ?></td>
                                            <td><?php echo $row->id_so; ?></td>
                                            <td><?php echo $nama_pelanggan; ?></td>
                                            <td><?php echo $row->total_barang; ?></td>
                                            <td><?php echo "Rp. " . number_format($row->total_pesanan) ?></td>
                                            <td class="button-container">
                                                <div id="table-button">
                                                    <a href="#"><i class="material-icons delete-button">delete_forever</i></a> <a href="#"><i class="material-icons edit-button">create</i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif;
                            endforeach;
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