<?php
  $data = file_get_contents('https://www.themealdb.com/api/json/v1/1/random.php');
  $menu = json_decode($data, true);

  // var_dump($menu["meals"][0]["strMeal"]);
  // var_dump($menu);

  $menu = $menu["meals"];

  // echo $menu[0]["strMeal"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/icon/favicon.ico">

    <!-- main.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/all.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Wilayah Dapur</title>
  </head>
  <body style="background-color: #273036;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ml-auto">
      <div class="container">  
        <a class="navbar-brand judul-navbar" href="#">Wilayah Dapur</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">/<span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link pe-4 active fa-brands" aria-current="page" href="/wilayah-dapur/"><i class="fas fa-home"></i> Home</a>
            <a class="nav-link pe-4" aria-current="page" href="/wilayah-dapur/kategori"><i class="fas fa-utensils"></i> Kategori</a>
            <a class="nav-link" aria-current="page" href="/wilayah-dapur/about"><i class="fas fa-user"></i> About</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <h1 class="text-center text-white" data-aos="zoom-in"><i>Resep Acak</i></h1>
        </div>
      </div>
    </div>
    <div class="container" data-aos="zoom-in-down" data-aos-duration="1000">
      <div class="row mt-5">
        <div class="card awal rounded-pill text-center"> <!-- style="width: 18rem;" -->
          <img data-aos="zoom-out-down" data-aos-duration="1000" src="<?php echo $menu[0]['strMealThumb'] ?>" alt="<?php echo $menu[0]['strMeal'] ?>" width="200" class="mx-auto d-block rounded-circle img-thumbnail"> <!-- class="card-img-top" -->
          <div class="card-body">
            <h2 class="card-title mt-2">Resep <?php echo $menu[0]['strMeal'] ?></h2>
            <!-- <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded-3 text-start">
              <h6 class="text-center">Cara Memasak</h6>
              <?php echo $menu[0]['strInstructions'] ?>
            </div> -->
            <div class="row justify-content-center">
              <!-- <a href="#" class="btn btn-primary">Baca Intruksi</a> -->
              <div class="col-md-2 p-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#caraMemasak">Cara Memasak</button>
              </div>
              <!-- Button trigger modal -->
              <div class="col-md-2 p-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bahanBahan">Baca Bahan-bahan</button>
              </div>
            </div>
            <div class="row justify-content-center p-2">
              <div class="col-md-5">
                <a href="<?php echo $menu[0]['strYoutube']?>" target="_blank" class="btn btn-danger" role="button" aria-pressed="true">Tonton Video Tutorialnya</a>
              </div>
            </div>

            <!-- Modal 1 -->
            <div class="modal fade" id="bahanBahan" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Bahan-bahan:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p class="card-text">1. <?php echo $menu[0]['strIngredient1'] ?> | <?php echo $menu[0]['strMeasure1'] ?></p>
                    <p class="card-text">2. <?php echo $menu[0]['strIngredient2'] ?> | <?php echo $menu[0]['strMeasure2'] ?></p>
                    <p class="card-text">3. <?php echo $menu[0]['strIngredient3'] ?> | <?php echo $menu[0]['strMeasure3'] ?></p>
                    <p class="card-text">4. <?php echo $menu[0]['strIngredient4'] ?> | <?php echo $menu[0]['strMeasure4'] ?></p>
                    <p class="card-text">5. <?php echo $menu[0]['strIngredient5'] ?> | <?php echo $menu[0]['strMeasure5'] ?></p>
                    <p class="card-text">6. <?php echo $menu[0]['strIngredient6'] ?> | <?php echo $menu[0]['strMeasure6'] ?></p>
                    <p class="card-text">7. <?php echo $menu[0]['strIngredient7'] ?> | <?php echo $menu[0]['strMeasure7'] ?></p>
                    <p class="card-text">8. <?php echo $menu[0]['strIngredient8'] ?> | <?php echo $menu[0]['strMeasure8'] ?></p>
                    <p class="card-text">9. <?php echo $menu[0]['strIngredient9'] ?> | <?php echo $menu[0]['strMeasure9'] ?></p>
                    <p class="card-text">10. <?php echo $menu[0]['strIngredient10'] ?> | <?php echo $menu[0]['strMeasure10'] ?></p>
                    <p class="card-text">11. <?php echo $menu[0]['strIngredient11'] ?> | <?php echo $menu[0]['strMeasure11'] ?></p>
                    <p class="card-text">12. <?php echo $menu[0]['strIngredient12'] ?> | <?php echo $menu[0]['strMeasure12'] ?></p>
                    <p class="card-text">13. <?php echo $menu[0]['strIngredient13'] ?> | <?php echo $menu[0]['strMeasure13'] ?></p>
                    <p class="card-text">14. <?php echo $menu[0]['strIngredient14'] ?> | <?php echo $menu[0]['strMeasure14'] ?></p>
                    <p class="card-text">15. <?php echo $menu[0]['strIngredient15'] ?> | <?php echo $menu[0]['strMeasure15'] ?></p>
                    <p class="card-text">16. <?php echo $menu[0]['strIngredient16'] ?> | <?php echo $menu[0]['strMeasure16'] ?></p>
                    <p class="card-text">17. <?php echo $menu[0]['strIngredient17'] ?> | <?php echo $menu[0]['strMeasure17'] ?></p>
                    <p class="card-text">18. <?php echo $menu[0]['strIngredient18'] ?> | <?php echo $menu[0]['strMeasure18'] ?></p>
                    <p class="card-text">19. <?php echo $menu[0]['strIngredient19'] ?> | <?php echo $menu[0]['strMeasure19'] ?></p>
                    <p class="card-text">20. <?php echo $menu[0]['strIngredient20'] ?> | <?php echo $menu[0]['strMeasure20'] ?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Oke, saya Mengerti.</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end modal 1 -->

            <!-- modal 2 -->
            <div class="modal fade" id="caraMemasak" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cara Memasak:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p><?php echo $menu[0]['strInstructions'] ?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Oke, saya Mengerti.</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end modal 2 -->

          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="0000000" fill-opacity="1" d="M0,256L60,261.3C120,267,240,277,360,261.3C480,245,600,203,720,202.7C840,203,960,245,1080,272C1200,299,1320,309,1380,314.7L1440,320L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    <footer class="text-white text-center pb-5">
      <p>Dibuat dengan <i class="bi bi-suit-heart-fill"></i> di Gresik</p>
    </footer>
    
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
<!-- 
<script type="text/javascript">
  const data = []
  for (meal in meals) {
      if (meal.includes('strIngredient')) {
          data.push(meals[meal])
          document.write(meal);
     }
  }
</script> -->