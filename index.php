<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant fixed-top mt-3"> 
		<div class="container">
			<a class="navbar-brand" href="#">MyBlog</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blog.php">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blog.php">Galeri</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin/index.php">Admin</a>
					</li>
					<li class="nav-item ml-5">
						<a class="btn btn-success" href="login.php">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="jumbotron jumbotron-custom">
		<div class="container">
			<div class='row'>
				<div class="col-12">
				<h1 class="display-5"><i>IF WE DON'T GET LOST,<br>WE'LL NEVER FIND A NEW ROAD</i></h1>
		    	<center><a class="btn border px-4" href="#" role="button">WATCH VIDEO</a>	
			    <a class="btn border px-4 ml-3" href="#" role="button">LEARN MORE</a></center>
				</div>
			</div>
		</div>
	</div>

	<section id="about">
		<div class="container">
		  	<div class="row">
				<div class="col-7">
					<div class="row">
						<div class="col-6">
							<img src="gambar/4.jpeg" width="105%" height="47%" class="mb-1">
							<img src="gambar/toget.jpeg" width="105%" height="47%">
						</div>
						<div class="col-6">
								<img src="gambar/3.jpeg" width="100%" height="47%" class="mb-1">
								<img src="gambar/phi.jpeg" width="100%" >
						</div>
					</div>
				</div>
				<div class="col-5">
					<i><h3>Discover</h3></i>
					<h2>WISUDA TAHUN 2019</h2>
					<p>Sebanyak 1056 mahasiswa Polinema (Politeknik Negeri Malang) diwisuda, 
						Sabtu (28/9/2019) pagi di Gedung Graha Polinema. Dengan bekal selama 
						menempuh perkuliahan, diharapkan lulusan ini nantinya bisa mandiri 
						dan sukses di kehidupan bermasyarakat.Menginggat para alumni-alumni 
						sebelumnya sangat banyak yang sukses di perusahaan-perusahaan BUMN 
						dan juga perusahaan-perusahaan besar lainnya di Indonesia. Apalagi selama 
						ini Polinema juga menjaga hubungan kerjasama yang baik dengan perusahaan-
						perusahaan besar yang telah mempercayai kehebatan lulusan Polinema.</p>	

						<a class="btn btn-primary" href="">Read More</a>
				</div>
			</div>
		</div>
	</section>

	<section id="photo">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>SLIDE PHOTO</h1>
					<p>Berbagai foto dari alumni mahasiswa Politeknik Negeri Malang angkatan 2015 
						untuk mengenang masa-masa ketika kuliah dahulu</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel owl-theme">
						<div class="item"><img src="gambar/1.jpeg"></div>
						<div class="item"><img src="gambar/4.jpeg"></div>
						<div class="item"><img src="gambar/phi.jpeg"></div>
						<div class="item"><img src="gambar/toget.jpeg"></div>
						<div class="item"><img src="gambar/4.jpeg"></div>
					</div>			
				</div>
			</div>
			<center><a class="btn btn-info mt-4 px-5 py-2" href="">GALERI</a></center>
		</div>
	</section>
 
	 <footer>
		<div class="container">
			<div class="row">
				<div class="col-4">
					<h6>PHONE</h6>
					<p>08563204379</p>
				</div>
				<div class="col-4">
					<h6>EMAIL</h6>
					<p>much.faadlil@gmail.com</p>
				</div>
				<div class="col-4">
					<h6>FOLLOW ME</h6>
					<a class="social" href="#"><i class="fab fa-facebook-square"></i></a>
					<a class="social" href="#"><i class="fab fa-instagram"></i></a>
					<a class="social" href="#"><i class="fab fa-linkedin"></i></a>
					<a class="social" href="#"><i class="fab fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</footer> 


	<script src="assets/vendors/jquery.min.js"></script>
	<script src="assets/owlcarousel/owl.carousel.min.js"></script>
	<script type="text/javascript">
			$('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					1000:{
						items:5
					}
				},
				autoplay:true,
				autoplayHoverPause:true
			})
		</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>