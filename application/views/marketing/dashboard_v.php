<!DOCTYPE html>
<html lang="en">

<head>
	<title>Marketing - Dashboard</title>
	<?php $this->load->view('marketing/partials/css.php') ?>
</head>

<body>
	<!-- navbar -->
	<?php $this->load->view('marketing/partials/navbar.php') ?>

	<!-- konten web -->
	<div class="container">
		<div class="row">
			<!-- <p>asdasdasdasdasdsad</p> -->
		</div>
	</div>
	
	<!-- page content -->


	<div class="container">
		<div class="row">
			<div class="col s12">
				<ul class="tabs dcard blue-dark-grey">
					<li class="tab col s4 height-auto">
						<a href="#sales_order" class="dcard">
							<div class="card dcard lime darken-3">
								<div class="white-text row dtab-content">
									<div class="col s9 dtab-name left-align">
										Sales Order
									</div>
									<div class="col s3 dtab-name">
										1230
									</div>
								</div>
							</div>
						</a>
					</li>

					<li class="tab col s4 height-auto">
						<a href="#customer" class="dcard">
							<div class="card dcard teal darken-1">
								<div class="white-text row dtab-content">
									<div class="col s9 dtab-name left-align">
										Customer
									</div>
									<div class="col s3 dtab-name">
										1230
									</div>
								</div>
							</div>
						</a>
					</li>

					<li class="tab col s4 height-auto">
						<a href="#stock_produk" class="dcard">
							<div class="card dcard red darken-1">
								<div class="white-text row dtab-content">
									<div class="col s9 dtab-name left-align">
										Stok Produk
									</div>
									<div class="col s3 dtab-name">
										1230
									</div>
								</div>
							</div>
						</a>
					</li>
				</ul>
			<br/>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<!-- sales_order Tab -->
			<div id="sales_order" class="col s12">
				<div class="row">
					<div class="col s8">
						<div class="container">
							<canvas id="so_chart" width="900" height="500">
						</div>
					</div>
					<div class="col s4">
						<table class="responsive-table  highlight">
							<thead class="bottom-border">
								<tr>
									<th>Bulan</th>
									<th>Jumlah</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach(array_combine($bulan, $sales_order) as $b => $so){ ?>
									<tr>
										<td><?php echo($b); ?></td>
										<td><?php echo($so); ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /sales_order Tab -->

			<!-- Customer Tab -->
			<div id="customer" class="col s12">
				<div class="row">
					<div class="col s8">
						<div class="container">
							<canvas id="customer_chart" width="900" height="500"></canvas>
						</div>
					</div>
					<div class="col s4">
						<table class="responsive-table white-text highlight">
							<thead class="bottom-border">
								<tr>
									<th>Jenis Customer</th>
									<th>Jumlah</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($customer as $k => $v){ ?>
									<tr>
										<td><?php echo($k); ?></td>
										<td><?php echo($v); ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /Customer Tab -->

			<!-- cek produk Tab -->
			<div id="stock_produk" class="col s12">
				<div class="row">
					<div class="col s8">
						<!-- <div class="container"> -->
							<canvas id="stok_produk_chart" width="900" height="500"></canvas>
						<!-- </div> -->
					</div>
					<div class="col s4">
						<table class="responsive-table white-text highlight">
							<thead class="bottom-border">
								<tr>
									<th>Nama Produk</th>
									<th>Jumlah</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($stock_barang as $stok){?>
									<tr>
										<?php foreach($stok as $v){ ?>
											<td><?php echo($v); ?></td>
										<?php } ?>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /Cek produk Tab -->
	</div>

	<!-- js -->
	<script type="text/javascript">
		//buat array js dari array php untuk chart sales order
		var sales_order = <?php echo '["' . implode('", "', $sales_order) . '"]' ?>; //buat di garis Y axis
		var bulan = <?php echo '["' . implode('", "', $bulan) . '"]' ?>; //buat di garis X axis

		// buat array js dari array php untuk customer chart
		<?php 
		$x=1;
		foreach($customer as $k => $v){
			$jenis_customer[$x] = $k;
			$x++;
		} ?>
		var jenis_customer = <?php echo '["' . implode('", "', $jenis_customer) . '"]' ?>; //buat di garis X axis
		var jumlah_customer = <?php echo '["' . implode('", "', $customer) . '"]' ?>; //buat di garis Y axis

		//buat array js dari array php untuk stok produk
		<?php 
		$y=1;
		$x=1;
		foreach($stock_barang as $stok){
			foreach($stok as $v){
				if($x==1){
					$nama_produk[$y] = $v;
					$x++;
				}else{
					$jumlah_produk[$y] = $v;
					$x--;
				}
			}
			$y++;
		} ?>
		var nama_produk = <?php echo '["' . implode('", "', $nama_produk) . '"]' ?>; //buat label chart
		var jumlah_produk = <?php echo '["' . implode('", "', $jumlah_produk) . '"]' ?>; //buat besar chart
	</script>
	<?php $this->load->view('marketing/partials/js.php') ?>
</body>

</html>