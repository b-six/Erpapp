<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Data Customer</title>
    <?php $this->load->view('marketing/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('marketing/partials/navbar.php') ?>

    <!-- Modal Add Customer -->
    <div id="add-customer-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-add-customer" class="col s12" action="<?php echo site_url('marketing/data_customer/save_customer'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Tambah Pegawai</h4>
                        </div>
                    </div>

                    <!-- generate id customer -->
                    <?php
                    $hitung = 0;
                    foreach ($customer->result() as $row) :
                        $hitung++;
                    endforeach;
                    $id_pelanggan = $hitung;
                    ?>
                    <!-- end generate id customer -->

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="id_pelanggan" name="id_pelanggan" type="text" class="validate" autocomplete="off" value="<?php echo $id_pelanggan; ?>" readonly>
                            <label for="id_pelanggan">ID</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="Masukkan Nama Customer" autocomplete="off">
                            <label for="nama_pelanggan">Nama</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="tipe_customer" name="tipe_customer">
                                <option value="" disabled selected>Pilih Golongan</option>
                                <option value="Retailer">III/C</option>
                                <option value="Retailer">III/B</option>
                                <option value="Retailer">III/A</option>
                                <option value="Retailer">II/B</option>
                                <option value="Retailer">II</option>
                                <option value="Retailer">I<option>
                            </select>
                            <label>Golongan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="wilayah" id="wilayah" placeholder="Masukkan Wilayah Pemesanan Customer" autocomplete="off">
                            <label for="wilayah"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="wilayah" id="wilayah" placeholder="Masukkan Wilayah Pemesanan Customer" autocomplete="off">
                            <label for="wilayah"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="wilayah" id="wilayah" placeholder="Masukkan Wilayah Pemesanan Customer" autocomplete="off">
                            <label for="wilayah"></label>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-add-customer" id="submit-add-customer">Submit
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
                        <a href="" class="breadcrumb">Data Customer</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('marketing/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#add-customer-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>

        <!-- konten tab -->
        <div id="pending" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Bergabung Sejak</th>
                        <th>Tgl Berhenti</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $count = 0;
                    foreach ($customer->result() as $col) :
                        $count++;
                        ?>
                        <tr>
                        <td><?php echo $col->id_pelanggan; ?> </td>
                            <td><?php echo $col->nama_pelanggan; ?></td>
                            <td><?php echo $col->tipe_customer; ?></td>
                            <td><?php echo $col->wilayah; ?></td>
                            <td><?php echo $col->sejak; ?></td>
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