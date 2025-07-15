<?php 

  session_start();
  if(!isset( $_SESSION['user'])){
    header("Location: index.php");
    exit();
  }

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us - Galeri Baca</title>
  <link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>

<body style="background-color: rgb(243, 243, 243);">
  <?php include 'components/navbar.php'; ?>

  <section class="hero">
    <div class="container">
      <h1 class="display-4">Tentang Galeri Baca</h1>
      <p class="lead">Membangun komunitas kreatif bagi para penulis dan pembaca di Indonesia</p>
    </div>
  </section>

  <div class="container my-5">
    <!-- Tentang Kami -->
    <div class="about-section">
      <h2 class="about-title">Visi & Misi</h2>
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="api/placeholder/600/400" alt="Komunitas Galeri Baca" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
          <h3 class="mt-4 mt-md-0">Visi</h3>
          <p>Menjadi platform terbesar dan terpercaya bagi komunitas fiksi penggemar dan karya kreatif di Indonesia, menyediakan ruang aman dan ramah untuk berbagi karya bagi semua kalangan.</p>
          
          <h3 class="mt-4">Misi</h3>
          <ul>
            <li>Memberikan platform gratis dan mudah digunakan untuk membagikan karya kreatif</li>
            <li>Membangun komunitas yang inklusif dan mendukung bagi para penulis dan pembaca</li>
            <li>Melestarikan karya kreatif dalam berbagai genre dan fandom</li>
            <li>Memfasilitasi perkembangan bakat menulis dan kreativitas</li>
            <li>Menghubungkan penulis dan pembaca dengan minat yang sama</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Tentang Archive of Our Own -->
    <div class="about-section">
      <h2 class="about-title">Tentang Galeri Baca</h2>
      <p>Galeri Baca adalah platform non-profit yang didedikasikan untuk kepentingan penggemar dan menyediakan akses ke berbagai macam cerita, puisi, seni, dan karya kreatif lainnya tanpa biaya. Platform ini dioperasikan oleh komunitas penggemar untuk penggemar, dijamin akan selalu gratis dan tidak akan pernah berisi iklan.</p>
      
      <p>Kami percaya bahwa budaya penggemar adalah transformatif dan bahwa karya transformatif bersifat sah. Galeri Baca dilindungi oleh hukum penggunaan wajar di Indonesia.</p>
      
      <p>Kami menyediakan:</p>
      <div class="row mt-4">
        <div class="col-md-4 mb-4">
          <div class="feature-icon">
            <i class="fas">📚</i>
          </div>
          <h4 class="text-center">Platform yang Ramah Pengguna</h4>
          <p class="text-center">Fitur penelusuran yang kuat, pemberian tag, dan pengarsipan untuk menemukan karya dengan mudah.</p>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-icon">
            <i class="fas">🔍</i>
          </div>
          <h4 class="text-center">Kemampuan Penelusuran Lanjutan</h4>
          <p class="text-center">Penelusuran berdasarkan tag, fandom, pasangan, karakter, dan kriteria lainnya.</p>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-icon">
            <i class="fas">💬</i>
          </div>
          <h4 class="text-center">Interaksi Komunitas</h4>
          <p class="text-center">Komentar, kudos, bookmark, dan koleksi untuk berinteraksi dengan penulis dan karya.</p>
        </div>
      </div>
    </div>

    <!-- Sejarah Kami -->
    <div class="about-section">
      <h2 class="about-title">Sejarah Kami</h2>
      <div class="timeline">
        <div class="timeline-container left">
          <div class="timeline-content">
            <h3>2022</h3>
            <p>Galeri Baca mulai sebagai gagasan di kalangan komunitas penggemar Indonesia yang mencari platform lokal untuk karya fan fiction.</p>
          </div>
        </div>
        <div class="timeline-container right">
          <div class="timeline-content">
            <h3>2023</h3>
            <p>Pengembangan platform dimulai dengan tim sukarelawan yang terdiri dari penggemar dan pengembang web.</p>
          </div>
        </div>
        <div class="timeline-container left">
          <div class="timeline-content">
            <h3>2024</h3>
            <p>Peluncuran beta resmi Galeri Baca dengan koleksi awal 1,000 karya dari berbagai fandom.</p>
          </div>
        </div>
        <div class="timeline-container right">
          <div class="timeline-content">
            <h3>2025</h3>
            <p>Galeri Baca mencapai 10,000 pengguna terdaftar dan lebih dari 50,000 karya yang diterbitkan dari berbagai genre dan fandom.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- FAQ -->
    <div class="about-section">
      <h2 class="about-title">Frequently Asked Questions</h2>
      <div class="accordion" id="accordionFAQ">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Apakah Galeri Baca gratis?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              <strong>Ya, sepenuhnya gratis.</strong> Galeri Baca adalah platform non-profit yang dijalankan oleh sukarelawan. Tidak ada biaya untuk membaca atau mempublikasikan karya di platform kami, dan tidak akan pernah ada iklan yang mengganggu pengalaman membaca Anda.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Bisakah saya mempublikasikan karya saya di Galeri Baca?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              <strong>Tentu!</strong> Setiap orang dapat membuat akun dan mulai mempublikasikan karya mereka. Kami menerima karya dari berbagai fandom, genre, dan format, termasuk cerita, puisi, esai, dan banyak lagi. Pastikan untuk membaca Ketentuan Layanan dan Pedoman Konten kami sebelum mempublikasikan.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Bagaimana dengan hak cipta?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              <strong>Kami menganut prinsip penggunaan wajar.</strong> Galeri Baca mengakui bahwa karya fan fiction adalah karya transformatif yang dilindungi oleh doktrin penggunaan wajar. Penulis tetap memiliki hak cipta atas karya asli mereka, sementara konten yang terinspirasi dari karya yang sudah ada dianggap sebagai karya transformatif.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Bagaimana saya bisa berkontribusi pada Galeri Baca?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              <strong>Ada banyak cara!</strong> Selain menjadi penulis atau pembaca, Anda bisa menjadi sukarelawan sebagai tag wrangler, pengujsoftware, penerjemah, atau membantu dalam pengembangan platform. Kami juga menerima donasi untuk membantu membiayai server dan biaya operasional lainnya.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tim Kami -->
    <div class="about-section">
      <h2 class="about-title">Tim Kami</h2>
      <p class="text-center mb-5">Galeri Baca dijalankan oleh tim sukarelawan yang berdedikasi dari seluruh Indonesia.</p>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <img src="assets/img/team-anisa.jpg" alt="Founder" class="img-fluid">
            <h4>Anisa Wijaya</h4>
            <p>Pendiri & Direktur</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <img src="assets/img/team-karina.jpg" alt="Developer" class="img-fluid">
            <h4>Karina Cahyasari</h4>
            <p>Lead Developer</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <img src="assets/img/team-nasywa.jpg" alt="Community Manager" class="img-fluid">
            <h4>Nasywa Zahrainda Syafana
            </h4>
            <p>Community Manager</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <img src="assets/img/team-livia.jpg" alt="Content Curator" class="img-fluid">
            <h4>Livia Febrianti</h4>
            <p>Content Curator</p>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <p>Dan puluhan sukarelawan lainnya yang membantu menjaga platform ini tetap berjalan.</p>
        <a href="#" class="btn mt-3" style="background-color: #b8b0dd;">Bergabung dengan Tim Kami</a>
      </div>
    </div>

    <!-- Kontak -->
    <div class="about-section">
      <h2 class="about-title">Hubungi Kami</h2>
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subjek</label>
              <input type="text" class="form-control" id="subject" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn" style="background-color: #b8b0dd;">Kirim Pesan</button>
          </form>
        </div>
        <div class="col-md-6">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Informasi Kontak</h5>
              <p class="card-text">Untuk pertanyaan umum, laporan masalah, atau informasi lainnya, Anda bisa menghubungi kami melalui:</p>
              <ul class="list-unstyled">
                <li class="mb-2"><strong>Email:</strong> info@galeribaca.id</li>
                <li class="mb-2"><strong>Support:</strong> support@galeribaca.id</li>
                <li class="mb-2"><strong>Media Sosial:</strong></li>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none">Twitter</a></li>
                  <li class="list-inline-item">|</li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none">Instagram</a></li>
                  <li class="list-inline-item">|</li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none">Discord</a></li>
                </ul>
              </ul>
              <p class="mt-4">Kami biasanya merespons dalam waktu 1-2 hari kerja.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'components/footer.php' ?>

<!--   <script>
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
  </script> -->
</body>

</html>