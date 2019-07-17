<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Hasil Produksi</title>
    <?php $this->load->view('produksi/partials/css.php') ?>
</head>

<body>

    <!-- navbar -->
    <?php $this->load->view('produksi/partials/navbar.php') ?>
    <div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Laporan</a>
                        <a href="hasil_produksi" class="breadcrumb">Hasil Produksi</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('produksi/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a href="#modal1" class="modal-trigger"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <!-- modal content -->
            <div class="modal-content">
                <div class="col s12 center">
                    <h4>Tambah Hasil Produksi</h4>
                </div>

                <form method="post" action="<?php echo base_url('produksi/hasil_produksi/save_hasil_produksi') ?>" class="col s12" id="form-edit-hasil_produksi" enctype="multipart/form-data">

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="id_hasil_produksi" id="id_hasil_produksi" type="text">
                            <label for="id_hasil_produksi">ID Hasil Produksi</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="jumlah_produk" id="jumlah_produk" type="text">
                            <label for="jumlah_produk">Jumlah Produk</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="jenis_barang" id="jenis_barang" type="text">
                            <label for="jenis_barang">Jenis Barang</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="nama_barang" id="nama_barang" type="text">
                            <label for="nama_barang">Nama Barang</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="tanggal" id="tanggal" type="date">
                            <label for="tanggal">Tanggal</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="keterangan" id="keterangan" type="text">
                            <label for="keterangan">Keterangan</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                        <button class="btn waves-effect waves-light green darken-3" type="submit" name="submit-add-pb" id="submit-add-pb"><i class="material-icons">add</i></button>
                    </div>
                </form>
            </div>

            <!-- /modal content -->


        </div>
        <!-- tab -->
        <div class="row">

            <!-- tab berlaku -->
            <div class="col s12 white-text">
                <!-- 1 card -->
                <table class="responsive-table centered highlight white-text">
                    <thead class="bottom-border">
                        <tr>
                            <th>ID Hasil Produksi</th>
                            <th>Jumlah Produksi</th>
                            <th>Jenis Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($hasil_produksi->result() as $hp) : ?>
                            <tr>
                                <td><?php echo $hp->id_hasil_produksi; ?></td>
                                <td><?php echo $hp->jumlah_barang; ?></td>
                                <td><?php echo $hp->jenis_barang; ?></td>
                                <td><?php echo $hp->nama_barang; ?></td>
                                <td><?php echo $hp->tgl_hasil_produksi; ?></td>
                                <td><?php echo $hp->keterangan_barang; ?></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

            <!-- tab berakhir -->

        </div>
    </div>

    <!-- js -->
    <?php $this->load->view('produksi/partials/js.php') ?>
</body>

</html>