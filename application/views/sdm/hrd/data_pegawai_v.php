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
                    $hitung = 0;
                    foreach ($pegawai->result() as $row) :
                        $hitung++;
                    endforeach;
                    $id_pegawai = $hitung;
                    ?>
                    <!-- end generate id pegawai -->

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="id_pegawai" name="id_pegawai" type="text" class="validate" autocomplete="off" value="<?php echo $id_pegawai; ?>" readonly>
                            <label for="id_pegawai">ID</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="nama_pegawai" id="nama_pegawai" placeholder="Masukkan Nama Customer" autocomplete="off">
                            <label for="nama_pegawai">Nama</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="tipe_pegawai" name="tipe_pegawai">
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
                            <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat pegawai" autocomplete="off">
                            <label for="alamat">Alamat</label>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-add-pegawai" id="submit-add-pegawai">Submit
                <i class="material-icons right">send</i>
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
                            <td><?php echo $col->gol_pegawai; ?></td>
                            <td><?php echo $col->alamat; ?></td>
                            <td><?php echo $col->gabung; ?></td>
                            <td><?php echo $col->berhenti; ?></td>
                            <td><?php echo $col->stts; ?></td>
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
    <?php $this->load->view('sdm/partials/js.php') ?>
</body>

</html>