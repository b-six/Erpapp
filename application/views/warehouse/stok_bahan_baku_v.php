<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stok Bahan Baku</title>
	<?php $this->load->view('warehouse/_partials/css.php') ?>
</head>
<body>
	<?php $this->load->view('warehouse/_partials/navbar.php') ?>
	
	<div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s6">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Bahan Baku</a>
                        <a href="stok_bahan_baku" class="breadcrumb">Stok Bahan Baku</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4">
            	<div class="input-field">
                	<select class="white browser-default">
      					<option value="" disabled selected>Nama Produk</option>
      					<option value="1">Bawang</option>
      					<option value="2">Bau Bawang</option>
      					<option value="3">Rizuki Bau Bawang</option>
    				</select>
               	</div>
            </div>

            <!-- tambah pemesanan -->
            <div class="col s2">
                <a class="waves-effect waves-light btn-large btn-floating"><i class="material-icons">file_download</i>button</a>
                <a class="waves-effect waves-light btn-large btn-floating"><i class="material-icons">print</i>button</a>
            </div>
            

        </div>

        <!-- konten tab -->
        <div id="tabelstokbahanbaku" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No.</th>
                        <th>Nama Bahan Baku</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $count = 0;
                    foreach ($bahan_baku->result() as $col) :
                         $count++;
                        ?>
                        
                            <?php
                            //$hitung = 0;
            
                            foreach ($bahan_baku->result() as $row) :
                              //$hitung++;
                                
                                //foreach ($retur_bahan_baku->result() as $s) :
                                   
                                    ?>
                            <?php
                                   
                                if ($row->id_bahan_baku == $col->id_bahan_baku) :
                                    //if($row->id_bahan_baku == $s->id_bahan_baku):
                                    // $jml_asli = $col->jml_bahan_baku;
                                    // $jml_retur = $s->jml_bahan_baku;
                                    // $jml_akhir = $jml_asli- $jml_retur;
                                    ?>
                                    <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row->nama_bahan_baku; ?></td>
                                    <td><?php echo $col->jml_bahan_baku; ?></td>
                                    <!-- <td><?php echo $row->jml_bahan_baku; ?></td>
                                     -->
                                </tr>
                                <?php
                            //endif;
                        endif;
                        // endforeach;
                        endforeach;
                        ?>

                            <!--
                            <td><?php echo $col->id_so; ?></td>
                            <td><?php
                                $testimoni_barang = substr($col->testimoni_barang, 0, 25);
                                echo $testimoni_barang; ?></td>
                            <td class="button-container">
                                <div id="table-button">
                                    <a href="#"><i class="material-icons delete-button">delete_forever</i></a> 
                                    <a href="#"><i class="material-icons edit-button">create</i></a>
                                </div>
                            </td>-->
                        
                    <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </div>

    </div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
