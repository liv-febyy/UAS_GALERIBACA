<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeri Baca - Fallen Angel</title>
  <link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>

<body>
  <?php include 'components/navbar.php'; ?>

  <!-- Book Header Section -->
  <section class="book-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 text-center text-md-start">
          <img src="assets/img/camellya.jfif" alt="Fallen Angel Book Cover" class="book-cover">
        </div>
        <div class="col-md-9">
          <h1 class="book-title">Fallen Angel</h1>
          <div class="book-author">
            <i class="fas fa-feather-alt me-2"></i>Ariel Nakamura
          </div>

          <div class="book-badges">
            <span class="book-badge"><i class="fas fa-globe me-1"></i> Fantasy</span>
            <span class="book-badge"><i class="fas fa-dragon me-1"></i> Adventure</span>
            <span class="book-badge"><i class="fas fa-heart me-1"></i> Romance</span>
          </div>

          <div class="book-meta">
            <div class="meta-item">
              <i class="fas fa-star"></i>
              <span>4.8</span>
              <div class="rating-stars">
                ★★★★★
              </div>
              <span>(245 ulasan)</span>
            </div>
            <div class="meta-item">
              <i class="fas fa-book-open me-1"></i>
              <span>78 Bab</span>
            </div>
            <div class="meta-item">
              <i class="fas fa-eye me-1"></i>
              <span>24.5K Dibaca</span>
            </div>
            <div class="meta-item">
              <i class="fas fa-bookmark me-1"></i>
              <span>5.8K Ditandai</span>
            </div>
          </div>

          <div class="action-buttons">
            <a href="reading.html" class="main-btn">
              <i class="fas fa-book-reader"></i>
              Mulai Membaca
            </a>
            <button class="outline-btn">
              <i class="fas fa-bookmark"></i>
              Tambahkan ke Pustaka
            </button>
            <button class="outline-btn">
              <i class="fas fa-share-alt"></i>
              Bagikan
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- Synopsis Section -->
        <section class="synopsis-section">
          <h2 class="section-title">
            <i class="fas fa-feather-alt me-2"></i>Sinopsis
          </h2>
          <div class="synopsis-text">
            <p>Bloom Bearer from the Black Shores, Camellya adalah sosok santai yang terbebas dari belenggu, dengan aroma pribadi "bahaya" yang khas.</p>

            <p>Tertarik oleh kepercayaan akan takdir, dia mengembara di berbagai belahan dunia mengikuti rantai skenario dan tuntunan samarnya. Perjalanannya membawanya ke tempat-tempat yang tak pernah terbayangkan sebelumnya, berhadapan dengan kekuatan kuno yang mengancam keseimbangan dunia.</p>

            <p>Sebagai seorang Fallen Angel, Camellya menyimpan rahasia gelap tentang masa lalunya. Sayapnya yang dulunya bersinar keemasan kini menghitam akibat pengkhianatan yang membuatnya terusir dari Surga. Namun takdir rupanya memiliki rencana lain untuknya.</p>

            <p>Ketika bertemu dengan seorang penjaga rahasia bernama Shorekeeper, dunia Camellya berubah selamanya. Keduanya terikat dalam ramalan kuno yang meramalkan kehancuran atau penyelamatan untuk seluruh alam semesta. Bersama, mereka harus menghadapi pasukan kegelapan yang dipimpin oleh sosok misterius dari masa lalu Camellya.</p>

            <p>Di tengah pertempuran antara cahaya dan kegelapan, Camellya harus menghadapi pilihan sulit: melindungi cinta barunya atau memenuhi takdirnya sebagai Fallen Angel yang akan menentukan nasib dunia.</p>

            <p>"Fallen Angel" adalah kisah epik tentang penebusan, kekuatan pilihan, dan bagaimana cinta dapat muncul bahkan di tempat paling gelap sekalipun.</p>
          </div>
        </section>

        <!-- Table of Contents -->
        <section id="chapters" class="table-of-contents">
          <h2 class="section-title">
            <i class="fas fa-list me-2"></i>Daftar Bab
          </h2>

          <div class="mb-3">
            <label for="chapter-sort" class="form-label">Urutan:</label>
            <select class="form-select" id="chapter-sort" style="width: auto;">
              <option value="newest">Terbaru Dulu</option>
              <option value="oldest" selected>Terlama Dulu</option>
            </select>
          </div>

          <div class="chapter-list">
            <div class="chapter-item">
              <a href="#" class="chapter-link">Bab 1: Sang Malaikat yang Jatuh</a>
              <div class="chapter-date">28 Feb 2025</div>
            </div>
            <div class="chapter-item">
              <a href="#" class="chapter-link">Bab 2: Pertemuan Pertama</a>
              <div class="chapter-date">1 Mar 2025</div>
            </div>
            <div class="chapter-item">
              <a href="#" class="chapter-link">Bab 3: Rahasia Pantai Hitam</a>
              <div class="chapter-date">3 Mar 2025</div>
            </div>
            <div class="chapter-item">
              <a href="#" class="chapter-link">Bab 4: Penjaga dan Ramalan</a>
              <div class="chapter-date">5 Mar 2025</div>
            </div>
            <div class="chapter-item">
              <a href="#" class="chapter-link">Bab 5: Bayangan dari Masa Lalu</a>
              <div class="chapter-date">8 Mar 2025</div>
            </div>
            <div class="chapter-item">
              <a href="#" class="chapter-link">Bab 6: Kekuatan Tersembunyi</a>
              <div class="chapter-date">10 Mar 2025</div>
            </div>
            <div class="chapter-item">
              <a href="#" class="chapter-link">Bab 7: Serangan Pertama</a>
              <div class="chapter-date">13 Mar 2025</div>
            </div>
            <div class="chapter-item">
              <a href="#" class="chapter-link">Bab 8: Pengakuan</a>
              <div class="chapter-date">15 Mar 2025</div>
            </div>
          </div>

          <nav aria-label="Chapter navigation" class="mt-4">
            <ul class="pagination justify-content-center">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">10</a></li>
            </ul>
          </nav>
        </section>
      </div>

      <div class="col-lg-4">
        <!-- Stats Section -->
        <section class="sidebar-section">
          <h3 class="section-title">
            <i class="fas fa-chart-line me-2"></i>Statistik
          </h3>
          <div class="stats-grid">
            <div class="stat-card">
              <div class="stat-value">78</div>
              <div class="stat-label">Total Bab</div>
            </div>
            <div class="stat-card">
              <div class="stat-value">460K</div>
              <div class="stat-label">Total Kata</div>
            </div>
            <div class="stat-card">
              <div class="stat-value">2x</div>
              <div class="stat-label">Per Minggu</div>
            </div>
            <div class="stat-card">
              <div class="stat-value">4.8</div>
              <div class="stat-label">Rating</div>
            </div>
          </div>
        </section>

        <!-- Tags Section -->
        <section class="sidebar-section">
          <h3 class="section-title">
            <i class="fas fa-tags me-2"></i>Tag & Kategori
          </h3>
          <div class="tag-cloud">
            <span class="tag">Fantasy</span>
            <span class="tag">Adventure</span>
            <span class="tag">Romance</span>
            <span class="tag">Supernatural</span>
            <span class="tag">Magic</span>
            <span class="tag">Angel</span>
            <span class="tag">Mythology</span>
            <span class="tag">Action</span>
          </div>
        </section>

        <!-- Reading Progress for Logged-in Users -->
        <section class="sidebar-section">
          <h3 class="section-title">
            <i class="fas fa-tasks me-2"></i>Progress Membaca
          </h3>
          <div class="mb-2">
            <strong>Membaca Bab 8 dari 78</strong>
            <div class="progress reading-progress">
              <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #b8b0dd;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <span>10% selesai</span>
          </div>
          <div class="mt-3">
            <a href="#" class="btn btn-sm w-100" style="background-color: #b8b0dd;">
              <i class="fas fa-book-reader me-2"></i>Lanjutkan Membaca
            </a>
          </div>
        </section>

        <!-- Similar Books Section -->
        <section class="sidebar-section">
          <h3 class="section-title">
            <i class="fas fa-book me-2"></i>Rekomendasi Serupa
          </h3>
          <div class="similar-books">
            <div class="similar-book">
              <img src="assets/img/wallpaperflare.com_wallpaper.jpg" alt="Guardian of Secrets" class="similar-cover">
              <div class="similar-info">
                <div class="similar-title">Guardian of Secrets</div>
                <div class="similar-author">Rei Kazama</div>
                <div class="small mt-1">
                  <i class="fas fa-star" style="color: gold;"></i> 4.6
                </div>
              </div>
            </div>
            <div class="similar-book">
              <img src="assets/img/cantarella2.jpg" alt="Blessed Maiden" class="similar-cover">
              <div class="similar-info">
                <div class="similar-title">Blessed Maiden</div>
                <div class="similar-author">Hana Kazemaru</div>
                <div class="small mt-1">
                  <i class="fas fa-star" style="color: gold;"></i> 4.7
                </div>
              </div>
            </div>
            <div class="similar-book mt-3">
              <img src="assets/img/camellya.jfif" alt="Wings of Destiny" class="similar-cover">
              <div class="similar-info">
                <div class="similar-title">Wings of Destiny</div>
                <div class="similar-author">Lena Miyamoto</div>
                <div class="small mt-1">
                  <i class="fas fa-star" style="color: gold;"></i> 4.5
                </div>
              </div>
            </div>
            <div class="similar-book mt-3">
              <img src="assets/img/cantarella2.jpg" alt="Dark Tides" class="similar-cover">
              <div class="similar-info">
                <div class="similar-title">Dark Tides</div>
                <div class="similar-author">Yuki Tanaka</div>
                <div class="small mt-1">
                  <i class="fas fa-star" style="color: gold;"></i> 4.4
                </div>
              </div>
            </div>
          </div>
          <div class="mt-3">
            <a href="#" class="btn btn-sm w-100" style="background-color: #b8b0dd;">
              <i class="fas fa-book-open me-2"></i>Lihat Lebih Banyak
            </a>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- Comments Section -->
  <div class="container mb-5">
    <div class="row">
      <div class="col-lg-8">
        <section class="synopsis-section">
          <h2 class="section-title">
            <i class="fas fa-comments me-2"></i>Komentar & Ulasan
          </h2>

          <div class="mb-4">
            <div class="d-flex justify-content-between mb-3">
              <h4>Berikan Ulasan</h4>
              <div class="rating-input">
                <i class="fas fa-star" style="color: gold;"></i>
                <i class="fas fa-star" style="color: gold;"></i>
                <i class="fas fa-star" style="color: gold;"></i>
                <i class="fas fa-star" style="color: gold;"></i>
                <i class="fas fa-star" style="color: #ccc;"></i>
              </div>
            </div>
            <textarea class="form-control mb-2" rows="3" placeholder="Tulis komentar atau ulasanmu di sini..."></textarea>
            <button class="btn" style="background-color: #b8b0dd;">Kirim Ulasan</button>
          </div>

          <div class="comments-list">
            <div class="card mb-3">
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <h5 class="card-title">Risa Tanaka</h5>
                  <div class="rating-stars">★★★★★</div>
                </div>
                <h6 class="card-subtitle mb-2 text-muted">2 hari yang lalu</h6>
                <p class="card-text">Cerita ini luar biasa! Karakter Camellya begitu dalam dan kompleks. Aku suka bagaimana penulis menggambarkan konflik batin yang dialaminya sebagai malaikat jatuh. Tidak sabar menunggu bab selanjutnya!</p>
                <button class="btn btn-sm text-muted"><i class="fas fa-thumbs-up me-1"></i> 24</button>
                <button class="btn btn-sm text-muted"><i class="fas fa-reply me-1"></i> Balas</button>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <h5 class="card-title">Andi Wijaya</h5>
                  <div class="rating-stars">★★★★☆</div>
                </div>
                <h6 class="card-subtitle mb-2 text-muted">1 minggu yang lalu</h6>
                <p class="card-text">Alur ceritanya mengagumkan dan deskripsi tempat-tempat yang dikunjungi Camellya sangat mendetail. Saya merasa seperti benar-benar berada di sana. Namun, saya merasa perkembangan hubungan dengan Shorekeeper sedikit terburu-buru. Tetap cerita yang sangat bagus!</p>
                <button class="btn btn-sm text-muted"><i class="fas fa-thumbs-up me-1"></i> 16</button>
                    <button class="btn btn-sm text-muted"><i class="fas fa-thumbs-up me-1"></i> 16</button>
                <button class="btn btn-sm text-muted"><i class="fas fa-reply me-1"></i> Balas</button>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <h5 class="card-title">Maya Putri</h5>
                  <div class="rating-stars">★★★★★</div>
                </div>
                <h6 class="card-subtitle mb-2 text-muted">2 minggu yang lalu</h6>
                <p class="card-text">Novel fantasi terbaik yang pernah saya baca tahun ini! Ariel Nakamura benar-benar pandai membangun dunia dengan mitologi yang kaya. Bagian favorit saya adalah ketika Camellya akhirnya mengungkapkan masa lalunya di Bab 8. Momen yang sangat emosional!</p>
                <button class="btn btn-sm text-muted"><i class="fas fa-thumbs-up me-1"></i> 32</button>
                <button class="btn btn-sm text-muted"><i class="fas fa-reply me-1"></i> Balas</button>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <h5 class="card-title">Budi Santoso</h5>
                  <div class="rating-stars">★★★☆☆</div>
                </div>
                <h6 class="card-subtitle mb-2 text-muted">3 minggu yang lalu</h6>
                <p class="card-text">Ceritanya menarik, tapi saya merasa bagian awal terlalu lambat. Baru mulai seru setelah Bab 3. Namun, deskripsi pertarungan sangat bagus dan membuat tegang!</p>
                <button class="btn btn-sm text-muted"><i class="fas fa-thumbs-up me-1"></i> 7</button>
                <button class="btn btn-sm text-muted"><i class="fas fa-reply me-1"></i> Balas</button>
              </div>
            </div>
          </div>

          <nav aria-label="Comments navigation" class="mt-4">
            <ul class="pagination justify-content-center">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </section>
      </div>
    </div>
  </div>

  <?php include 'components/footer2.php' ?>

  <script>
      // Chapter sorting functionality
      document.getElementById('chapter-sort').addEventListener('change', function () {
        var chapterItems = document.querySelectorAll('.chapter-item');
        var chapterList = document.querySelector('.chapter-list');
        
        // Convert NodeList to Array for easier manipulation
        var chaptersArray = Array.from(chapterItems);
        
        if (this.value === 'newest') {
          // Sort chapters from newest to oldest
          chaptersArray.sort(function(a, b) {
            var dateA = new Date(a.querySelector('.chapter-date').textContent);
            var dateB = new Date(b.querySelector('.chapter-date').textContent);
            return dateB - dateA;
          });
        } else {
          // Sort chapters from oldest to newest
          chaptersArray.sort(function(a, b) {
            var dateA = new Date(a.querySelector('.chapter-date').textContent);
            var dateB = new Date(b.querySelector('.chapter-date').textContent);
            return dateA - dateB;
          });
        }
        
        // Clear the chapter list
        chapterList.innerHTML = '';
        
        // Append the sorted chapters
        chaptersArray.forEach(function(chapter) {
          chapterList.appendChild(chapter);
        });
      });
  </script>
</body>

</html>