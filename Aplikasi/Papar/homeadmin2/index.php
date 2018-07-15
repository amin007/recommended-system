<?php $pautan = URL . 'sumber/rangka-dawai/startbootstrap-shop-item/';
\Aplikasi\Kitab\Sesi::init();
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
include 'include/diatas.php'; 
include 'include/menu_atas.php';
?>

<!-- Page Content -->
<div class="container">
<div class="row">
	<div class="col-lg-3"><?php include 'include/menu_right.php'; ?></div>
	<!-- /.col-lg-3 -->
	<div class="col-lg-9">
		<div class="card mt-4">
			<img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
			<div class="card-body">
			<h3 class="card-title">Scrapping</h3>
			<h4>$24.99</h4>
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. 
			Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
			<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>4.0 stars
			</div>
		</div>
		<!-- /.card -->
		<!-- div class="card card-outline-secondary my-4">
		<div class="card-header">Product Reviews</div>
		</div>
		!-- /.card -->
	</div>
	<!-- /.col-lg-9 -->
  <div class="col-lg-3"><?php include 'include/menu_right.php'; ?></div>
  <!-- /.col-lg-3 -->

	<div class="col-lg-9">
		<div class="card mt-4">
			<div class="card-body">
				<h3 class="card-title">Web Scrapping</h3>
				<p class="card-text">Web Scrapping is a technique employed to extract large 
				amounts of data from websites whereby the data is extracted
				and saved to a local file in your computer or
				to a database in table (spreadsheet) format.</p>

				<p class="card-text">Web data scraping, one of the oldest techniques for 
				extracting Web contents, is still in position to offer a valid and
				valuable service to a wide range of bioinformatics applications, 
				ranging from simple extraction robots to online meta-servers.</p>

				<p class="card-text"> Sources: Glez-Peña, D., Lourenço, A., 
				López-Fernández, H., Reboiro-Jato, M.,
				Fdez-Riverola, F., 2014.</p>
			</div>
		</div><!-- /.card -->
<!-- div class="card card-outline-secondary my-4">
<div class="card-header">Product Reviews</div>
</div>
!-- /.card -->
	</div><!-- /.col-lg-9 -->

</div>
</div>
<!-- /.container -->
<?php include 'include/dibawah.php'; ?>