	<nav class="navbar navbar-transparent navbar-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header" background="bg.jpeg">
				<button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
				</button>
				<a href="#home">
					<!-- Navbar Judul Pojok Kiri -->
					<div class="logo-container">
						<div class="logo">
							<img src="<?= base_url('assets2'); ?>/img/dk.jpeg" alt="Sistem Pakar Komputer">
						</div>
						<div class="brand">
							SP Komputer
						</div>
					</div>
					<!-- End of Navbar Judul Pojok Kiri -->
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="example">
				<!-- Navbar Kanan -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#home" class="page-scroll">
							<i class="fa fa-home"></i>
							Home
						</a>
					</li>
					<li>
						<a class="page-scroll" href="#about">
							<i class="fa fa-info-circle"></i>
							About
						</a>
					</li>
					<li>
						<a href="<?= base_url('auth'); ?>">
							<i class="fa fa-sign-in"></i>
							Login
						</a>
					</li>
				</ul>
				<!-- End of Navbar Kanan -->
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="wrapper">
		<div class="parallax filter-gradient blue " data-color="blue">
		<div class="parallax-background">
					<img class="parallax-background-image flipped" src="<?= base_url('assets2'); ?>/img/showcases/showcase-2/bg.jpeg">
				</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="description text-center" style="color: white" >
							<b><h2>Sistem Pakar Diagnosa Kerusakan Komputer</h2>
							<br>
							<b><h5 >Aplikasi Untuk Diagnosa Kerusakan Pada Komputer/Laptop</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="section section-no-padding page-scroll" id="about">
			<div class="parallax filter-gradient blue" data-color="blue">
				
				<div class="info">
					<h1>About Us</h1>
					<p>Sistem pakar merupakan sistem informasi yang mengandung beberapa pengetahuan dari seorang pakar yang digunakaan untuk membantu mendapatkan soslusi dan merekomendasikan dalam pengambilan keputusan. Demikian pula Sistem Pakar Diagnosa Kerusakan Komputer ini dibangun untuk membantu para pengguna atau teknisi komputer atau laptop dalam mendiagnosa kerusakan hardwarenya.Dimana sistem ini memiliki 5 jenis kerusakan, berdasarkan 13 gejala yang sering dialami. Sistem Pakar ini dibangun untuk memenuhu tugas pada mata kuliah Sistem Pakar
					</p>
				</div>
			</div>
		</section>