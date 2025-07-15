<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jelajahi - Galeri Baca</title>
  <link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>

<body style="background-color: rgb(243, 243, 243);">
  <?php include 'components/navbar.php'; ?>

  <section class="hero">
    <div class="container">
      <h1 class="display-4">Jelajahi Galeri Baca</h1>
      <p class="lead">Temukan karya dari berbagai kategori dan fandom</p>
      <div class="mt-4">
        <form class="d-flex justify-content-center">
          <div class="input-group" style="max-width: 600px;">
            <input class="form-control" type="search" placeholder="Cari karya" aria-label="Search">
            <button class="btn" style="background-color: #b8b0dd;" type="submit">Cari</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <div class="container my-5">
    <!-- Browse by Fandom Category -->
    <div class="browse-section">
      <h2 class="browse-title">Jelajahi Berdasarkan Kategori Fandom</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <ul class="list-unstyled">
            <li><a href="#" class="browse-link">Anime & Manga (12,453)</a></li>
            <li><a href="#" class="browse-link">Buku & Literatur (8,721)</a></li>
            <li><a href="#" class="browse-link">Kartun & Komik (5,642)</a></li>
            <li><a href="#" class="browse-link">Selebriti & RPF (3,125)</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-unstyled">
            <li><a href="#" class="browse-link">Film (9,874)</a></li>
            <li><a href="#" class="browse-link">Musik & Band (4,521)</a></li>
            <li><a href="#" class="browse-link">Mitologi & Dongeng (3,842)</a></li>
            <li><a href="#" class="browse-link">TV Shows (10,763)</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-unstyled">
            <li><a href="#" class="browse-link">Tokoh Sejarah (1,245)</a></li>
            <li><a href="#" class="browse-link">Theater (987)</a></li>
            <li><a href="#" class="browse-link">Video Game (7,654)</a></li>
            <li><a href="#" class="browse-link">Lainnya (2,345)</a></li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="#" class="btn" style="background-color: #b8b0dd;">Lihat Semua Kategori</a>
      </div>
    </div>

    <!-- Browse by Fandoms -->
    <div class="browse-section">
      <h2 class="browse-title">Fandom Populer</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <h5>Anime & Manga</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="browse-link">Attack On Titan (3,254)</a></li>
            <li><a href="#" class="browse-link">Eleceed (1,234)</a></li>
            <li><a href="#" class="browse-link">Omniscient Reader Viewpoint (2,178)</a></li>
            <li><a href="#" class="browse-link">One Piece (4,532)</a></li>
            <li><a href="#" class="browse-link">Overlord (1,876)</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>TV Shows</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="browse-link">Marvel (3,654)</a></li>
            <li><a href="#" class="browse-link">Percy Jackson and the Olympians (2,134)</a></li>
            <li><a href="#" class="browse-link">Supernatural (3,987)</a></li>
            <li><a href="#" class="browse-link">The Witcher (1,876)</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Video Game</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="browse-link">Genshin Impact (4,321)</a></li>
            <li><a href="#" class="browse-link">Son Of The Forest (987)</a></li>
            <li><a href="#" class="browse-link">The Forest (1,234)</a></li>
            <li><a href="#" class="browse-link">Wuthering Wave (2,345)</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Browse by Tags -->
    <div class="browse-section">
      <h2 class="browse-title">Jelajahi Berdasarkan Tag</h2>
      <div class="tag-cloud p-4">
        <a href="#" class="tag-item">Romance</a>
        <a href="#" class="tag-item">Adventure</a>
        <a href="#" class="tag-item">Fantasy</a>
        <a href="#" class="tag-item">Angst</a>
        <a href="#" class="tag-item">Fluff</a>
        <a href="#" class="tag-item">Hurt/Comfort</a>
        <a href="#" class="tag-item">Slow Burn</a>
        <a href="#" class="tag-item">Action</a>
        <a href="#" class="tag-item">Mystery</a>
        <a href="#" class="tag-item">Friendship</a>
        <a href="#" class="tag-item">Drama</a>
        <a href="#" class="tag-item">Supernatural</a>
        <a href="#" class="tag-item">Alternate Universe</a>
        <a href="#" class="tag-item">Comedy</a>
        <a href="#" class="tag-item">Family</a>
        <a href="#" class="tag-item">Horror</a>
        <a href="#" class="tag-item">Sci-Fi</a>
        <a href="#" class="tag-item">Time Travel</a>
        <a href="#" class="tag-item">Coming of Age</a>
        <a href="#" class="tag-item">Historical</a>
      </div>
      <div class="text-center mt-4">
        <a href="#" class="btn" style="background-color: #b8b0dd;">Lihat Semua Tag</a>
      </div>
    </div>

    <!-- Browse by Other Criteria -->
    <div class="browse-section">
      <h2 class="browse-title">Jelajahi Berdasarkan Kriteria Lain</h2>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Berdasarkan Rating</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" class="browse-link">Umum (12,453)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Remaja (8,721)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Dewasa (5,642)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Tidak Dirating (3,125)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Berdasarkan Status</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" class="browse-link">Selesai (32,453)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Dalam Proses (18,721)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Hiatus (5,642)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Dibatalkan (1,125)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Berdasarkan Panjang</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" class="browse-link">Flash Fiction (< 1000 kata) (5,453)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Cerita Pendek (1,000-7,500 kata) (8,721)</a>
                </li>
                <li class="list-group-item"><a href="#" class="browse-link">Novella (7,500-40,000 kata) (5,642)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Novel (> 40,000 kata) (3,125)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Berdasarkan Bahasa</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" class="browse-link">Indonesia (12,453)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Inggris (8,721)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Jepang (2,642)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Korea (1,125)</a></li>
                <li class="list-group-item"><a href="#" class="browse-link">Bahasa Lainnya (3,289)</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Recently Added Works -->
    <div class="browse-section">
      <h2 class="browse-title">Karya Terbaru</h2>
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Fallen Angel: Rebirth</h5>
            <small>3 jam yang lalu</small>
          </div>
          <p class="mb-1">Petualangan Camellya yang baru dimulai ketika ia menemukan arti sebenarnya dari takdir.</p>
          <small>Oleh: AuthorSakura | Fandom: Wuthering Wave | Tag: Adventure, Fantasy</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">The Last Guardian</h5>
            <small>5 jam yang lalu</small>
          </div>
          <p class="mb-1">Kisah penuh misteri tentang penjaga terakhir dari rahasia kuno yang terpendam.</p>
          <small>Oleh: MoonWriter | Fandom: Original Work | Tag: Mystery, Supernatural</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Under the Stars</h5>
            <small>8 jam yang lalu</small>
          </div>
          <p class="mb-1">Pertemuan dua jiwa di bawah langit berbintang yang mengubah takdir mereka selamanya.</p>
          <small>Oleh: StarGazer | Fandom: Romance | Tag: Romance, Drama</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Blessed Maiden's Journey</h5>
            <small>12 jam yang lalu</small>
          </div>
          <p class="mb-1">Kisah perjalanan Cantarella Fisalia dalam menemukan arti sebenarnya dari berkah yang
            dimilikinya.</p>
          <small>Oleh: OceanDreamer | Fandom: Fantasy | Tag: Adventure, Coming of Age</small>
        </a>
      </div>
      <div class="text-center mt-4">
        <a href="#" class="btn" style="background-color: #b8b0dd;">Lihat Lebih Banyak</a>
      </div>
    </div>
  </div>

  <!-- Footer -->
   <?php include 'components/footer.php' ?>

  <script>
    // Script untuk menangani dropdown submenu
    document.addEventListener('DOMContentLoaded', function () {
      // Tambahkan event listener untuk dropdown submenu
      var dropdownSubmenus = document.querySelectorAll('.dropdown-submenu > a');
      dropdownSubmenus.forEach(function (element) {
        element.addEventListener('click', function (e) {
          e.preventDefault();
          e.stopPropagation();
          var submenu = this.nextElementSibling;
          if (submenu.style.display === 'block') {
            submenu.style.display = 'none';
          } else {
            submenu.style.display = 'block';
          }
        });
      });
    });
  </script>
</body>

</html>