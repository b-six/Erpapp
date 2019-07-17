<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Perencanaan Produksi</title>
    <?php $this->load->view('produksi/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('produksi/partials/navbar.php') ?>

    <!-- Modal Add Planning -->
    <div id="add-planning-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

               <div class="col s12 center">
                <h4>Tambah Produk Baru</h4>
            </div>

            <form method="post" action="<?php echo base_url('produksi/buat_planning/save_perencanaan_produksi')?>" class="col s12" id="form-add-planning">
                <?php 
                // generate id perencanaan
                $hitung = 0;
                foreach ($pp->result() as $row) {
                    $hitung++;
                }
                $id_perencanaan_produksi = "PP-000".($hitung+1);
                ?>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="id_perencanaan_produksi" id="id_perencanaan_produksi" type="text" value="<?php echo $id_perencanaan_produksi; ?>" readonly >
                        <label for="id_perencanaan_produksi">ID Perencanaan Produksi</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="id_bahan_baku_produksi" id="id_bahan_baku_produksi" type="text" >
                        <label for="id_bahan_baku_produksi">Bahan Baku Produksi</label>
                    </div>
                </div>

                <div class="row">
                        <div class="input-field col s12">

                            <select id="id_po" name="id_po">
                                <option value="" disabled selected>Select ID Production Order</option>
                                <?php
                                foreach ($production_order->result() as $col) :
                                    ?>
                                    <option value="<?php echo $col->id_po; ?>"><?php echo $col->id_po; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Pilih ID Production Order</label>
                        </div>
                    </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="id_pegawai" id="id_pegawai" type="number" >
                        <label for="id_pegawai">ID Pegawai</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="jadwal_perencanaan" id="jadwal_perencanaan" type="date" >
                        <label for="jadwal_perencanaan">Jadwal Perencanaan</label>
                    </div>
                </div>
            </form>

        </div>

    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
        <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-add-planning" id="submit-add-planning">Submit
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
                    <a href="buat_planning" class="breadcrumb">Perencanaan Produksi</a>
                </div>
            </nav>
        </div>

        <!-- searchbar -->
        <div class="col s4"><?php $this->load->view('produksi/partials/searchbar.php'); ?></div>

        <!-- add sales order -->
        <div class="col s1 center">
            <nav class="no-shadows blue-dark-grey"><a href="#add-planning-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
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
                        <th>ID Perencanaan Produksi</th>
                        <th>ID Bahan Baku Produksi</th>
                        <th>ID Production Order</th>
                        <th>ID Pegawai</th>
                        <th>Jadwal Perencanaan</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($pp->result() as $row):?>
                        <tr>
                            <td><?php echo $row->id_perencanaan_produksi; ?></td>
                            <td><?php echo $row->id_bahan_baku_produksi; ?></td>
                            <td><?php echo $row->id_po; ?></td>
                            <td><?php echo $row->id_pegawai; ?></td>
                            <td><?php echo $row->jadwal_perencanaan; ?></td>
                            <td></td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>

            </table>
        </div>

        <!-- tab onprocess -->
        <div id="on-process" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>ID Perencanaan Produksi</th>
                        <th>ID Bahan Baku Produksi</th>
                        <th>ID Production Order</th>
                        <th>ID Pegawai</th>
                        <th>Jadwal Perencanaan</th>
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
                        <th>ID Perencanaan Produksi</th>
                        <th>ID Bahan Baku Produksi</th>
                        <th>ID Production Order</th>
                        <th>ID Pegawai</th>
                        <th>Jadwal Perencanaan</th>
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