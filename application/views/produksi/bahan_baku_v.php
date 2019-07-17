<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produksi - Bahan Baku</title>
    <?php $this->load->view('produksi/partials/css.php') ?>
</head>

<body>
            <div id="add-bahan-baku" class="modal modal-fixed-footer" >
            <!-- modal content -->
            <div class="modal-content">
                <div class="col s12 center">
                    <h4>Tambah Bahan Baku</h4>
                </div>

                <form method="post" action="<?php echo base_url('produksi/bahan_baku/save_bahan_baku')?>" class="col s12" id="form-add-pb" enctype="multipart/form-data">
                    <!-- generate id bahan baku -->

                    <?php
                    $hitung = 0; 
                    foreach($bahan_baku->result() as $bb) :
                        $hitung++;
                    endforeach;
                    $id_bb = "BB000".($hitung+1);
                    ?>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="id_bahan_baku_produksi" id="id_bahan_baku_produksi" type="text" value="<?php echo $id_bb; ?>" readonly>
                            <label for="id_bahan_baku_produksi">ID bahan baku produksi</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="nama_bb_produksi" id="nama_bb_produksi" type="text" >
                            <label for="nama_bb_produksi">Nama Bahan Baku Produksi</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="jumlah_bb_produksi" id="jumlah_bb_produksi" type="text" >
                            <label for="jumlah_bb_produksi">Jumlah Bahan Baku Produksi</label>
                        </div>
                    </div>

                   <!-- <div class="row"> -->
                   <!--     <div class="input-field col s12"> -->
                   <!--         <div class="file-field input-field">    -->
                   <!--             <div class="card-title">Banner Promo</div>  -->
                   <!--             <div class="btn orange"> -->
                   <!--                 <span><i class="material-icons">attach_file</i></span> -->
                   <!--                 <input id="banner-promo" name="banner_promo" type="file"> -->
                   <!--             </div> -->
                   <!--             <div class="file-path-wrapper"> -->
                   <!--                 <input class="file-path" type="text" placeholder="Banner Promo"> -->
                   <!--             </div>-->
                   <!--         </div>-->
                   <!--     </div>-->
                   <!-- </div> -->

                   

                </form>
            </div>
            <!-- /modal content -->

            <!-- modal footer -->
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                <button class="btn waves-effect waves-light green darken-3" type="submit" name="submit-add-pb" id="submit-add-pb"><i class="material-icons">add</i></button>
            </div>
            <!-- /modal footer -->
        </div>
    <!-- navbar -->
    <?php $this->load->view('produksi/partials/navbar.php') ?>
    <div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Produksi</a>
                        <a href="bahan_baku" class="breadcrumb">Bahan Baku</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('produksi/partials/searchbar.php'); ?></div>

            <!-- add sales order -->
            <div class="col s1 center">
                <nav class="no-shadows blue-dark-grey"><a class="modal-trigger" href="#add-bahan-baku"><i class="material-icons">add_circle_outline</i></a></nav>
            </div>

        </div>

        <div id="pending" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>ID Bahan Baku</th>
                        <th>Nama Bahan Baku</th>
                        <th>Jumlah Bahan Baku</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $count = 0;
                    foreach ($bahan_baku->result() as $col) :
                        $count++;
                        ?>
                        <tr>
                            <td><?php echo $col->id_bahan_baku; ?></td>
                            <td><?php echo $col->nama_bahan_baku; ?></td>
                            <td><?php echo $col->jml_bahan_baku; ?></td>
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
    </div>
    <!-- js -->
    <?php $this->load->view('produksi/partials/js.php') ?>
</body>

</html>