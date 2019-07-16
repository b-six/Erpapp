<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDM - Data Pegawai</title>
    <?php $this->load->view('sdm/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('sdm/partials/navbar.php') ?>

    <!-- Modal Add Pegawai -->
    <div id="add-pegawai-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">
                <form id="form-add-pegawai" class="col s12" action="<?php echo site_url('sdm/data_pegawai/save_pegawai'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Tambah Pegawai</h4>
                        </div>
                    </div>

                    <!-- generate id pegawai -->
                    <?php
                    $hitung = 1;
                    foreach ($pegawai->result() as $row) :
                        $hitung++;
                    endforeach;
                    $id_pegawai = $hitung;
                    ?>
                    <!-- end generate id pegawai -->

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="id_pegawai" name="id_pegawai" type="text" class="validate" autocomplete="off" value="<?php echo $id_pegawai; ?>" readonly>
                            <label for="id_pegawai">ID Pegawai</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="nama_pegawai" id="nama_pegawai" placeholder="Masukkan Nama pegawai" autocomplete="off">
                            <label for="nama_pegawai">Nama</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="id_golongan" name="id_golongan">
                                <option value="" disabled selected>Pilih Golongan Kerja</option>
                                <option value="3">III</option>
                                <option value="2">II</option>
                                <option value="1">I</option>
                            </select>
                            <label>Golongan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="id_pendidikan" name="id_pendidikan">
                                <option value="" disabled selected>Pilih Jenjang Pendidikan</option>
                                <option value="3">S3</option>
                                <option value="2">S2</option>
                                <option value="1">S1</option>
                            </select>
                            <label>Pendidikan</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input id='umur' name='umur' type='number' class='validate' autocomplete='off' placeholder="0" value="">
                            <label for='jumlah_barang'>Umur</label></div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat pegawai" autocomplete="off">
                            <label for="alamat">Alamat</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="email" id="email" placeholder="Masukkan email pegawai" autocomplete="off">
                            <label for="alamat">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input type="date" class="datepicker" name="tgl_diterima" id="tgl_diterima" placeholder="Masukkan date pegawai diterima" autocomplete="off">
                            <label for="alamat">Tanggal Diterima</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input id='rekening_pegawai' name='rekening_pegawai' type='number' class='validate' autocomplete='off' placeholder="masukkan nomor rekening anda" value="">
                            <label for='jumlah_barang'>Rekening</label></div>
                    </div>
                </form>
            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" cldass="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-add-pegawai" id="submit-add-pegawai">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>

    <!-- Modal Edit pegawai -->
    <div id="edit-cust-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-edit-cust" class="col s12" action="<?php echo site_url('marketing/data_customer/update_customer'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Edit Pegawai</h4>
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
                            <input type="text" name="nama_pelanggan-edit" id="nama_pelanggan-edit" placeholder="Masukkan Nama pegawai" autocomplete="off">
                            <label for="nama_pelanggan">Nama</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="tipe_customer-edit" name="tipe_customer-edit">
                                <option value="" disabled selected>Pilih Jenis pegawai</option>
                                <option value="Retailer">Retailer</option>
                                <option value="Distributor">Distributor</option>
                                <option value="Personal">Personal</option>
                            </select>
                            <label>Jenis</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="wilayah-edit" id="wilayah-edit" placeholder="Masukkan Wilayah Pemesanan pegawai" autocomplete="off">
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

    <!-- Modal Konfirmasi Edit pegawai -->
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


    <!-- Modal Konfirmasi Delete pegawai -->
    <div id="konfirm-delete-cust" class="modal">
        <div class="modal-content">
            <h4>Konfirmasi</h4>
            <p>Apakah Anda yakin ingin menghapus data pegawai ini?</p>
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

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('sdm/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#add-pegawai-modal" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>

        <!-- konten tab -->
        <div id="pending" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>Nama Pegawai</th>
                        <th>Golongan Pegawai</th>
                        <th>Alamat</th>
                        <th>Tgl Diterima</th>
                        <th>Tgl Berhenti</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $count = 0;
                    foreach ($pegawai->result() as $col) :
                        $count++;
                        ?>
                        <tr>
                            <td><?php echo $col->nama_pegawai; ?></td>
                            <td><?php echo $col->id_golongan; ?></td>
                            <td><?php echo $col->alamat; ?></td>
                            <td><?php echo $col->tgl_diterima; ?></td>
                            <td><?php echo $col->tgl_berhenti; ?></td>
                            <td><?php echo $col->status_pegawai; ?></td>
                            <td class="button-container">
                                <div id="table-button">
                                <a href="#konfirm-delete-cust" id="delete_id_<?php echo $col->id_pegawai; ?>" class="modal-trigger" onClick="getId_cust(this.id)"><i class="material-icons delete-button">delete_forever</i></a>
                                    <a href="#edit-cust-modal" id="id_pegawai_<?php echo $col->id_pegawai; ?>" class="modal-trigger" onClick="getIdEdit_cust(this.id)" data-nama_cust="<?php echo $col->nama_pegawai; ?>" data-wilayah_cust="<?php echo $col->alamat; ?>"><i class="material-icons edit-button">create</i></a>
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
    <?php $this->load->view('sdm/partials/js.php') ?>
</body>

</html>