<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Sales Order - Customer</title>
    <?php $this->load->view('marketing/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('marketing/partials/navbar.php') ?>

    <!-- Modal Tambah Item Shopping Cart -->
    <div id="add-item-SC-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-add-item-sc" class="col s12" action="<?php echo site_url('marketing/shopping_cart/save_shopping_cart'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Tambah Item</h4>
                        </div>
                    </div>

                    <!-- generate id shopping cart -->
                    <?php
                    $hitung = 0;
                    $jumlahIdSama = 0;
                    foreach ($shopping_cart->result() as $row) :
                        $hitung++;
                        if (strpos($row->id_so, $id_so) !== false) {
                            $jumlahIdSama++;
                        }
                    endforeach;
                    $id_sc = $id_so . "-" . ($jumlahIdSama + 1);
                    ?>
                    <!-- end generate id shopping cart -->

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="id_sc" name="id_sc" type="text" class="validate" autocomplete="off" value="<?php echo $id_sc; ?>" hidden>
                            <input type="text" id="id_so" name="id_so" value="<?php echo $id_so; ?>" hidden>
                            <input type="text" id="total_pesanan" name="total_pesanan" value="<?php echo $total_pesanan; ?>" hidden>
                            <input type="text" id="total_barang" name="total_barang" value="<?php echo $total_barang; ?>" hidden>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <?php $hitung2 = 0;
                            foreach ($stock_barang->result() as $col2) :
                                $hitung2++;
                                ?>
                                <input id="<?php echo $col2->id_barang; ?>" value="<?php echo $col2->harga_barang; ?>" hidden>
                            <?php endforeach; ?>
                            <select id="id_produk" name="id_produk">
                                <option value="" disabled selected>Pilih Produk</option>
                                <?php $hitung = 0;
                                foreach ($stock_barang->result() as $col) :
                                    $hitung++;
                                    ?>
                                    <option value="<?php echo $col->id_barang ?>"><?php echo $col->nama_barang ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Produk</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input id='harga_satuan' name='harga_satuan' type='number' class='validate' autocomplete='off' placeholder="-" readonly>
                            <label for='harga_satuan'>Harga Satuan</label></div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input id='jumlah_barang' name='jumlah_barang' type='number' class='validate' autocomplete='off' placeholder="0" value="">
                            <label for='jumlah_barang'>Jumlah</label></div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input id='total_harga' name='total_harga' type='number' class='validate' autocomplete='off' placeholder="-" readonly>
                            <label for='total_harga'>Total Harga</label></div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-add-sc" id="submit-add-sc">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>

    </div>

    <!-- konten -->
    <div class="container">
        <br>
        <div class="row">
            <!-- ambil nama pelanggan berdasarkan id_so-->
            <?php
            $hitung = 0;
            foreach ($customer->result() as $col) :
                $hitung++;
                if ($col->id_pelanggan == $id_pelanggan) :
                    $nama_pelanggan = $col->nama_pelanggan;
                endif;
            endforeach;
            ?>

            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Order</a>
                        <a href="sales_order" class="breadcrumb">Sales Order</a>
                        <a href="" class="breadcrumb"><?php echo $nama_pelanggan; ?></a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('marketing/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#add-item-SC-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>

        <!-- keterangan customer dan sales order -->
        <div class="row grey-text text-lighten-1">
            <div class="col s2">
                <h6 class="small-text">No. Order <br> Customer</h6>
            </div>
            <div class="col s3">
                <h6 class="small-text">: <?php echo $id_so; ?><br> : <?php echo $nama_pelanggan; ?></h6>
            </div>
        </div>

        <!-- konten tab -->
        <div id="pending" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Tanggal</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $count = 0;
                    foreach ($shopping_cart->result() as $row) :
                        $count++;
                        if ($row->id_so == $id_so) :
                            ?>
                            <tr>
                                <td> <?php echo $row->tanggal_pesanan; ?> </td>
                                <?php
                                $stock = 0;
                                foreach ($stock_barang->result() as $col) :
                                    $stock++;
                                    if ($row->id_barang == $col->id_barang) :
                                        ?>
                                        <td> <?php echo $col->nama_barang; ?> </td>
                                    <?php
                                endif;
                            endforeach;
                            ?>
                                <td> <?php echo $row->jumlah_barang; ?> </td>
                                <td> <?php echo "Rp. " . number_format($row->total_harga); ?> </td>
                                <td class="button-container">
                                    <div id="table-button">
                                        <a href="#"><i class="material-icons delete-button">delete_forever</i></a> <a href="#"><i class="material-icons edit-button">create</i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                    endif;
                endforeach;
                ?>
                </tbody>
            </table>
        </div>

    </div>
    </div>
    <!-- js -->
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>