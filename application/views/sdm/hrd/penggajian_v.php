<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDM - Penggajian</title>
    <?php $this->load->view('sdm/hrd/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('sdm/hrd/partials/navbar.php') ?>

    <!-- Modal Validasi Gaji -->
    <div id="validasi-gaji-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">

                <form id="form-edit-cust" class="col s12" action="<?php echo site_url('marketing/data_customer/update_customer'); ?>" method="post">
                    <div class="row">
                        <div class="col s12 center">
                            <h4>Validasi Data Gaji</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" value="" name="nama_pegawai_valid" id="nama_pegawai_valid" placeholder="-" autocomplete="off">
                            <label for="nama_pegawai_valid">Nama</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="periode" id="periode" placeholder="-" autocomplete="off">
                            <label for="periode">Periode</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="golongan" id="golongan" placeholder="-" autocomplete="off">
                            <label for="golongan">Golongan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h6><b>Rincian</b></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="gaji_pokok" id="gaji_pokok" placeholder="-" autocomplete="off">
                            <label for="golongan">Gaji Pokok</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="gaji_lembur" id="gaji_lembur" placeholder="-" autocomplete="off">
                            <label for="golongan">Gaji Lembur</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="pengurangan" id="pengurangan" placeholder="-" autocomplete="off">
                            <label for="golongan">Pengurangan Gaji</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="total" id="total" placeholder="-" autocomplete="off">
                            <label for="golongan">Total</label>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            <a href="#konfirm-edit-cust" class="btn waves-effect waves-light green darken-3 modal-trigger">Setujui
                
            </a>
            <a href="#konfirm-edit-cust" class="btn waves-effect waves-light red darken-3 modal-trigger">Tolak
               
            </a>
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
            <div class="col s4"><?php $this->load->view('sdm/hrd/partials/searchbar.php'); ?></div>

        </div>

        <!-- konten tab -->
        <div id="pending" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Golongan</th>
                        <th>Gaji Total</th>
                        <th>Periode</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $warna = 'none';
                    $count = 1;
                    foreach ($penggajian->result() as $pen) :
                        ?> <td><?php echo $count; ?></td>
                        <?php foreach ($pegawai->result() as $peg) :
                            if ($peg->id_pegawai == $pen->id_pegawai) : ?>
                                <td><?php echo $peg->nama_pegawai; ?></td>
                                <td><?php echo $peg->id_golongan; ?></td>

                                <td><?php echo $pen->gaji_total; ?></td>
                                <td><?php echo $pen->periode_gaji; ?></td>
                                <?php if ($pen->status_validasi_gaji == 'disetujui') {
                                    $warna = 'green';
                                }
                                if ($pen->status_validasi_gaji == 'pending') {
                                    $warna = 'grey';
                                }
                                if ($pen->status_validasi_gaji == 'ditolak') {
                                    $warna = 'red';
                                } ?>
                                <td class="<?php echo $warna; ?>"><?php echo $pen->status_validasi_gaji; ?></td>
                                <td class="button-container">
                                    <div id="table-button">
                                        <a href="#validasi-gaji-modal" onClick="validasiTampil(this.id)" id="validasi_<?php echo $pen->id_gaji; ?>" data-nama_pegawai="<?php echo $peg->nama_pegawai;  ?>" data-periode="<?php echo $pen->periode_gaji; ?>" data-golongan="<?php echo $peg->id_golongan; ?>" data-gaji_pokok="<?php echo $pen->gaji_pokok; ?>" data-gaji_lembur="<?php echo $pen->gaji_lembur; ?>" data-pengurangan_gaji="<?php echo $pen->pengurangan_gaji; ?>" data-total_gaji="<?php echo ($pen->gaji_pokok)+($pen->gaji_lembur)-($pen->pengurangan_gaji); ?>" class="modal-trigger"><i class="material-icons edit-button">create</i></a>
                                    </div>
                                </td>
                                </tr>
                            <?php

                            endif;
                        endforeach; ?>
                        <?php
                        $count++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    </div>
    <!-- js -->
    <?php $this->load->view('sdm/hrd/partials/js.php') ?>
</body>

</html>