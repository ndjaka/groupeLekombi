
<!-- header -->
<?php require_once("/vues/header.php") ?>
<!-- //header -->


<!-- banner -->
<section class="banner" id="home">
	<div class="callbacks_container">
		<ul class="rslides" id="slider3">
			<li>
				<div class="slider-info bg1">
					<div class="bs-slider-overlay">
					<div class="banner-text container">
						<h5 class="tag text-center mb-3 text-uppercase"></h5>
						<h1 class="movetxt text-center agile-title text-uppercase">audit et service</h1>
						<h4 class="movetxt text-center mb-3 agile-title text-uppercase">Commerce general </h4>							
						<a class="bt mt-sm-4 text-capitalize" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button"> Explore
						<i class="fas fa-camera-retro"></i> </a>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg2">
					<div class="bs-slider-overlay">
					<div class="banner-text container">
						<h5 class="tag text-center mb-3 text-uppercase"></h5>
						<h4 class="movetxt text-center agile-title text-uppercase">securite et surete  </h4>
						<h4 class="movetxt text-center mb-3 agile-title text-uppercase"></h4>	
						<a class="bt mt-sm-4 text-capitalize" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button"> Explore
						<i class="fas fa-camera-retro"></i> </a>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg3">
					<div class="bs-slider-overlay">
					<div class="banner-text container">
						<h5 class="tag text-center mb-3 text-uppercase">We sdfddf are creative</h5>
						<h4 class="movetxt text-center agile-title text-uppercase">High Quality Photos </h4>
						<h4 class="movetxt text-center mb-3 agile-title text-uppercase">Creative Gallery Stills </h4>	
						<a class="bt mt-sm-4 text-capitalize" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button"> Explore
						<i class="fas fa-camera-retro"></i> </a>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg4">
					<div class="bs-slider-overlay">
					<div class="banner-text container">
						<h5 class="tag text-center mb-3 text-uppercase">We are awesome</h5>
						<h4 class="movetxt text-center agile-title text-uppercase">Film Photography </h4>
						<h4 class="movetxt text-center mb-3 agile-title text-uppercase">Cinematic Videography </h4>	
						<a class="bt mt-sm-4 text-capitalize" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button"> Explore
						<i class="fas fa-camera-retro"></i> </a>
					</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- //banner -->

<!-- Vertically centered Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"><i class="fas fa-camera-retro"></i> Photo Session</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<div class="modal-body">
			<img src="images/1.jpg" class="img-fluid mb-3" alt="Modal Image" />
			Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
			ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		</div>
	</div>
  </div>
</div>
<!-- //Vertically centered Modal -->


<!-- Services -->
<section class="services py-5">
	<div class="container py-sm-3">
		<center><h3 class="heading mb-lg-5 mb-2">Services </h3></center>
		<div class="row service-grids">
			<div class="col-lg-4 col-md-6 grid1">
				<div class="card bg-light">
		            <img class="card-img-top" src="/web/images/sec.PNG" alt="Card image cap">
		            <div class="card-body">
		               <h5 class="card-title border-bottom pb-3">Formation en sécurité et surété<a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
		               <p class="card-text">placement des agents </p>
		               <a href="/web/vues/securitesurete.php" class="btn btn-sm btn-info float-right">plus de détails <i class="fas fa-angle-double-right"></i></a>
	                </div>
	         </div>
			</div>
			<div class="col-lg-4 col-md-6 grid1">
				<div class="card bg-light">
		            <img class="card-img-top" src="/web/images/commerce_general.PNG" alt="Card image cap">
		            <div class="card-body">
		               <h5 class="card-title border-bottom pb-3">Commerce géneral<a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
		               <p class="card-text">vente de produits divers</p>
		               <a href="#" class="btn btn-sm btn-info float-right">plus de détails <i class="fas fa-angle-double-right"></i></a>
	                </div>
	         </div>
			</div>
			<div class="col-lg-4 col-md-6 grid1">
				<div class="card bg-light">
		            <img class="card-img-top" src="/web/images/importexport.jpg" alt="Card image cap">
		            <div class="card-body">
		               <h5 class="card-title border-bottom pb-3">Import Export<a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
		               <p class="card-text">Import Export dans tout le monde</p>
		               <a href="vues/securitesurete.php" class="btn btn-sm btn-info float-right">plus de détails <i class="fas fa-angle-double-right"></i></a>
	                </div>
	         </div>
			</div>
		</div>
	</div>
</section>
<!-- //Services -->

<!-- Services -->
<section class="services">
	<div class="container py-sm-3">
		<div class="row service-grids">
			<div class="col-lg-4 col-md-6 grid1">
				<div class="card bg-light">
		            <img class="card-img-top" src="/web/images/agroalimentaire.PNG" alt="Card image cap">
		            <div class="card-body">
		               <h5 class="card-title border-bottom pb-3">Agro Alimentaire<a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
		               <p class="card-text">Some quick example text</p>
		               <a href="#" class="btn btn-sm btn-info float-right">plus de détails <i class="fas fa-angle-double-right"></i></a>
	                </div>
	         </div>
			</div>
			<div class="col-lg-4 col-md-6 grid1">
				<div class="card bg-light">
		            <img class="card-img-top" src="/web/images/audit2.PNG" alt="Card image cap">
		            <div class="card-body">
		               <h5 class="card-title border-bottom pb-3">Audit et Conseils<a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
		               <p class="card-text">lorem ipsum</p>
		               <a href="#" class="btn btn-sm btn-info float-right">plus de détails <i class="fas fa-angle-double-right"></i></a>
	                </div>
	         </div>
			</div>
			<div class="col-lg-4 col-md-6 grid1">
				<div class="card bg-light">
		            <img class="card-img-top" src="/web/images/agro2.PNG" alt="Card image cap">
		            <div class="card-body">
		               <h5 class="card-title border-bottom pb-3">Prestation de services<a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
		               <p class="card-text">Some quick example</p>
		               <a href="#" class="btn btn-sm btn-info float-right">plus de détails <i class="fas fa-angle-double-right"></i></a>
	                </div>
	         </div>
			</div>
		</div>
	</div>
</section>
<!-- //Services -->

<!-- footer -->
<?php require_once("/vues/footer.php") ?>
<!-- //footer -->
