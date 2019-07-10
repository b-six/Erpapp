<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Sales Order</title>
    <?php $this->load->view('marketing/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('marketing/partials/navbar.php') ?>

    <!-- Modal Add Sales Order -->
    <div id="addSO-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-add-so" class="col s12" action="<?php echo site_url('marketing/sales_order/save_sales_order'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Tambah Order</h4>
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
                    foreach ($sales_order->result() as $row) :
                        $sama = 0;
                        if ($id_so == $row->id_so) {
                            $sama++;
                        }
                    endforeach;
                    $id_so = $date . ($jumlahIdSama + 1 + $sama);
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

    <!-- Modal Edit Sales Order -->
    <div id="editSO-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-edit-so" class="col s12" action="<?php echo site_url('marketing/sales_order/update_sales_order'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Edit Order</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="id_so_edit" name="id_so_edit" type="text" class="validate" autocomplete="off" value=" " readonly>
                            <label for="id_so_edit">No. Order</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="nama-customer" id="nama-customer" placeholder="-" disabled>
                            <label for="show-wilayah">Nama Customer</label>
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

                            <select id="id_pelanggan-edit" name="id_pelanggan-edit">
                                <option value="" disabled selected>Select Customer</option>
                                <?php $hitung = 0;
                                foreach ($customer->result() as $col) :
                                    $hitung++;
                                    ?>
                                    <option id="option-<?php echo $col->id_pelanggan; ?>" value="<?php echo $col->id_pelanggan ?>"> <?php echo $col->nama_pelanggan ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Change Customer</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="show-wilayah" id="show-wilayah-edit" placeholder="-" disabled>
                            <label for="show-wilayah">Wilayah</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="show-tipe-customer" id="show-tipe-customer-edit" placeholder="-" disabled>
                            <label for="show-tipe-customer">Tipe Customer</label>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <a href="#konfirm-edit-SO" class="btn waves-effect waves-light orange darken-3 modal-trigger">Save
                <i class="material-icons right">save</i>
            </a>
        </div>
    </div>

    <!-- Modal Konfirmasi Edit SO -->
    <div id="konfirm-edit-SO" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menyimpan perubahan ini?</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-edit-so" id="submit-edit-so">Ya
                <i class="material-icons right"></i>
            </button>
        </div>
    </div>

    <!-- Modal Konfirmasi Delete SO -->
    <div id="konfirm-delete-SO" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menghapus sales order ini?</p>
            <form id="form-delete-so" class="col s12" action="<?php echo site_url('marketing/sales_order/delete_sales_order'); ?>" method="get">
                <input type="text" id="id_so_delete" name="id_so_delete" hidden>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light red darken-2" type="submit" name="submit-delete-so" id="submit-delete-so">Delete
                <i class="material-icons right">delete</i>
            </button>
        </div>
    </div>

    <!-- Modal Alert After Edit SO -->
    <!-- <div id="edit-alert-so" class="modal">
        <div class="modal-content">
            <h4>Edit Sales Order Berhasil</h4>
            <p>Sales Order telah diedit</p>
        </div>
        <div class="modal-footer">
            <a class="btn waves-effect waves-light orange darken-3">OK
                <i class="material-icons right">send</i>
            </a>
        </div>
    </div> -->

    <!-- Modal Alert After Delete SO -->
    <!-- <div id="delete-alert-so" class="modal">
        <div class="modal-content">
            <h4>Hapus Sales Order Berhasil</h4>
            <p>Sales Order telah dihapus</p>
        </div>
        <div class="modal-footer">
            <a class="btn waves-effect waves-light orange darken-3">OK
                <i class="material-icons right">send</i>
            </a>
        </div>
    </div> -->

    <!-- konten -->
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
                <nav class="no-shadows blue-dark-grey"><a href="#addSO-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
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
                                        <tr>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $row->tanggal_pesanan; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $row->id_so; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $nama_pelanggan; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $row->total_barang; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo "Rp. " . number_format($row->total_pesanan) ?></td>
                                            <td class="button-container">
                                                <input type="text" id="id_pelanggan_edit-<?php echo $row->id_so; ?>" value="<?php echo $col->id_pelanggan; ?>" hidden>
                                                <input type="text" id="nama_pelanggan_edit-<?php echo $row->id_so; ?>" value="<?php echo $col->nama_pelanggan; ?>" hidden>
                                                <div id="table-button">
                                                    <a href="#konfirm-delete-SO" id="<?php echo $row->id_so; ?>" onClick="getIdDelete(this.id)" class="modal-trigger"><i class="material-icons delete-button">delete_forever</i></a>
                                                    <a href="#editSO-modal" id="<?php echo $row->id_so; ?>" onClick="getIdEdit(this.id)" class="modal-trigger"><i class="material-icons edit-button">create</i></a>
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
                                        <tr>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $row->tanggal_pesanan; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $row->id_so; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $nama_pelanggan; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $row->total_barang; ?></td>
                                            <td><?php echo "Rp. " . number_format($row->total_pesanan) ?></td>
                                            <td class="button-container">
                                                <input type="text" id="id_pelanggan_edit-<?php echo $row->id_so; ?>" value="<?php echo $col->id_pelanggan; ?>" hidden>
                                                <input type="text" id="nama_pelanggan_edit-<?php echo $row->id_so; ?>" value="<?php echo $col->nama_pelanggan; ?>" hidden>
                                                <div id="table-button">
                                                    <a href="#konfirm-delete-SO" id="<?php echo $row->id_so; ?>" onClick="getIdDelete(this.id)" class="modal-trigger"><i class="material-icons delete-button">delete_forever</i></a>
                                                    <a href="#editSO-modal" id="<?php echo $row->id_so; ?>" onClick="getIdEdit(this.id)" class="modal-trigger"><i class="material-icons edit-button">create</i></a>
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
                                        <tr>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $row->tanggal_pesanan; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $row->id_so; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $nama_pelanggan; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo $row->total_barang; ?></td>
                                            <td class="clickable-row" data-href="<?php echo site_url('marketing/shopping_cart/index/' . $row->id_so); ?>"><?php echo "Rp. " . number_format($row->total_pesanan) ?></td>
                                            <td class="button-container">
                                                <input type="text" id="id_pelanggan_edit-<?php echo $row->id_so; ?>" value="<?php echo $col->id_pelanggan; ?>" hidden>
                                                <input type="text" id="nama_pelanggan_edit-<?php echo $row->id_so; ?>" value="<?php echo $col->nama_pelanggan; ?>" hidden>
                                                <div id="table-button">
                                                    <a href="#konfirm-delete-SO" id="<?php echo $row->id_so; ?>" onClick="getIdDelete(this.id)" class="modal-trigger"><i class="material-icons delete-button">delete_forever</i></a>
                                                    <a href="#editSO-modal" id="<?php echo $row->id_so; ?>" onClick="getIdEdit(this.id)" class="modal-trigger"><i class="material-icons edit-button">create</i></a>
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
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>