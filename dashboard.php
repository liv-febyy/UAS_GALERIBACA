<?php
    session_start();
    require_once 'components/db_connection.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $connection = getDbConnection();

    $stmt = $connection->prepare("SELECT (SELECT count(1) FROM daftar_bacaan WHERE username = ? AND STATUS = 'reading') as reading, (SELECT count(1) FROM daftar_bacaan WHERE username = ? AND STATUS = 'completed') as completed");
    $stmt->bind_param("ss", $_SESSION['user'], $_SESSION['user']);
    $stmt->execute();
    $result = $stmt->get_result();
    $summary = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeri Baca - Dashboard</title>
  <link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
  <?php include 'components/navbar.php'; ?>

  <section class="welcome-banner">
    <div class="container">
      <h1 class="display-5">Selamat Datang, <span id="welcome-name">User</span>!</h1>
      <p class="lead">Lanjutkan petualangan literasimu bersama kami.</p>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-3 mb-4">
        <?php include '_sidebarDashboard.php'; ?>
      </div>

      <!-- Main Content Area -->
      <div class="col-lg-9">
        <!-- Stats -->
        <div class="row mb-4">
          <div class="col-md-4">
            <div class="dashboard-stat">
              <div class="stat-icon">
                <i class="fas fa-book"></i>
              </div>
              <div class="stat-number" id="reading-count"><?= $summary['reading'] ?></div>
              <div class="stat-label">Sedang Dibaca</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="dashboard-stat">
              <div class="stat-icon">
                <i class="fas fa-book"></i>
              </div>
              <div class="stat-number" id="reading-count"><?= $summary['completed'] ?></div>
              <div class="stat-label">Bacaan Selesai</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="dashboard-stat">
              <div class="stat-icon">
                <i class="fas fa-bookmark"></i>
              </div>
              <div class="stat-number" id="bookmarks-count">15</div>
              <div class="stat-label">Ditandai</div>
            </div>
          </div>
        </div>

        <!-- Continue Reading -->
        <div class="category-panel">
          <h3 class="category-title"><i class="fas fa-book-reader me-2"></i>Lanjutkan Membaca</h3>
          <div class="reading-list" id="continue-reading-list">
            <div class="reading-list-item">
              <div class="d-flex justify-content-between">
                <h5>Fallen Angel - Chapter 8</h5>
                <span class="badge bg-secondary">75% selesai</span>
              </div>
              <p class="text-muted">Terakhir dibaca 2 jam yang lalu</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #b8b0dd;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <a href="#" class="btn btn-sm continue-reading-btn" style="background-color: #b8b0dd;">Lanjutkan</a>
            </div>
            <div class="reading-list-item">
              <div class="d-flex justify-content-between">
                <h5>Guardian of Secrets - Chapter 3</h5>
                <span class="badge bg-secondary">25% selesai</span>
              </div>
              <p class="text-muted">Terakhir dibaca kemarin</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #b8b0dd;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <a href="#" class="btn btn-sm continue-reading-btn" style="background-color: #b8b0dd;">Lanjutkan</a>
            </div>
          </div>
        </div>

        <!-- Recommended for You -->
        <div class="category-panel">
          <h3 class="category-title"><i class="fas fa-fire me-2"></i>Rekomendasi Untuk Anda</h3>
          <div class="row" id="recommendations">
            <div class="col-md-4 mb-3">
              <div class="card h-100">
                <img src="assets/img/camellya.jfif" class="card-img-top" alt="Recommended Book">
                <div class="card-body">
                  <h5 class="card-title">Petualangan Camellya</h5>
                  <p class="card-text">Sekuel terbaru dari seri Fallen Angel yang banyak dinanti para pembaca.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Oleh: Ariel Nakamura</small>
                    <span class="badge" style="background-color: #b8b0dd;">Terbaru</span>
                  </div>
                </div>
                <div class="card-footer bg-transparent">
                  <a href="synopsis.php" class="btn btn-sm w-100" style="background-color: #b8b0dd;">Baca Sekarang</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card h-100">
                <img src="assets/img/wallpaperflare.com_wallpaper.jpg" class="card-img-top" alt="Recommended Book">
                <div class="card-body">
                  <h5 class="card-title">Laut Kegelapan</h5>
                  <p class="card-text">Sebuah cerita tentang sisi gelap Shorekeeper yang belum pernah terungkap.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Oleh: Rei Kazama</small>
                    <span class="badge" style="background-color: #b8b0dd;">Populer</span>
                  </div>
                </div>
                <div class="card-footer bg-transparent">
                  <a href="#" class="btn btn-sm w-100" style="background-color: #b8b0dd;">Baca Sekarang</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card h-100">
                <img src="assets/img/cantarella2.jpg" class="card-img-top" alt="Recommended Book">
                <div class="card-body">
                  <h5 class="card-title">Takdir Cantarella</h5>
                  <p class="card-text">Kisah asal usul Cantarella sebelum menjadi pemimpin keluarga Fisalia.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Oleh: Hana Kazemaru</small>
                    <span class="badge" style="background-color: #b8b0dd;">Trending</span>
                  </div>
                </div>
                <div class="card-footer bg-transparent">
                  <a href="#" class="btn btn-sm w-100" style="background-color: #b8b0dd;">Baca Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Activity -->
        <div class="profile-activity">
          <h3 class="mb-3"><i class="fas fa-history me-2"></i>Aktivitas Terbaru</h3>
          <div class="activity-list" id="activity-list">
            <div class="activity-item">
              <div class="d-flex justify-content-between">
                <span><i class="fas fa-book me-2"></i>Anda menyelesaikan membaca "Fallen Angel - Chapter 7"</span>
                <small class="text-muted">3 jam yang lalu</small>
              </div>
            </div>
            <div class="activity-item">
              <div class="d-flex justify-content-between">
                <span><i class="fas fa-comment me-2"></i>Anda mengomentari cerita "Blessed Maiden"</span>
                <small class="text-muted">Kemarin</small>
              </div>
            </div>
            <div class="activity-item">
              <div class="d-flex justify-content-between">
                <span><i class="fas fa-bookmark me-2"></i>Anda menandai "Guardian of Secrets - Chapter 3"</span>
                <small class="text-muted">2 hari yang lalu</small>
              </div>
            </div>
            <div class="activity-item">
              <div class="d-flex justify-content-between">
                <span><i class="fas fa-star me-2"></i>Anda memberikan bintang 5 untuk "Duality of Shadow"</span>
                <small class="text-muted">3 hari yang lalu</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
   <?php include 'components/footer.php' ?>
 
  <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {      
      // Parse user data
      const userData = JSON.parse(localStorage.getItem('currentUser'));
      const welcomeName = document.getElementById('welcome-name');
      if(userData && welcomeName){
        welcomeName.textContent = userData.firstName || userData.username;
      }
      
      // Update user interests/fandoms
      const interestsContainer = document.getElementById('user-interests');
      if (userData.interests && userData.interests.length > 0) {
        let interestsHTML = '';
        userData.interests.forEach(interest => {
          interestsHTML += `<span class="interest-badge">${interest}</span> `;
        });
        interestsContainer.innerHTML = interestsHTML;
      } else {
        interestsContainer.innerHTML = '<p class="small">Belum ada fandom yang dipilih</p>';
      }
      // Generate some random stats for demo
      document.getElementById('reading-count').textContent = Math.floor(Math.random() * 20) + 1;
      document.getElementById('bookmarks-count').textContent = Math.floor(Math.random() * 30) + 5;
      document.getElementById('reading-time').textContent = Math.floor(Math.random() * 100) + 10;
    });
  </script> -->
</body>

</html>