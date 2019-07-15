<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Production Order</title>
    <?php $this->load->view('marketing/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('marketing/partials/navbar.php') ?>

    <!-- Modal Tambah Production Order -->
    <div id="add-po-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-add-po" class="col s12" action="<?php echo site_url('marketing/production_order/save_production_order'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Tambah Production Order</h4>
                        </div>
                    </div>

                    <!-- generate id po -->
                    <?php
                    $hitung = 0;
                    $jumlahIdSama = 0;
                    $date = date('Ymd');
                    foreach ($production_order->result() as $row) :
                        $hitung++;
                        if (strpos($row->id_po, $date) !== false) {
                            $jumlahIdSama++;
                        }
                    endforeach;
                    $id_po = "P-" . $date . ($jumlahIdSama + 1);
                    foreach ($production_order->result() as $row) :
                        $sama = 0;
                        if ($id_po == $row->id_po){
                            $sama++;
                        }
                    endforeach;
                    $id_po = "P-" . $date . ($jumlahIdSama + 1 + $sama);
                    ?>
                    <!-- end generate id po -->

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input id='id_po' name='id_po' value="<?php echo $id_po; ?>" type='text' class='validate' autocomplete='off' placeholder="-" readonly>
                            <label for='harga_satuan'>No. Produksi</label></div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
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
                            <input id='jumlah_barang' name='jumlah_barang' type='number' class='validate' autocomplete='off' placeholder="0" value="">
                            <label for='jumlah_barang'>Jumlah</label></div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-add-po" id="submit-add-po">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>

    </div>

    <!-- Modal Edit Production Order -->
    <div id="edit-po-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-edit-po" class="col s12" action="<?php echo site_url('marketing/production_order/update_production_order'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Edit Production Order</h4>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input id='id_po-edit' name='id_po-edit' type='text' class='validate' autocomplete='off' placeholder="-" readonly>
                            <label for='harga_satuan'>No. Produksi</label></div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="id_produk-edit" name="id_produk-edit">
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
                            <input id='jumlah_barang-edit' name='jumlah_barang-edit' type='number' class='validate' autocomplete='off' placeholder="0" value="">
                            <label for='jumlah_barang'>Jumlah</label></div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <a href="#konfirm-edit-PO" class="btn waves-effect waves-light orange darken-3 modal-trigger">Save
                <i class="material-icons right">save</i>
            </a>
        </div>

    </div>

    <!-- Modal Konfirmasi Edit PO -->
    <div id="konfirm-edit-PO" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menyimpan perubahan ini?</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-edit-po" id="submit-edit-po">Ya
                <i class="material-icons right"></i>
            </button>
        </div>
    </div>

    <!-- Modal Konfirmasi Delete PO -->
    <div id="konfirm-delete-PO" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menghapus production order ini?</p>
            <form id="form-delete-po" class="col s12" action="<?php echo site_url('marketing/production_order/delete_production_order'); ?>" method="get">
                <input type="text" id="id_po_delete" name="id_po_delete" hidden>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light red darken-2" type="submit" name="submit-delete-po" id="submit-delete-po">Delete
                <i class="material-icons right">delete</i>
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
                        <a class="breadcrumb no-pointer-event">Order</a>
                        <a href="production_order" class="breadcrumb">Production Order</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('marketing/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#add-po-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
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
                                    <td class="button-container">
                                        <div id="table-button">
                                            <a href="#konfirm-delete-PO" id="<?php echo $row->id_po; ?>" class="modal-trigger" onClick="getIdDelete_PO(this.id)"><i class="material-icons delete-button">delete_forever</i></a> <a href="#edit-po-modal" class="modal-trigger" id="<?php echo $row->id_po; ?>" onClick="getIdEdit_PO(this.id)"><i class="material-icons edit-button">create</i></a>
                                        </div>
                                    </td>
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
                                    <td class="button-container">
                                        <div id="table-button">
                                            <a href="#konfirm-delete-PO" id="<?php echo $row->id_po; ?>" class="modal-trigger" onClick="getIdDelete_PO(this.id)"><i class="material-icons delete-button">delete_forever</i></a> <a href="#edit-po-modal" class="modal-trigger" id="<?php echo $row->id_po; ?>" onClick="getIdEdit_PO(this.id)"><i class="material-icons edit-button">create</i></a>
                                        </div>
                                    </td>
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
                            <th></th>
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
                                    <td class="button-container">
                                        <div id="table-button">
                                            <a href="#konfirm-delete-PO" id="<?php echo $row->id_po; ?>" class="modal-trigger" onClick="getIdDelete_PO(this.id)"><i class="material-icons delete-button">delete_forever</i></a> <a href="#edit-po-modal" class="modal-trigger" id="<?php echo $row->id_po; ?>" onClick="getIdEdit_PO(this.id)"><i class="material-icons edit-button">create</i></a>
                                        </div>
                                    </td>
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
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>