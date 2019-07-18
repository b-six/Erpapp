<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title; ?></title>
	<!-- css -->
	<?php $this->load->view('partials/css');
	?>
</head>

<body>
	<?php $this->load->view('partials/navbar');
	?>

	<!-- konten -->
	<div class="container container-wide">
		<div class="row">
			<div class="col s12">
				<h5 class="white-text center"><b> Welcome to B-Six ERP App! </b></h5> <br>
				<h6 class="white-text center">Select your division :</h6>
			</div>
		</div>
		<div class="row center">
			<div class="col s12 offset-s1">

				<!-- marketing -->
				<div class="col s2 m2">
					<a href="welcome/login?modul=Marketing&login=1">
						<div class="card orange marketing z-depth-4" id="marketing-card">
							<div class="card-image  waves-block ">
								<img class="activator icon-home" src="<?php echo base_url('assets/img/home/marketing.png'); ?>">
							</div>
							<div class="card-content">
								<span class="card-title activator white-text text-darken-4"><b>Marketing</b></span>
							</div>
						</div>
					</a>
				</div>

				<!-- sdm -->
				<div class="col s2 m2">
					<a href="welcome/login?modul=HRD&login=1">
						<div class="card green z-depth-4" id="sdm-card">
							<div class="card-image  waves-block ">
								<img class="activator icon-home" src="<?php echo base_url('assets/img/home/hrd.png'); ?>">
							</div>
							<div class="card-content">
								<span class="card-title activator white-text text-darken-4"><b>HRD</b></span>
							</div>
						</div>
					</a>
				</div>

				<!-- finance -->
				<div class="col s2 m2">
					<a href="welcome/login?modul=Finance&login=1">
						<div class="card teal z-depth-4" id="finance-card">
							<div class="card-image  waves-block ">
								<img class="activator icon-home" src="<?php echo base_url('assets/img/home/finance.png'); ?>">
							</div>
							<div class="card-content">
								<span class="card-title activator white-text text-darken-4"><b>Finance</b><br></span>
							</div>
						</div>
					</a>
				</div>

				<!-- warehouse -->
				<div class="col s2 m2">
					<a href="welcome/login?modul=Warehouse&login=1">
						<div class="card red z-depth-4" id="warehouse-card">
							<div class="card-image  waves-block ">
								<img class="activator icon-home" src="<?php echo base_url('assets/img/home/warehouse.png'); ?>">
							</div>
							<div class="card-content">
								<span class="card-title activator white-text text-darken-4"><b>Warehouse</b></span>
							</div>
						</div>
					</a>
				</div>

				<!-- produksi -->
				<div class="col s2 m2" id="produksi-card">
					<a href="welcome/login?modul=Produksi&login=1">
						<div class="card red darken-4 z-depth-4">
							<div class="card-image  waves-block ">
								<img class="activator icon-home" src="<?php echo base_url('assets/img/home/produksi.png'); ?>">
							</div>
							<div class="card-content">
								<span class="card-title activator white-text text-darken-4"><b>Produksi</b></span>
							</div>
						</div>
					</a>
				</div>


			</div>
		</div>
	</div>

	<!-- js -->
	<?php $this->load->view('partials/js');
	?>
</body>

</html>