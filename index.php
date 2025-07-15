<?php session_start();?>

<?php 
    if (isset($_SESSION['alert'])) {
        $alert = $_SESSION['alert'];
        // Display alert using JavaScript or HTML
        echo "<script>alert('{$alert['message']}');</script>";
        unset($_SESSION['alert']); // Clear the alert after displaying
    }
  ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeri Baca</title>
  <link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>

<body style="background-color: rgb(243, 243, 243);">
  <?php include 'components/navbar.php'; ?>



  <section class="hero">
    <div class="container">
      <h1 class="display-4">Selamat Datang di Galeri Baca</h1>
      <p class="lead">Temukan beragam bacaan dan fandom favoritmu di satu tempat!</p>
      <a href="Jelajahi.php" class="btn" style="background-color: #b8b0dd;">Jelajahi Sekarang</a>
    </div>
  </section>

  <!-- Card Section -->
  <div class="container my-5">
    <h2 class="mb-4 text-center">Rekomendasi Bacaan</h2>
    <div class="row g-4">
      <!-- Kartu 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card shadow">
          <img src="assets/img/camellya.jfif" class="card-img-top" alt="Camellia">
          <div class="card-body">
            <h5 class="card-title"><b>Fallen Angel</b></h5>
            <p class="card-text" style="text-align: justify;">Bloom Bearer from the Black Shores, Camellya is a
              laid-back character free from
              shackles, with her personal aroma of "danger."
              Intrigued by the belief in fate, she wanders the lands of her own accord, following such a chain of
              scenarios and its vague guidance</p>
            <a href="synopsis.php" class="btn" style="background-color: #b8b0dd;">Baca Sekarang</a>
          </div>
        </div>
      </div>

      <!-- Kartu 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm">
          <img src="assets/img/wallpaperflare.com_wallpaper.jpg" class="card-img-top" alt="Shorekeeper">
          <div class="card-body">
            <h5 class="card-title"><b>Guardian of Secrets</b></h5>
            <p class="card-text" style="text-align: justify;">The Shorekeeper of the Black Shores, a mysterious divine
              being governing the essence of
              aloofness, emerges in response to your summon. Having spent eons in guardianship, the first stirrings of
              emotion and desire awaken within her heart, fostering a firm determination to connect with the world — and
              with you.</p>
            <a href="#" class="btn" style="background-color: #b8b0dd;">Baca Sekarang</a>
          </div>
        </div>
      </div>

      <!-- Kartu Tambahan -->
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm">
          <img src="assets/img/cantarella2.jpg" class="card-img-top" alt="Fandom">
          <div class="card-body">
            <h5 class="card-title"><b>Blessed Maiden</b></h5>
            <p class="card-text" style="text-align: justify;">The Fisalia family's thirty-sixth head, Cantarella
              Fisalia.
              She locks your gaze with eyes as deep as the ocean, where dark tides seem to surge and swirl.
              For a moment, you think you glimpse something in the ocean's depths—but you are unsure if it is the shadow
              of a giant sea creature... or the tail feathers of the Celestial Steed</p>
            <a href="#" class="btn" style="background-color: #b8b0dd;">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <nav aria-label="Page navigation example">
    <ul class="pagination" style="justify-content: center;">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">...</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>

  <?php include 'components/footer.php' ?>
</body>

</html>