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
                            <h4>Tambah Customer</h4>
                        </div>
                    </div>

                    <!-- generate id customer -->
                    <?php
                    $hitung = 0;
                    foreach ($customer->result() as $row) :
                        $hitung++;
                    endforeach;
                    $id_pelanggan = $hitung;
                    foreach ($customer->result() as $row) :
                        $sama = 0;
                        if ($id_pelanggan == $row->id_pelanggan) {
                            $sama++;
                        }
                    endforeach;
                    $id_pelanggan = $hitung + $sama;
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
                            <input id="email_pelanggan" name="email_pelanggan" type="email" class="validate" autocomplete="off" value="" placeholder="Masukkan Email Customer">
                            <label for="email_pelanggan">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password_pelanggan" name="password_pelanggan" type="password" class="validate" autocomplete="off" value="" placeholder="Masukkan Password Customer">
                            <label for="password_pelanggan">Password</label>
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
                                <option value="" disabled selected>Pilih Jenis Customer</option>
                                <option value="Retailer">Retailer</option>
                                <option value="Distributor">Distributor</option>
                                <option value="Personal">Personal</option>
                            </select>
                            <label>Jenis</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="wilayah" id="wilayah" placeholder="Masukkan Wilayah Pemesanan Customer" autocomplete="off">
                            <label for="wilayah">Wilayah</label>
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

    <!-- Modal Edit Customer -->
    <div id="edit-cust-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-edit-cust" class="col s12" action="<?php echo site_url('marketing/data_customer/update_customer'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Edit Customer</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="id_pelanggan-edit" name="id_pelanggan-edit" type="text" class="validate" autocomplete="off" value=" " readonly>
                            <label for="id_pelanggan">ID</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email_pelanggan-edit" name="email_pelanggan-edit" type="email" class="validate" autocomplete="off" value=" - ">
                            <label for="email_pelanggan-edit">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password_pelanggan-edit" name="password_pelanggan-edit" type="password" class="validate" autocomplete="off" value="" placeholder="Masukkan Password Baru">
                            <label for="password_pelanggan-edit">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="nama_pelanggan-edit" id="nama_pelanggan-edit" placeholder="Masukkan Nama Customer" autocomplete="off">
                            <label for="nama_pelanggan">Nama</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="tipe_customer-edit" name="tipe_customer-edit">
                                <option value="" disabled selected>Pilih Jenis Customer</option>
                                <option value="Retailer">Retailer</option>
                                <option value="Distributor">Distributor</option>
                                <option value="Personal">Personal</option>
                            </select>
                            <label>Jenis</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="wilayah-edit" id="wilayah-edit" placeholder="Masukkan Wilayah Pemesanan Customer" autocomplete="off">
                            <label for="wilayah">Wilayah</label>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <a href="#konfirm-edit-cust" class="btn waves-effect waves-light orange darken-3 modal-trigger">Submit
                <i class="material-icons right">send</i>
            </a>
        </div>
    </div>

    <!-- Modal Konfirmasi Edit Customer -->
    <div id="konfirm-edit-cust" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menyimpan perubahan ini?</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-edit-cust" id="submit-edit-cust">Ya
                <i class="material-icons right"></i>
            </button>
        </div>
    </div>

    <!-- Modal Konfirmasi Delete Customer -->
    <div id="konfirm-delete-cust" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menghapus data customer ini?</p>
            <form id="form-delete-cust" class="col s12" action="<?php echo site_url('marketing/data_customer/delete_customer'); ?>" method="get">
                <input type="text" id="id_cust_delete" name="id_cust_delete" hidden>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light red darken-2" type="submit" name="submit-delete-cust" id="submit-delete-cust">Delete
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
                        <th>Nama Customer</th>
                        <th>Jenis Customer</th>
                        <th>E-Mail</th>
                        <th>Wilayah</th>
                        <th>Bergabung Sejak</th>
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
                            <td><?php echo $col->nama_pelanggan; ?></td>
                            <td><?php echo $col->tipe_customer; ?></td>
                            <td><?php echo $col->email; ?></td>
                            <td><?php echo $col->wilayah; ?></td>
                            <td><?php echo $col->sejak; ?></td>
                            <td class="button-container">
                                <div id="table-button">
                                    <a href="#konfirm-delete-cust" id="delete_id_<?php echo $col->id_pelanggan; ?>" class="modal-trigger" onClick="getId_cust(this.id)"><i class="material-icons delete-button">delete_forever</i></a>
                                    <a href="#edit-cust-modal" id="id_pelanggan_<?php echo $col->id_pelanggan; ?>" class="modal-trigger" onClick="getIdEdit_cust(this.id)" data-nama_cust="<?php echo $col->nama_pelanggan; ?>" data-wilayah_cust="<?php echo $col->wilayah; ?>" data-email_cust="<?php echo $col->email; ?>"><i class="material-icons edit-button">create</i></a>
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