<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Koleksi di Arsip - Galeri Baca</title>
<link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  

  <style>
   
  </style>

</head>

<body style="background-color: rgb(243, 243, 243);">
  <?php include 'components/navbar.php'; ?>

  <section class="hero">
    <div class="container">
      <h1 class="display-4">Koleksi di Arsip</h1>
      <p class="lead">Temukan koleksi karya yang dikurasi dengan tema dan genre tertentu</p>
      <div class="mt-4">
        <form class="d-flex justify-content-center">
          <div class="input-group" style="max-width: 600px;">
            <input class="form-control" type="search" placeholder="Cari koleksi" aria-label="Search">
            <button class="btn" style="background-color: #b8b0dd;" type="submit">Cari</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <div class="container my-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="browse.php">Browse</a></li>
        <li class="breadcrumb-item active" aria-current="page">Koleksi di Arsip</li>
      </ol>
    </nav>

    <!-- Filter Section -->
    <div class="filter-section">
      <h5 class="mb-3" style="color: #3e276d;">Filter Koleksi</h5>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label class="form-label">Urutkan berdasarkan:</label>
          <select class="form-select">
            <option selected>Terbaru</option>
            <option>Terlama</option>
            <option>Paling Populer</option>
            <option>Jumlah Karya Terbanyak</option>
            <option>Nama A-Z</option>
            <option>Nama Z-A</option>
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Kategori:</label>
          <select class="form-select">
            <option selected>Semua Kategori</option>
            <option>Romance</option>
            <option>Fantasy</option>
            <option>Action</option>
            <option>Mystery</option>
            <option>Horror</option>
            <option>Sci-Fi</option>
            <option>Drama</option>
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Jumlah Karya:</label>
          <select class="form-select">
            <option selected>Semua</option>
            <option>1-5 karya</option>
            <option>6-15 karya</option>
            <option>16-30 karya</option>
            <option>30+ karya</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Collections Stats -->
    <div class="sort-section">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h6 class="mb-0" style="color: #3e276d;">Menampilkan 1-12 dari 156 koleksi</h6>
        </div>
        <div class="col-md-6 text-end">
          <div class="btn-group" role="group">
            <button type="button" class="btn filter-btn active" id="grid-view">
              <i class="fas fa-th"></i> Grid
            </button>
            <button type="button" class="btn filter-btn" id="list-view">
              <i class="fas fa-list"></i> List
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Collections Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="collections-grid">
      <!-- Collection 1 -->
      <div class="col">
        <div class="card h-100 collection-card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h5 class="card-title">Kisah Fantasi Terbaik</h5>
              <button class="btn btn-sm" style="background-color: #b8b0dd;">
                <i class="fas fa-bookmark"></i>
              </button>
            </div>
            <p class="collection-description">Kumpulan karya fantasi terbaik yang akan membawa Anda ke dunia lain penuh dengan sihir, petualangan, dan makhluk-makhluk mitologis yang menakjubkan.</p>
            <div class="collection-stats">
              <span class="stat-item"><i class="fas fa-book"></i> 15 karya</span>
              <span class="stat-item"><i class="fas fa-heart"></i> 342 suka</span>
              <span class="stat-item"><i class="fas fa-bookmark"></i> 89 bookmark</span>
            </div>
            <div class="mt-3">
              <span class="tag-badge">Fantasy</span>
              <span class="tag-badge">Adventure</span>
              <span class="tag-badge">Magic</span>
            </div>
            <p class="creator-info mt-3 mb-0">
              <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">FantasyLover</a>
            </p>
          </div>
          <div class="card-footer bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">Diperbarui 2 hari yang lalu</small>
              <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Collection 2 -->
      <div class="col">
        <div class="card h-100 collection-card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h5 class="card-title">Mahakarya One Piece</h5>
              <button class="btn btn-sm" style="background-color: #b8b0dd;">
                <i class="fas fa-bookmark"></i>
              </button>
            </div>
            <p class="collection-description">Koleksi fanfiction terbaik dari dunia bajak laut One Piece. Ikuti petualangan Luffy dan kru topi jerami dalam cerita-cerita yang mengagumkan.</p>
            <div class="collection-stats">
              <span class="stat-item"><i class="fas fa-book"></i> 23 karya</span>
              <span class="stat-item"><i class="fas fa-heart"></i> 567 suka</span>
              <span class="stat-item"><i class="fas fa-bookmark"></i> 145 bookmark</span>
            </div>
            <div class="mt-3">
              <span class="tag-badge">One Piece</span>
              <span class="tag-badge">Adventure</span>
              <span class="tag-badge">Action</span>
            </div>
            <p class="creator-info mt-3 mb-0">
              <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">PirateKing</a>
            </p>
          </div>
          <div class="card-footer bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">Diperbarui 3 hari yang lalu</small>
              <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Collection 3 -->
      <div class="col">
        <div class="card h-100 collection-card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h5 class="card-title">Romansa yang Mengharukan</h5>
              <button class="btn btn-sm" style="background-color: #b8b0dd;">
                <i class="fas fa-bookmark"></i>
              </button>
            </div>
            <p class="collection-description">Kisah cinta yang akan membuat Anda terharu dan menitikkan air mata. Koleksi romance terbaik dengan berbagai tema dan setting.</p>
            <div class="collection-stats">
              <span class="stat-item"><i class="fas fa-book"></i> 18 karya</span>
              <span class="stat-item"><i class="fas fa-heart"></i> 789 suka</span>
              <span class="stat-item"><i class="fas fa-bookmark"></i> 234 bookmark</span>
            </div>
            <div class="mt-3">
              <span class="tag-badge">Romance</span>
              <span class="tag-badge">Drama</span>
              <span class="tag-badge">Angst</span>
            </div>
            <p class="creator-info mt-3 mb-0">
              <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">RomanceQueen</a>
            </p>
          </div>
          <div class="card-footer bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">Diperbarui 5 hari yang lalu</small>
              <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Collection 4 -->
      <div class="col">
        <div class="card h-100 collection-card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h5 class="card-title">Misteri Tak Terpecahkan</h5>
              <button class="btn btn-sm" style="background-color: #b8b0dd;">
                <i class="fas fa-bookmark"></i>
              </button>
            </div>
            <p class="collection-description">Kumpulan cerita misteri yang akan membuat Anda berpikir hingga akhir. Teka-teki yang menantang dan plot twist yang mengejutkan.</p>
            <div class="collection-stats">
              <span class="stat-item"><i class="fas fa-book"></i> 12 karya</span>
              <span class="stat-item"><i class="fas fa-heart"></i> 423 suka</span>
              <span class="stat-item"><i class="fas fa-bookmark"></i> 112 bookmark</span>
            </div>
            <div class="mt-3">
              <span class="tag-badge">Mystery</span>
              <span class="tag-badge">Thriller</span>
              <span class="tag-badge">Crime</span>
            </div>
            <p class="creator-info mt-3 mb-0">
              <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">DetectiveMind</a>
            </p>
          </div>
          <div class="card-footer bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">Diperbarui 1 minggu yang lalu</small>
              <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Collection 5 -->
      <div class="col">
        <div class="card h-100 collection-card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h5 class="card-title">Petualangan di Genshin Impact</h5>
              <button class="btn btn-sm" style="background-color: #b8b0dd;">
                <i class="fas fa-bookmark"></i>
              </button>
            </div>
            <p class="collection-description">Kumpulan fanfiction terbaik dari dunia Teyvat. Jelajahi cerita-cerita menakjubkan dengan karakter-karakter favorit Anda.</p>
            <div class="collection-stats">
              <span class="stat-item"><i class="fas fa-book"></i> 20 karya</span>
              <span class="stat-item"><i class="fas fa-heart"></i> 634 suka</span>
              <span class="stat-item"><i class="fas fa-bookmark"></i> 178 bookmark</span>
            </div>
            <div class="mt-3">
              <span class="tag-badge">Genshin Impact</span>
              <span class="tag-badge">Adventure</span>
              <span class="tag-badge">Fantasy</span>
            </div>
            <p class="creator-info mt-3 mb-0">
              <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">TeyvatExplorer</a>
            </p>
          </div>
          <div class="card-footer bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">Diperbarui 1 minggu yang lalu</small>
              <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Collection 6 -->
      <div class="col">
        <div class="card h-100 collection-card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h5 class="card-title">Cerita Horor Indonesia</h5>
              <button class="btn btn-sm" style="background-color: #b8b0dd;">
                <i class="fas fa-bookmark"></i>
              </button>
            </div>
            <p class="collection-description">Kumpulan kisah horor yang mengangkat urban legend Indonesia. Cerita-cerita mencekam dengan nuansa lokal yang kental.</p>
            <div class="collection-stats">
              <span class="stat-item"><i class="fas fa-book"></i> 16 karya</span>
              <span class="stat-item"><i class="fas fa-heart"></i> 298 suka</span>
              <span class="stat-item"><i class="fas fa-bookmark"></i> 87 bookmark</span>
            </div>
            <div class="mt-3">
              <span class="tag-badge">Horror</span>
              <span class="tag-badge">Indonesian</span>
              <span class="tag-badge">Urban Legend</span>
            </div>
            <p class="creator-info mt-3 mb-0">
              <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">MidnightTales</a>
            </p>
          </div>
          <div class="card-footer bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">Diperbarui 2 minggu yang lalu</small>
              <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Collection 7 -->
      <div class="col">
        <div class="card h-100 collection-card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h5 class="card-title">Naruto: Shinobi Chronicles</h5>
              <button class="btn btn-sm" style="background-color: #b8b0dd;">
                <i class="fas fa-bookmark"></i>
              </button>
            </div>
            <p class="collection-description">Koleksi cerita terbaik dari dunia ninja Naruto. Petualangan, persahabatan, dan perjuangan para shinobi dalam berbagai timeline.</p>
            <div class="collection-stats">
              <span class="stat-item"><i class="fas fa-book"></i> 25 karya</span>
              <span class="stat-item"><i class="fas fa-heart"></i> 512 suka</span>
              <span class="stat-item"><i class="fas fa-bookmark"></i> 156 bookmark</span>
            </div>
            <div class="mt-3">
              <span class="tag-badge">Naruto</span>
              <span class="tag-badge">Ninja</span>
              <span class="tag-badge">Action</span>
            </div>
            <p class="creator-info mt-3 mb-0">
              <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">NinjaLord</a>
            </p>
          </div>
          <div class="card-footer bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">Diperbarui 4 hari yang lalu</small>
              <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Collection 8 -->
      <div class="col">
        <div class="card h-100 collection-card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h5 class="card-title">Sci-Fi Future Chronicles</h5>
              <button class="btn btn-sm" style="background-color: #b8b0dd;">
                <i class="fas fa-bookmark"></i>
              </button>
            </div>
            <p class="collection-description">Kumpulan cerita fiksi ilmiah yang mengeksplorasi masa depan, teknologi, dan perjalanan antariksa
                dengan teknologi canggih dan alien yang menakjubkan.</p>
                <div class="collection-stats">
                  <span class="stat-item"><i class="fas fa-book"></i> 14 karya</span>
                  <span class="stat-item"><i class="fas fa-heart"></i> 378 suka</span>
                  <span class="stat-item"><i class="fas fa-bookmark"></i> 95 bookmark</span>
                </div>
                <div class="mt-3">
                  <span class="tag-badge">Sci-Fi</span>
                  <span class="tag-badge">Future</span>
                  <span class="tag-badge">Space</span>
                </div>
                <p class="creator-info mt-3 mb-0">
                  <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">FutureTech</a>
                </p>
              </div>
              <div class="card-footer bg-transparent">
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">Diperbarui 6 hari yang lalu</small>
                  <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Collection 9 -->
          <div class="col">
            <div class="card h-100 collection-card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <h5 class="card-title">Attack on Titan Legends</h5>
                  <button class="btn btn-sm" style="background-color: #b8b0dd;">
                    <i class="fas fa-bookmark"></i>
                  </button>
                </div>
                <p class="collection-description">Cerita epik dari dunia Attack on Titan dengan pertempuran melawan para titan dan perjuangan untuk kebebasan umat manusia.</p>
                <div class="collection-stats">
                  <span class="stat-item"><i class="fas fa-book"></i> 19 karya</span>
                  <span class="stat-item"><i class="fas fa-heart"></i> 445 suka</span>
                  <span class="stat-item"><i class="fas fa-bookmark"></i> 123 bookmark</span>
                </div>
                <div class="mt-3">
                  <span class="tag-badge">Attack on Titan</span>
                  <span class="tag-badge">Action</span>
                  <span class="tag-badge">Drama</span>
                </div>
                <p class="creator-info mt-3 mb-0">
                  <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">TitanSlayer</a>
                </p>
              </div>
              <div class="card-footer bg-transparent">
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">Diperbarui 1 hari yang lalu</small>
                  <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Collection 10 -->
          <div class="col">
            <div class="card h-100 collection-card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <h5 class="card-title">Marvel Universe Stories</h5>
                  <button class="btn btn-sm" style="background-color: #b8b0dd;">
                    <i class="fas fa-bookmark"></i>
                  </button>
                </div>
                <p class="collection-description">Koleksi cerita superhero dari Marvel Universe. Aksi, drama, dan petualangan para pahlawan super favorit Anda.</p>
                <div class="collection-stats">
                  <span class="stat-item"><i class="fas fa-book"></i> 22 karya</span>
                  <span class="stat-item"><i class="fas fa-heart"></i> 598 suka</span>
                  <span class="stat-item"><i class="fas fa-bookmark"></i> 187 bookmark</span>
                </div>
                <div class="mt-3">
                  <span class="tag-badge">Marvel</span>
                  <span class="tag-badge">Superhero</span>
                  <span class="tag-badge">Action</span>
                </div>
                <p class="creator-info mt-3 mb-0">
                  <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">MarvelFan</a>
                </p>
              </div>
              <div class="card-footer bg-transparent">
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">Diperbarui 3 hari yang lalu</small>
                  <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Collection 11 -->
          <div class="col">
            <div class="card h-100 collection-card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <h5 class="card-title">Supernatural Mysteries</h5>
                  <button class="btn btn-sm" style="background-color: #b8b0dd;">
                    <i class="fas fa-bookmark"></i>
                  </button>
                </div>
                <p class="collection-description">Kumpulan cerita supernatural dengan elemen mistis, hantu, dan kekuatan supranatural yang menakjubkan.</p>
                <div class="collection-stats">
                  <span class="stat-item"><i class="fas fa-book"></i> 17 karya</span>
                  <span class="stat-item"><i class="fas fa-heart"></i> 356 suka</span>
                  <span class="stat-item"><i class="fas fa-bookmark"></i> 98 bookmark</span>
                </div>
                <div class="mt-3">
                  <span class="tag-badge">Supernatural</span>
                  <span class="tag-badge">Mystery</span>
                  <span class="tag-badge">Paranormal</span>
                </div>
                <p class="creator-info mt-3 mb-0">
                  <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">GhostHunter</a>
                </p>
              </div>
              <div class="card-footer bg-transparent">
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">Diperbarui 5 hari yang lalu</small>
                  <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Collection 12 -->
          <div class="col">
            <div class="card h-100 collection-card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <h5 class="card-title">Slice of Life Collection</h5>
                  <button class="btn btn-sm" style="background-color: #b8b0dd;">
                    <i class="fas fa-bookmark"></i>
                  </button>
                </div>
                <p class="collection-description">Cerita-cerita hangat tentang kehidupan sehari-hari yang penuh makna dan emosi mendalam.</p>
                <div class="collection-stats">
                  <span class="stat-item"><i class="fas fa-book"></i> 13 karya</span>
                  <span class="stat-item"><i class="fas fa-heart"></i> 267 suka</span>
                  <span class="stat-item"><i class="fas fa-bookmark"></i> 76 bookmark</span>
                </div>
                <div class="mt-3">
                  <span class="tag-badge">Slice of Life</span>
                  <span class="tag-badge">Drama</span>
                  <span class="tag-badge">Heartwarming</span>
                </div>
                <p class="creator-info mt-3 mb-0">
                  <i class="fas fa-user"></i> Dibuat oleh: <a href="#" class="browse-link">LifeStoryTeller</a>
                </p>
              </div>
              <div class="card-footer bg-transparent">
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">Diperbarui 1 minggu yang lalu</small>
                  <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Lihat Koleksi</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Pagination -->
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center mt-5">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    
      <!-- Footer -->
      <?php include 'components/footer2.php' ?>
      

    <!-- 
      <script>
        // Toggle between grid and list view
        document.getElementById('grid-view').addEventListener('click', function() {
          document.getElementById('collections-grid').className = 'row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4';
          this.classList.add('active');
          document.getElementById('list-view').classList.remove('active');
        });
    
        document.getElementById('list-view').addEventListener('click', function() {
          document.getElementById('collections-grid').className = 'row row-cols-1 g-4 list-view';
          this.classList.add('active');
          document.getElementById('grid-view').classList.remove('active');
        });
    
        // Logout functionality
        document.getElementById('logout-btn').addEventListener('click', function(e) {
          e.preventDefault();
          if (confirm('Apakah Anda yakin ingin logout?')) {
            localStorage.removeItem('currentUser');
            window.location.href = 'login.html';
          }
        });
    
        // Load username from localStorage
        document.addEventListener('DOMContentLoaded', function() {
          const currentUser = JSON.parse(localStorage.getItem('currentUser'));
          if (currentUser) {
            document.getElementById('username-display').textContent = currentUser.username;
          } else {
            window.location.href = 'login.html';
          }
        });
    
        // Bookmark functionality
        document.querySelectorAll('.collection-card .btn-sm').forEach(button => {
          if (button.innerHTML.includes('fa-bookmark')) {
            button.addEventListener('click', function() {
              const icon = this.querySelector('i');
              if (icon.classList.contains('fas')) {
                icon.classList.remove('fas');
                icon.classList.add('far');
                this.style.backgroundColor = '#e0e0e0';
              } else {
                icon.classList.remove('far');
                icon.classList.add('fas');
                this.style.backgroundColor = '#b8b0dd';
              }
            });
          }
        });
      </script> -->
    </body>
    </html>