<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Bahan Baku</title>
    <?php $this->load->view('produksi/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('produksi/partials/navbar.php') ?>

    <!-- Modal Add Testimoni -->
    <div id="add-testimoni-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-add-testimoni" class="col s12" action="<?php echo site_url('produksi/testimoni/save_testimoni'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Tambah Testimoni</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">

                            <?php $hitung2 = 0;
                            foreach ($customer->result() as $col2) :
                                $hitung2++;
                                ?>
                                <input id="<?php echo "nama-" . $col2->id_pelanggan; ?>" value="<?php echo $col2->nama_pelanggan; ?>" hidden>
                                <input id="<?php echo "wilayah-" . $col2->id_pelanggan; ?>" value="<?php echo $col2->wilayah; ?>" hidden>
                                <input id="<?php echo "tipe-" . $col2->id_pelanggan; ?>" value="<?php echo $col2->tipe_customer; ?>" hidden>
                            <?php endforeach; ?>

                            <?php $hitung3 = 0;
                            foreach ($sales_order->result() as $col3) :
                                $hitung3++;
                                ?>
                                <input id="<?php echo "id-so-" . $col3->id_pelanggan; ?>" name="<?php echo "id-so-" . $col3->id_pelanggan; ?>" value="<?php echo $col3->id_so; ?>" hidden>
                            <?php endforeach; ?>

                            <select id="id_so" name="id_so">
                                <option value="" disabled selected>Select No. Order</option>
                                <?php $hitung = 0;
                                foreach ($sales_order->result() as $col) :
                                    $hitung++;
                                    if ($col->testimoni == 'N') :
                                        ?>
                                        <option value="<?php echo $col->id_pelanggan ?>"><?php echo $col->id_so ?></option>
                                    <?php
                                endif;
                            endforeach;
                            ?>
                            </select>
                            <label for="id_so">No. Order</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="show-nama" id="show-nama" placeholder="-" readonly>
                            <label for="show-nama">Nama</label>
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
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="pesan" name="pesan" class="materialize-textarea" placeholder="Masukkan Review Anda"></textarea>
                            <label for="pesan">Pesan</label>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-add-testimoni" id="submit-add-testimoni">Submit
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
                        <a class="breadcrumb no-pointer-event">Customer</a>
                        <a href="" class="breadcrumb">Testimoni</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('marketing/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#add-testimoni-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>

        <!-- konten tab -->
        <div id="pending" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Nama Customer</th>
                        <th>Jenis Customer</th>
                        <th>No. Order</th>
                        <th>Pesan</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $count = 0;
                    foreach ($testimoni->result() as $col) :
                        $count++;
                        ?>
                        <tr>
                            <?php
                            $hitung = 0;
                            foreach ($customer->result() as $row) :
                                $hitung++;
                                if ($row->id_pelanggan == $col->id_pelanggan) :
                                    ?>
                                    <td><?php echo $row->nama_pelanggan; ?></td>
                                    <td><?php echo $row->tipe_customer; ?></td>
                                <?php
                            endif;
                        endforeach;
                        ?>
                            <td><?php echo $col->id_so; ?></td>
                            <td><?php
                                $testimoni_barang = substr($col->testimoni_barang, 0, 25);
                                echo $testimoni_barang; ?></td>
                            <td class="button-container">
                                <div id="table-button">
                                    <a href="#"><i class="material-icons delete-button">delete_forever</i></a> <a href="#"><i class="material-icons edit-button">create</i></a>
                                </div>
                            </td>
                        </tr>
                    <?php
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