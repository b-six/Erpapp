<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Sales Order</title>
    <?php $this->load->view('warehouse/_partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('warehouse/_partials/navbar.php') ?>

	<div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s8">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Order</a>
                        <a href="production_order" class="breadcrumb">Production Order</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('warehouse/_partials/searchbar.php'); ?></div>         


         <!-- tab -->
        <div class="row">
            <div class="col s12">
                <ul class="tabs blue-dark-grey">
                    <li class="tab col s2"><a href="#pending" class="active small-font">Pending</a></li>
                    <li class="tab col s2"><a class="small-font" href="#on-process">
                            On-Process</a></li>
                    <li class="tab col s2"><a href="#success" class="small-font">
                            Success</a></li>
                </ul>
                <br>
            </div>

            <!-- konten tab -->

            <!-- tab pending -->
        <div id="pending" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>No. Produksi</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        
                    </tr>
                </thead>

                <tbody>
                <?php
                    //$count = 0;
                 $hitung = 0;
                    foreach ($production_order->result() as $col) :
                        //$count++;
                         if ($col->status == 'pending') :
                        
                            $hitung++;
            
                            foreach ($stock_barang->result() as $row) :
                            
                                if ($row->id_barang == $col->id_barang) :
                                    ?>
                                    <tr>
                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $col->tanggal; ?></td>
                                    <td><?php echo $col->id_po; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <!--<td><?php echo $row->tanggal_kadaluarsa_barang; ?></td>
                                    <td><?php echo $row->harga_barang; ?></td>-->
                                    <td><?php echo $col->jumlah_pesanan; ?></td>
                                    
</tr>
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
                       
                    <?php
                endif;
                endforeach;
                ?>
                </tbody>
            </table>
        </div>


            <!-- tab onprocess -->
        <div id="on-process" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>No. Produksi</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                       
                    </tr>
                </thead>

                <tbody>
                <?php
                    //$count = 0;
                 $hitung = 0;
                    foreach ($production_order->result() as $col) :
                        //$count++;
                         if ($col->status == 'onprocess') :
                         $hitung++;
                        ?>
                        
                            <?php
                           
            
                            foreach ($stock_barang->result() as $row) :
                            
                                if ($row->id_barang == $col->id_barang) :
                                    
                                    ?>
                                    <tr>
                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $col->tanggal; ?></td>
                                    <td><?php echo $col->id_po; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <!--<td><?php echo $row->tanggal_kadaluarsa_barang; ?></td>
                                    <td><?php echo $row->harga_barang; ?></td>-->
                                    <td><?php echo $col->jumlah_pesanan; ?></td>
                                    

                        </tr>
                                <?php
                            endif;
                        endforeach;
                       
                endif;
                endforeach;
                ?>
                </tbody>
            </table>
        </div>


            <!-- tab success -->
        <div id="success" class="col s12 white-text content-color">
            <table class="responsive-table centered highlight">
                <thead class="bottom-border">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>No. Produksi</th>
                        <th>Produk</th>
                        <th>Jumlah</th>

                    </tr>
                </thead>

                <tbody>
                <?php
                     $hitung = 0;
                    foreach ($production_order->result() as $col) :
                        //$count++;
                         if ($col->status == 'success') :
 $hitung++;
                        ?>
                       
                            <?php
                            ;
            
                            foreach ($stock_barang->result() as $row) :
                           
                                if ($row->id_barang == $col->id_barang) :
                                    ?>
<tr>
                                    <td><?php echo $hitung; ?></td>
                                    <td><?php echo $col->tanggal; ?></td>
                                    <td><?php echo $col->id_po; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <!--<td><?php echo $row->tanggal_kadaluarsa_barang; ?></td>
                                    <td><?php echo $row->harga_barang; ?></td>-->
                                    <td><?php echo $col->jumlah_pesanan; ?></td>
                                    
</tr>
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
                       
                    <?php
                endif;
                endforeach;
                ?>
                </tbody>
            </table>
        </div>
</div>
</div>
    </div>
	
	<?php $this->load->view('warehouse/_partials/js.php') ?>
</body>
</html>
