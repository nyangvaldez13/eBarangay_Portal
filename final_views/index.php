
<?php include 'include/header.php'; ?>

<style>
	.slider {
  background: url("./images/bg/home-bg.png") no-repeat 0% 30%;
  /* background-color: blue; */
  /* background: rgb(9,9,121); */
  /* background: linear-gradient(90deg, <?= $color1 ?> 0%, <?= $color4 ?> 100%); */
  /* background: linear-gradient(90deg, <?= $color1 ?> 0%, <?= $color4 ?> 100%); */
  
  background-size: cover;
  padding: 180px 0px;
}

.slider .gradient-back{
	height: 100vh;
	background: linear-gradient(to right, <?= $color1 ?> 0%, <?= $color4 ?> 100%);
	width: 100%;
  height: 100%;
}


</style>

<!-- Header Close -->

<div class="main-wrapper ">
<!-- Section Menu End -->

<!-- Section Slider Start -->
<!-- Slider Start -->
<section class="slider"><div class="gradient-back"></div>
	

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<span class="h6 d-inline-block mb-4 subhead text-uppercase"><?= $title ?></span>
				<h1 class="text-uppercase text-white mb-5"><?= $title_sub ?> <span style="color:<?= $color1 ?>;"><?= $title ?></span></h1>
			
				<a href="pricing.html" target="_blank" class="btn btn-main " >Join Us <i class="ti-angle-right ml-3"></i></a>
			</div>
		</div>
	</div>
	
</section>
<!-- Section Slider End -->


<!-- Section Intro Start -->
<section class="mt-80px">
	<div class="container">
		<div class="row ">
			<div class="col-lg-4 col-md-6">
				<div class="card p-5 border-0 rounded-top border-bottom position-relative hover-style-1">
					<span class="number">01</span>
					
					<h3 class="mt-3"><?= $step1['title'] ?></h3>
					<p class="mt-3 mb-4"><?= $step1['description'] ?></p>
					<a href="about.html" class="text-color text-uppercase font-size-13 letter-spacing font-weight-bold"><i class="ti-minus mr-2 "></i>more Details</a> 
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card p-5 border-0 rounded-top hover-style-1">
					<span class="number">02</span>
					<h3 class="mt-3"><?= $step2['title'] ?></h3>
					<p class="mt-3 mb-4"><?= $step2['description'] ?></p>
					<a href="about.html" class="text-color text-uppercase font-size-13 letter-spacing font-weight-bold"><i class="ti-minus mr-2 "></i>more Details</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card p-5 border-0 rounded-top hover-style-1">
					<span class="number">03</span>
					<h3 class="mt-3"><?= $step3['title'] ?></h3>
					<p class="mt-3 mb-4"><?= $step3['description'] ?></p>
					<a href="about.html" class="text-color text-uppercase font-size-13 letter-spacing font-weight-bold"><i class="ti-minus mr-2 "></i>more Details</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Intro End -->

<?php 



?>


<!-- Section About start -->
<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<img src="assets/projects/<?= $cover_photo ?>" alt="" class="img-fluid rounded shadow w-100">
			</div>
			
			<div class="col-lg-6">
				<div class="pl-3 mt-5 mt-lg-0">
					<h2 class="mt-1 mb-3"><?= $cover_activity ?></h2>
					<h4 class="text-color"><?= $cover_title ?></h4>
					<h6><?= date('F j, Y', strtotime($cover_date)) ?></h6> 
					<p class="mb-4"><?= $cover_description ?></p>

					<a href="#" class="btn btn-main">Learn More<i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section About End -->

<!-- section Call To action start -->
<section class="section cta">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="text-center">
					<span class="h6 letter-spacing text-white">Dscover your potential</span>
					<h2 class="text-lg mt-4 mb-5 text-white">
						Book your early seat to get <span class="text-color">summer 25% </span>dicsount
					</h2>

					<a href="pricing.html" class="btn btn-main text-white">Join Today</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section Call To action start -->

