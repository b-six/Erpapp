<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marketing - Dashboard</title>
    <?php $this->load->view('warehouse/_partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('warehouse/_partials/navbar.php') ?>
    <div class="container">
    	<br>
    	<div class="row">
    		<div class="col s6 white-text center">
    			<h6>Produk Masuk</h6>
    		</div>
    		<div class="col s6 white-text center">
	    		<h6>Produk Keluar</h6>
	    	</div>
    	</div>
    	<div class="row">
    		
    		<div class="col s6 white-text content-color" style="margin-top: 10px;">
    			
    			<table class="white-text responsive-table centered highlight">
    				<thead class="bottom-border">
    					<tr>
    						<th>No</th>
    						<th>Nama Barang</th>
    						<th>Jumlah</th>
    					</tr>
    				</thead>
		    		<tbody>
		    			<?php
		    					$total = 0;
		    					$hitung = 0;
		    					foreach ($produk_jadi_masuk->result() as $col) :
		    			?>
		    			<tr>
		    				<?php
		    						foreach ($stock_barang->result() as $row) :
		    							if ($row->id_barang == $col->id_barang) :
		                                    $hitung++;
		                            ?>

		    				  
		    				<td><?php echo $hitung; ?></td>
		    				<td><?php echo $row->nama_barang; ?></td>
		    				<td><?php echo $col->jml_barang_masuk; 
		    				$total = $total+$col->jml_barang_masuk;
		    				?></td>
		    			<?php endif;
		    				endforeach;
		    			   ?>
		    			</tr>
		    			

		    		<?php endforeach; ?>
		    			<tr>
		    				<td colspan="2">Jumlah</td>
		    				<td><?php echo $total; ?></td>
		    			</tr>
		    		</tbody>
		    	</table>
		    </div>
	    
	   
	    <div class="row">
	    	<div class="col s6 white-text content-color" style="margin-top: 10px;">
	    		<table class="white-text responsive-table centered highlight">
	    			<thead class="bottom-border">
			   			<tr>
			   				<th>No</th>
			   				<th>Nama Barang</th>
			   				<th>Jumlah</th>
			   			</tr>
	    			</thead>
	    			<tbody>
			   			<?php
			   					$total2 = 0;
			   					$hitung2 = 0;
			   					foreach ($produk_jadi_keluar->result() as $col2) :
			   			?>
	    				<tr>
			   				<?php
								foreach ($stock_barang->result() as $row2) :
								if ($row2->id_barang == $col2->id_barang) :
			                        $hitung2++;
			                ?>

	    				  
			   				<td><?php echo $hitung2; ?></td>
			   				<td><?php echo $row2->nama_barang; ?></td>
			   				<td><?php echo $col2->jml_produk_keluar; 
			    				$total2 = $total2+$col2->jml_produk_keluar;
			   				?></td>
			    			<?php endif;
			    				endforeach;
			    			   ?>
			   			</tr>
	    			

	    					<?php endforeach; ?>
				    			<tr>
				    				<td colspan="2">Jumlah</td>
				    				<td><?php echo $total2; ?></td>
				    			</tr>
	    					</tbody>
	    				</table>
	    			</div>
	    		</div>
	    </div>
    <!-- js -->
    <?php $this->load->view('warehouse/_partials/js.php') ?>
</body>

</html>