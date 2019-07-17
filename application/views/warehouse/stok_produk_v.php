<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stok Produk Jadi</title>
	<?php $this->load->view('warehouse/_partials/css.php') ?>
</head>
<body>
	<?php $this->load->view('warehouse/_partials/navbar.php') ?>
	
	<div class="container">
        <br>
        <!-- <h3 class="laporan">Laporan Jumlah Stok Produk yang Ada di Warehouse</h3> -->
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s6">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Bahan Baku</a>
                        <a href="stok_produk" class="breadcrumb">Stok Produk</a>
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
            <div class="col s2 iconicon">
                <a class="waves-effect waves-light btn-large btn-floating"><i class="material-icons">file_download</i>button</a>
                <a class="waves-effect waves-light btn-large btn-floating"><i class="material-icons">print</i>button</a>
            </div>
            

        </div>

        <!-- konten tab -->
        <div id="stokproduk" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <!--<th>Tanggal</th>-->
                        <th>No</th>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th>Harga Produk (Rp)</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>

                <!--<tbody>
                	<tr>
                    	<td>12345</td>
                    	<td>12345</td>
                    	<td>12345</td>
                    	<td>12345</td>
                    </tr>
                </tbody>-->
                <tbody>
                    <?php
                    //$count = 0;
                    foreach ($stock_barang->result() as $col) :
                        //$count++;
                        ?>
                        <tr>
                            <?php
                            $hitung = 0;
                            foreach ($stock_barang->result() as $row) :
                                $hitung++;
                                if ($row->id_barang == $col->id_barang) :
                                    ?>
                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $row->id_barang; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <td><?php echo $row->tanggal_kadaluarsa_barang; ?></td>
                                    <td><?php echo $row->harga_barang; ?></td>
                                    <td><?php echo $row->jumlah_stok_barang; ?></td>
                                <?php
                            endif;
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
                        </tr>
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