<!-- Section Services Start -->
<section class="section services ">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Our Services</h2>
					<p>We offer more than 35 group exercis, aerobic classes each week.</p>
				</div>
			</div>
		</div>

		<div class="row no-gutters">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-gym-alt-2 text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">WEIGHT LIFTING</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-cycling-alt text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Cycling</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-gym-alt-3 text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">YOGA MEDIDATION</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-muscle text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Building body</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-dumbbell text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Fitness Track</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-gym text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Fitness</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Services End -->

<!-- Section Gallery Start -->
<section class="gallery">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Our gallery</h2>
					<p>We offer more than 35 group exercis, aerobic classes each week.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid p-0">
		<div class="row no-gutters portfolio-gallery">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-01.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-01.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-02.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-02.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-03.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-03.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-04.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-04.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-05.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-05.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-06.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-06.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-07.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-07.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-08.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-08.jpg" alt="" class="img-fluid">
				</a>
			</div>
		</div>
	</div>
</section>		

<!-- Section Gallery END -->

<!-- Section Testimonial Start -->
<section class="section textimonial position-relative bg-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="row justify-content-center">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<div class="divider mb-3"></div>
							<h2 class="text-white">What People say</h2>
						</div>
					</div>
				</div>

				<div class="testimonial-slider">
					<div class="text-center mb-4 ">
						<i class="ti-quote-left text-lg text-color"></i>
						<h3 class="mt-4 text-white letter-spacing">A great Start to a healthy life</h3>
						<p class="my-4 text-white-50">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>

						<div>
							<h4 class="mb-0 text-capitalize text-white font-weight-normal">John Donas</h4>
							<span class="text-white-50">Manager</span>
						</div>
					</div>
					<div class="text-center mb-4">
						<i class="ti-quote-left text-lg text-color"></i>
						<h3 class="mt-4 text-white letter-spacing">The workout worth attending!</h3>
						<p class="my-4 text-white-50">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>
						<div>
							<h4 class="mb-0 text-capitalize text-white font-weight-normal">Donas Jack</h4>
							<span class="text-white-50">Manager</span>
						</div>
					</div>

					<div class="text-center mb-4">
						<i class="ti-quote-left text-lg text-color"></i>
						<h3 class="mt-4 text-white letter-spacing">Very Professional Club and coaches</h3>
						<p class="my-4 text-white-50">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>
						<div>
							<h4 class="mb-0 text-capitalize text-white font-weight-normal" >Mikel Hussy</h4>
							<span class="text-white-50">Manager</span>
						</div>
					</div>

					<div class="text-center mb-4">
						<i class="ti-quote-left text-lg text-color"></i>
						<h3 class="mt-4 text-white letter-spacing">Shape your body and healthy!</h3>
						<p class="my-4 text-white-50">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>
						<div>
							<h4 class="mb-0 text-capitalize text-white font-weight-normal">Hiker jons</h4>
							<span class="text-white-50">Manager</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Testimonial END -->

<!-- Section Course Start -->
<section class="section course bg-gray">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Popular Courses</h2>
					<p>We offer more than 35 group exercis, aerobic classes each week.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="images/gallery/course-1.jpg" alt="" class="img-fluid">

					<div class="card-body">
						<a href="course-single.html"><h4 class="font-secondary mb-0">Build Body</h4></a>
						<p class=" mb-2">Mentor: Jimmy Karter</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="images/gallery/course-2.jpg" alt="" class="img-fluid">

					<div class="card-body">
						<a href="course-single.html"><h4 class="font-secondary mb-0">Build Body</h4></a>
						<p class="mb-2">Mentor: Jimmy Karter</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="images/gallery/course-3.jpg" alt="" class="img-fluid">

					<div class="card-body">
						<a href="course-single.html"><h4 class="font-secondary mb-0">Build Body</h4></a>
						<p class=" mb-2">Mentor: Jimmy Karter</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="images/gallery/course-2.jpg" alt="" class="img-fluid">

					<div class="card-body">
						<a href="course-single.html"><h4 class="font-secondary mb-0">Build Body</h4></a>
						<p class=" mb-2">Mentor: Jimmy Karter</p>
					</div>
				</div>
			</div>

		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="mt-5 text-center">
					<a href="course.html" class="btn btn-main">See all our Courses</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Course ENd -->


<?php include 'include/footer.php' ?>