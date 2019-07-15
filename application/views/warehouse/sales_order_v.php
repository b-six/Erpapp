<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Sales Order</title>
    <?php $this->load->view('warehouse/_partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('warehouse/_partials/navbar.php') ?>

    <!-- konten -->
    <div class="container">
        <br>
        <div class="row">
            <!-- breadcrumb -->
            <div class="col s7">
                <nav class="no-shadows breadcrumbs-style">
                    <div class="nav-wrapper blue-dark-grey">
                        <a class="breadcrumb no-pointer-event">Order</a>
                        <a href="sales_order" class="breadcrumb">Sales Order</a>
                    </div>
                </nav>
            </div>

            <!-- searchbar -->
            <div class="col s4"><?php $this->load->view('marketing/partials/searchbar.php'); ?></div>

           

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
                        <th>No. Order</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                         $hitung = 0;
                        foreach ($sales_order->result() as $row) :
                            

                                
                            if ($row->status == 'pending') :
$hitung++;
                                foreach ($customer->result() as $col) :
                                    


                                    if ($col->id_pelanggan == $row->id_pelanggan) :
                                        $nama_pelanggan = $col->nama_pelanggan; 
                                       ?>
                                        <tr>
                                            <td><?php echo $hitung; ?></td>
                                    <td><?php echo $row->tanggal_pesanan; ?></td>
                                    <td><?php echo $row->id_so; ?></td>
                                    <td><?php echo $col->nama_pelanggan; ?></td>
                                    <!--<td><?php echo $row->tanggal_kadaluarsa_barang; ?></td>-->
                                    <td><?php echo $row->total_barang; ?></td>
                                    <td><?php echo "Rp. " . number_format($row->total_pesanan) ?></td>
                                            
                                        </tr>
                                    <?php endif;
                            endforeach;
                        endif;
                    endforeach; ?>
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
                        <th>No. Order</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Harga</th>
                        </tr>
                    </thead>

                   <tbody>
                        <?php
                        $hitung = 0;
                        foreach ($sales_order->result() as $row) :
                            

                            if ($row->status == 'onprocess') :

                                $hitung++;
                                foreach ($customer->result() as $col) :
                                    


                                  if ($col->id_pelanggan == $row->id_pelanggan) :
                                        $nama_pelanggan = $col->nama_pelanggan; 
                                        ?>
                                        <tr>
                                            <td><?php echo $hitung; ?></td>
                                    <td><?php echo $row->tanggal_pesanan; ?></td>
                                    <td><?php echo $row->id_so; ?></td>
                                    <td><?php echo $col->nama_pelanggan; ?></td>
                                    <!--<td><?php echo $row->tanggal_kadaluarsa_barang; ?></td>-->
                                    <td><?php echo $row->total_barang; ?></td>
                                    <td><?php echo "Rp. " . number_format($row->total_pesanan) ?></td>
                                            
                                        </tr>
                                    <?php endif;
                            endforeach;
                        endif;
                    endforeach; ?>
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
                        <th>No. Order</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                       $hitung = 0;
                        foreach ($sales_order->result() as $row) :
                            

                            if ($row->status == 'success') :

                                 $hitung++;
                                foreach ($customer->result() as $col) :
                                   


                                    if ($col->id_pelanggan == $row->id_pelanggan) :
                                        $nama_pelanggan = $col->nama_pelanggan; 
                                       ?>
                                        <tr>
                                            <td><?php echo $hitung; ?></td>
                                    <td><?php echo $row->tanggal_pesanan; ?></td>
                                    <td><?php echo $row->id_so; ?></td>
                                    <td><?php echo $col->nama_pelanggan; ?></td>
                                    <!--<td><?php echo $row->tanggal_kadaluarsa_barang; ?></td>-->
                                    <td><?php echo $row->total_barang; ?></td>
                                    <td><?php echo "Rp. " . number_format($row->total_pesanan) ?></td>
                                            
                                        </tr>
                                    <?php endif;
                            endforeach;
                        endif;
                    endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>