<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDM - Data Pegawai</title>
    <?php $this->load->view('sdm/partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('sdm/hrd/partials/navbar.php') ?>
    
    <!-- Modal Add Pegawai -->
    <div id="add-pegawai-modal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">
                <form enctype="multipart/form-data" id="form-add-pegawai" class="col s12" action="<?php echo site_url('sdm/data_pegawai/save_pegawai'); ?>" method="post">
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
                            <input id='umur-edit' name='umur' type='number' class='validate' autocomplete='off' placeholder="0" value="">
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
                                <input id='rekening_pegawai' name='rekening_pegawai' type='number' class='validate' autocomplete='off' placeholder="masukkan nomor rekening pegawai" value="">
                                <label for='rekening'>Rekening</label></div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input id='no_telp' name='no_telp' type='number' class='validate' autocomplete='off' placeholder="masukkan nomor telepon pegawai" value="">
                                    <label for='no_telpon'>No. Telpon (+62)</label></div>
                                </div>
                                <div class="row" >
                                    <div class="input-field col s12">
                                        
                                        <!-- image selector -->
                                        <div class="row">
                                            <div class="file-selector">
                                                <div class="file-field input-field">
                                                    <div class="card-title">Foto Diri Pegawai</div>
                                                    <div class="btn orange">
                                                        <span><i class="material-icons">attach_file</i></span>
                                                        <input name="foto" class="foto" type="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path" type="text" name="foto" placeholder="Foto Diri">
                                                    </div>
                                                    <!-- <button class="btn rotate">rotate</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /image selector -->
                                        
                                        <!-- image viewport -->
                                        <div class="row">
                                            <div class="col s8 center-align">
                                                <div id="image-crop-view" style=""></div>
                                            </div>
                                            <div class="col s4 center-align">
                                                <button class="btn btn-crop" style="display: none;">Crop Image</button>
                                            </div>
                                        </div>
                                        <!-- /image viewport -->
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
                
                <!-- Modal Edit pegawai -->
                <div id="edit-pegawai-modal" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        <div class="row">
                            
                            <form id="form-edit-pegawai" class="col s12" action="<?php echo site_url('sdm/data_pegawai/update_pegawai'); ?>" method="post">
                                <div class="row">
                                    <div class="col s12 center">
                                        <h4>Edit Pegawai</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 center">
                                        <label for="banner-preview-edit"></label>
                                        <img src="" id="banner-preview-edit" width="250" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="id_pegawai-edit" name="id_pegawai-edit" type="text" class="validate" autocomplete="off" value=" " readonly>
                                        <label for="id_pegawai">ID Pegawai</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" name="nama_pegawai-edit" id="nama_pegawai-edit" placeholder="Masukkan Nama pegawai" autocomplete="off">
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
                                            <input type="text" name="alamat-edit" id="alamat-edit" placeholder="Masukkan alamat pegawai" autocomplete="off">
                                            <label for="alamat">Alamat</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" name="email-edit" id="email-edit" placeholder="Masukkan email pegawai" autocomplete="off">
                                            <label for="alamat">Email</label>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='input-field col s12'>
                                            <input id='rekening_pegawai-edit' name='rekening_pegawai-edit' type='number' class='validate' autocomplete='off' placeholder="masukkan nomor rekening pegawai" value="">
                                            <label for='rekening'>Rekening</label></div>
                                        </div>
                                        <div class='row'>
                                            <div class='input-field col s12'>
                                                <input id='no_telp-edit' name='no_telp-edit' type='number' class='validate' autocomplete='off' placeholder="masukkan nomor telepon pegawai" value="">
                                                <label for='no_telpon'>No. Telpon (+62)</label></div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select id="status_pegawai" name="stts">
                                                        <option value="" disabled selected>Pilih Status Pegawai</option>
                                                        <option value="1">Aktif</option>
                                                        <option value="2">Pensiun</option>
                                                        <option value="3">Resign</option>
                                                    </select>
                                                    <label>Status</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                                    <a href="#konfirm-edit-pegawai" class="btn waves-effect waves-light orange darken-3 modal-trigger">Submit
                                        <i class="material-icons right">send</i>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Modal Konfirmasi Edit pegawai -->
                            <div id="konfirm-edit-pegawai" class="modal">
                                <div class="modal-content">
                                    <h4>Konfirmasi</h4>
                                    <p>Apakah Anda yakin ingin menyimpan perubahan ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
                                    <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit-edit-pegawai" id="submit-edit-pegawai">Ya
                                        <i class="material-icons right"></i>
                                    </button>
                                </div>
                            </div>
                            
                            
                            <!-- Modal Konfirmasi Delete pegawai -->
                            <div id="konfirm-delete-pegawai" class="modal">
                                <div class="modal-content">
                                    <h4>Konfirmasi</h4>
                                    <p>Apakah Anda yakin ingin menghapus data pegawai ini?</p>
                                    <form id="form-delete-pegawai" class="col s12" action="<?php echo site_url('sdm/data_pegawai/delete_pegawai'); ?>" method="get">
                                        <input type="text" id="id_pegawai_delete" name="id_pegawai_delete" hidden>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                                    <button class="btn waves-effect waves-light red darken-2" type="submit" name="submit-delete-pegawai" id="submit-delete-pegawai">Delete
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
                                                <?php 
                                                $status_warna = $col->status_pegawai;
                                                if ($status_warna == 'aktif') {
                                                    $warna = 'green';
                                                }
                                                else if ($status_warna == 'resign') {
                                                    $warna = 'red';
                                                }
                                                else if ($status_warna == 'pensiun') {
                                                    $warna = 'grey';
                                                } ?>
                                                <td class="<?php echo $warna;?>"><?php echo $col->status_pegawai; ?></td>
                                                <td class="button-container">
                                                    <div id="table-button">
                                                        <a href="#konfirm-delete-pegawai" id="delete_id_<?php echo $col->id_pegawai; ?>" class="modal-trigger" onClick="getId_pegawai(this.id)"><i class="material-icons delete-button">delete_forever</i></a>
                                                        <a href="#edit-pegawai-modal" id="id_pegawai_<?php echo $col->id_pegawai; ?>" class="modal-trigger" onClick="getIdEdit_pegawai_1(this.id)" data-nama_pegawai="<?php echo $col->nama_pegawai; ?>" data-id_golongan="<?php echo $col->id_golongan; ?>" data-id_pendidikan="<?php echo $col->id_pendidikan; ?>" data-umur="<?php echo $col->umur; ?>"data-alamat="<?php echo $col->alamat; ?>" data-email="<?php echo $col->email; ?>" data-rekening_pegawai="<?php echo $col->rekening_pegawai;?>" data-no_telp="<?php echo $col->no_telp;?>" data-foto="<?php echo $col->foto; ?>" data-tampil_link="<?php echo site_url('document/sdm/foto/'); ?>" ><i class="material-icons edit-button">create</i></a>
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