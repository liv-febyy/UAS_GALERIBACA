<?php
    session_start();
    require_once 'components/db_connection.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $connection = getDbConnection();

    $status = "";
    $sort = "title";
    $sql = "SELECT * from daftar_bacaan WHERE username = ? AND (? = '' OR status = ?)";

    if(isset($_GET['status'])) $status = $_GET['status'];
    if(isset($_GET['sort']) && $_GET['sort'] == "title") $sql .= " ORDER BY book_name";
    if(isset($_GET['sort']) && $_GET['sort'] == "progress") $sql .= " ORDER BY progress desc";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sss", $_SESSION['user'], $status, $status);
    $stmt->execute();
    $result = $stmt->get_result();

    $list = $result->fetch_all(MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeri Baca - Bacaan Saya</title>
  <link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>

<body style="background-color: rgb(243, 243, 243);">
  <?php include 'components/navbar.php'; ?>

  <section class="page-header">
    <div class="container">
      <h1 class="display-5"><i class="fas fa-book-open me-3"></i>Bacaan Saya</h1>
      <p class="lead">Kelola dan lanjutkan bacaan yang sedang Anda nikmati</p>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-3 mb-4">
        <?php include '_sidebarDashboard.php'; ?>
      </div>

      <!-- Main Content -->
      <div class="col-lg-9">
        <!-- Filter and Sort -->

        <!-- Reading List -->
        <div id="reading-list">
           <?php for ($i = 0; $i < count($list); $i++) { ?>
            <div class="reading-item" data-status="reading">
            <div class="row">
              <div class="col-md-2">
                <?php if($list[$i]['imagepath'] != ""){ ?>
                    <img src="https://covers.openlibrary.org/b/OLID/<?= $list[$i]['imagepath'].'-M.jpg' ?>" alt="<?= $list[$i]['book_name'] ?>" class="reading-cover" onerror="this.onerror=null; this.src='https://placehold.co/150x250';">
                <?php }else{ ?>
                    <img src="https://placehold.co/150x250" alt="<?= $list[$i]['book_name'] ?>" class="reading-cover" onerror="this.onerror=null; this.src='https://placehold.co/150x250';">
                <?php } ?>
              </div>
              <div class="col-md-10">
                <div class="row">
                  <div class="col-12">
                    <h4 class="mb-2"><?= $list[$i]['book_name'] ?></h4>
                    <p class="text-muted mb-2">Oleh: <?= $list[$i]['author'] ?></p>
                    <div class="mb-2">
                      <?php 
                        $genre = explode(',', $list[$i]['genre']);
                        for ($j = 0; $j < count($genre); $j++) { 
                          echo '<span class="interest-badge">'.$genre[$j].'</span>';
                        }
                      ?>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

        <!-- Empty State (hidden by default) -->
        <div class="empty-state" id="empty-state" style="display: none;">
          <i class="fas fa-book-open"></i>
          <h3>Belum Ada Bacaan</h3>
          <p>Mulai petualangan literasi Anda dengan menjelajahi koleksi cerita menarik kami.</p>
          <a href="browse.html" class="btn btn-custom">Jelajahi Cerita</a>
        </div>
      </div>
    </div>
  </div>

  <?php include 'components/footer.php' ?>

  <script>
    $(document).ready(function(){

      $('#statusFilter, #sortBy').on('change', function(){
          var status = $('#statusFilter').val();
          var sorting = $('#sortBy').val();

          console.log(status, sorting);

          window.location.href = `Bacaansayapage.php?status=${status}&sort=${sorting}`;
          
      })

    })
  </script>
</body>
</html>