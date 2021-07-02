<?php
  $data = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Breakfast');
  $breakfast = json_decode($data, true);

  //var_dump($category["categories"][0]["strCategory"]);

  $breakfast = $breakfast["meals"];

  //echo $beef[0]["strMeal"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/icon/favicon.ico">

    <!-- main.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/all.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Wilayah Dapur | Kategori : Breakfast</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">  
        <a class="navbar-brand judul-navbar" href="#">Wilayah Dapur</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">/<span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link pe-4" aria-current="page" href="/wilayah-dapur/"><i class="fas fa-home"></i> Home</a>
            <a class="nav-link pe-4 active" aria-current="page" href="/wilayah-dapur/kategori"><i class="fas fa-utensils"></i> Kategori</a>
            <a class="nav-link" aria-current="page" href="/wilayah-dapur/about"><i class="fas fa-user"></i> About</a>

          </div>
        </div>
      </div>
    </nav>
    
    <div class="container">
    	<div class="row mt-3 mb-3 pt-2">
    		<div class="col judul text-center" data-aos="zoom-in-down" data-aos-duration="2000">
    			<h1><i>Kategori : Breakfast</i></h1>
    		</div>
    	</div>
    	<div class="row justify-content-evenly">
    		<?php foreach ($breakfast as $row) : ?>
	    	<div class="col-md-4 d-flex align-items-stretch" data-aos="zoom-in-down" data-aos-duration="1000">
	    		<div class="card text-center mb-4">  <!-- style="width: 18rem; -->
  				  <img src="<?php echo $row["strMealThumb"];?>" class="card-img-top" alt="<?php echo $row["strMeal"];?>">
  				  <div class="card-body">
  				    <h5 class="card-title"><?php echo $row["strMeal"];?></h5>
  				    <p class="card-text">Tertarik untuk membuat <?php echo $row["strMeal"];?>? Baca resepnya sekarang juga!</p>
              <a href="https://www.themealdb.com/meal/<?php echo $row["idMeal"];?>" target="_blank" class="btn btn-primary">Baca Resep>></a>
  				  </div>
  				</div>
	    	</div>
	    	<?php endforeach; ?>
    	</div>
    </div>
    <div data-aos="fade-up" data-aos-duration="3000">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="0000000" fill-opacity="1" d="M0,256L60,261.3C120,267,240,277,360,261.3C480,245,600,203,720,202.7C840,203,960,245,1080,272C1200,299,1320,309,1380,314.7L1440,320L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
      <footer class="text-white text-center pb-5">
        <p>Dibuat dengan <i class="bi bi-suit-heart-fill"></i> di Gresik</p>
      </footer>
    </div>

    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
  </body>
</html>