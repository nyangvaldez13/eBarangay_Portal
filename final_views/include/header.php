<?php

require ('./final_backend/dashboard/settings.php');

?>
<!doctype html>

<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4">
    
  <!-- theme meta -->
  <meta name="theme-name" content="gymfit" />
  
  <meta name="author" content="Themefisher.com">

  <title><?= $title ?></title>
  <link rel="icon" href="../assets/branding/<?= $logo ?>">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icofont Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Themify Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<style>
	

.btn-main, .btn-small, .btn-transparent {
  background: linear-gradient(90deg, <?= $color1 ?> 0%, <?= $color4 ?> 100%);
  color: #fff;
}
.btn-main:hover, .btn-small:hover, .btn-transparent:hover {
  background: linear-gradient(90deg, <?= $color2 ?> 0%, <?= $color3 ?> 100%);
  color: #fff !important;
  transform: translateY(-5px);
}


.hover-style-1 {
  position: relative;
}
.hover-style-1:before {
  position: absolute;
  content: "";
  left: 0px;
  top: 0px;
  width: 100%;
  height: 0px;
  transition: all 600ms ease;
  background: linear-gradient(90deg, <?= $color1 ?> 0%, <?= $color4 ?> 100%);
  border-color: rgb(245, 99, 75);
}
.hover-style-1 h3, .hover-style-1 p, .hover-style-1 a, .hover-style-1 i, .hover-style-1 h4 {
  position: relative;
  transition: all 600ms ease;
}
.hover-style-1:hover:before {
  height: 100%;
}
.hover-style-1:hover a {
  color: rgba(255, 255, 255, 0.8) !important;
}

.hover-style-1:hover h3,
.hover-style-1:hover h4,
.hover-style-1:hover p,
.hover-style-1:hover a {
  color: #fff;
}

.hover-style-1:hover i {
  color: rgba(255, 255, 255, 0.8) !important;
}

.text-color {
	color:<?= $color1 ?>;
}

.divider {
  margin: 0 auto;
  background: <?= $color1 ?>;
  width: 45px;
  height: 4px;
}

.slick-dots li.slick-active button::before {
  color:<?= $color1 ?>;
}

a:hover, a:focus {
	color:<?= $color1 ?> !important;
  text-decoration: none !important;
  outline: 0;
}

.fixed-nav {
  background:<?= $color1 ?>;
}
</style>

<body>


<!-- Section Menu Start -->
<!-- Header Start -->
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.html">
			<h2 class="text-white text-capitalize"><?= $title ?></h2>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
			aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-view-list"></span>
		</button>
		<div class="collapse text-center navbar-collapse" id="navbarsid">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">Pages.</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="about.html">About</a></li>
						<li><a class="dropdown-item" href="trainer.html">Trainer</a></li>
						<li><a class="dropdown-item" href="course.html">Courses</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
				<li class="nav-item"><a class="nav-link" href="pricing.html">Memebership</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">Blog.</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="blog.html">Blog Grid</a></li>
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog Sidebar</a></li>
						<li><a class="dropdown-item" href="blog-single.html">Blog Details</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>
			<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
				<a href="tel:+23-345-67890">
					<h3 class="text-color mb-0"><i class="ti-mobile mr-2"></i><?= $contact ?></h3>
				</a>
			</div>
		</div>
	</div>
</nav>
