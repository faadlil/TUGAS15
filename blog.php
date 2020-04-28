<?php 

require 'connect.php';
session_start();

$sql = "SELECT * FROM blogs";
$result = $conn -> query($sql);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top mt-0 "> 
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
					<?php 

					if ($_SESSION && $_SESSION['status']=='login') {
						?>
						<a class="btn btn-success" href="backend/logout.php">Logout</a>

						<?php
					}else { ?>
						<li class="nav-item ml-5">
							<a class="btn btn-success" href="login.php">Login</a>
						</li>

						<?php
					}
					?>
				</ul>
			</div>
		</div>
    </nav>

    <section id="blog">
		<div class="container">
			<div class="row">
            <?php  

if ($result->num_rows > 0) {
    while ($row = $result -> fetch_assoc()) { ?>
        
        <div class="col-md-3">
    <div class="card">
        <img src="<?php echo $row['image']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo substr($row['content'],0,50) ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

        <?php
    }
}

?>
			</div>
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

    <script>
        $(document).scroll(function () {
            var nav = $("#navbar");
            nav.toggleClass('scrolled', $(this).scrollTop() > nav.height());
        });
    </script>
    
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>