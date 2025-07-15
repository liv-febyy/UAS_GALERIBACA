<?php
    session_start();
    require_once 'components/db_connection.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $connection = getDbConnection();

    $status = "";
    $sorting = "title";
    $sql = "SELECT * from daftar_bacaan WHERE username = ? AND (? = '' OR status = ?)";

    if(isset($_GET['status'])) $status = $_GET['status'];
    if(isset($_GET['sort']) && $_GET['sort'] == "title") $sql .= " ORDER BY book_name";
    if(isset($_GET['sort']) && $_GET['sort'] == "progress") $sql .= " ORDER BY progress desc";

    if(isset($_GET['sort'])) $sorting = $_GET['sort'];

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
        <div class="filter-section">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="d-flex align-items-center">
                <label for="statusFilter" class="form-label me-2 mb-0">Filter Status:</label>
                <select class="form-select" id="statusFilter" style="width: auto;">
                  <option value="">Semua Status</option>
                  <option value="reading"   <?php if($status == 'reading'  ){echo 'selected';} ?>>Sedang Dibaca</option>
                  <option value="paused"    <?php if($status == 'paused'   ){echo 'selected';} ?>>Tertunda</option>
                  <option value="completed" <?php if($status == 'completed'){echo 'selected';} ?>>Selesai</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-center justify-content-md-end">
                <label for="sortBy" class="form-label me-2 mb-0">Urutkan:</label>
                <select class="form-select sort-dropdown" id="sortBy">
                  <option></option>
                  <option value="title" <?php if($sorting == 'title'  ){echo 'selected';} ?>>Judul A-Z</option>
                  <option value="progress" <?php if($sorting == 'progress'  ){echo 'selected';} ?>>Progress</option>
                </select>
              </div>
            </div>
          </div>
        </div>

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
                    <div class="dropdown float-end">
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                          <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <?php if($list[$i]['status'] == 'reading') { ?>
                              <li><a class="dropdown-item" href="_actionJeda.php?id=<?= $list[$i]['id'] ?>"><i class="fas fa-pause me-2"></i>Jeda Sementara</a></li>
                              <li><a class="dropdown-item" href="_actionProgress.php?id=<?= $list[$i]['id'] ?>"><i class="fas fa-pause me-2"></i>Update Progress</a></li>
                          <?php } ?>

                          <?php if($list[$i]['status'] == 'paused') { ?>
                              <li><a class="dropdown-item" href="_actionContinue.php?id=<?= $list[$i]['id'] ?>"><i class="fas fa-pause me-2"></i>Lanjutkan Membaca</a></li>
                          <?php } ?>
                          <li><a class="dropdown-item" href="_actionHapus.php?id=<?= $list[$i]['id'] ?>"><i class="fas fa-trash me-2"></i>Hapus dari Daftar</a></li>
                        </ul>
                      </div>
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
                    <div class="progress-container">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="small">Progress Baca <?= $list[$i]['progress'].'%'  ?></span>
                      </div>
                      <div class="progress">
                        <?php 
                          $bgProgress = 'bg-primary';
                          if($list[$i]['status'] == 'paused'){
                            $bgProgress = 'bg-secondary';
                          }else if($list[$i]['status'] == "completed"){
                            $bgProgress = 'bg-success';
                          }
                         ?>
                        <div class="progress-bar <?= $bgProgress ?>" role="progressbar" style="width: <?= $list[$i]['progress'].'%'  ?>;"></div>
                      </div>
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

    // document.addEventListener('DOMContentLoaded', function() {
    //   // Load user data
    //   const userData = JSON.parse(localStorage.getItem('currentUser'));
    //   if (userData) {
    //     document.getElementById('username-display').textContent = userData.firstName || userData.username;
    //   }

    //   // Filter functionality
    //   const statusFilter = document.getElementById('statusFilter');
    //   const sortBy = document.getElementById('sortBy');
    //   const readingItems = document.querySelectorAll('.reading-item');

    //   function filterAndSort() {
    //     const selectedStatus = statusFilter.value;
    //     const selectedSort = sortBy.value;
        
    //     let visibleItems = [];
        
    //     readingItems.forEach(item => {
    //       const status = item.getAttribute('data-status');
          
    //       if (selectedStatus === 'all' || status === selectedStatus) {
    //         item.style.display = 'block';
    //         visibleItems.push(item);
    //       } else {
    //         item.style.display = 'none';
    //       }
    //     });

    //     // Simple sorting simulation
    //     if (selectedSort === 'title') {
    //       visibleItems.sort((a, b) => {
    //         const titleA = a.querySelector('h4').textContent.toLowerCase();
    //         const titleB = b.querySelector('h4').textContent.toLowerCase();
    //         return titleA.localeCompare(titleB);
    //       });
    //     }

    //     // Show empty state if no items visible
    //     const emptyState = document.getElementById('empty-state');
    //     if (visibleItems.length === 0) {
    //       emptyState.style.display = 'block';
    //     } else {
    //       emptyState.style.display = 'none';
    //     }
    //   }

    //   statusFilter.addEventListener('change', filterAndSort);
    //   sortBy.addEventListener('change', filterAndSort);

    //   // Update stats
    //   function updateStats() {
    //     const readingCount = document.querySelectorAll('.reading-item[data-status="reading"]').length;
    //     const completedCount = document.querySelectorAll('.reading-item[data-status="completed"]').length;
        
    //     document.getElementById('total-reading').textContent = readingCount;
    //     document.getElementById('total-completed').textContent = completedCount;
    //   }

    //   updateStats();

    //   // Logout functionality
    //   document.getElementById('logout-btn').addEventListener('click', function(e) {
    //     e.preventDefault();
    //     // Clear user data
    //     localStorage.removeItem('currentUser');
    //     localStorage.removeItem('isLoggedIn');
        
    //     // Redirect to login or home page
    //     window.location.href = 'index.html';
    //   });

    //   // Action button functionality
    //   document.querySelectorAll('.btn-custom').forEach(button => {
    //     button.addEventListener('click', function(e) {
    //       e.preventDefault();
          
    //       const buttonText = this.textContent.trim();
    //       const readingItem = this.closest('.reading-item');
    //       const title = readingItem.querySelector('h4').textContent;
          
    //       if (buttonText.includes('Lanjutkan')) {
    //         // Simulate continuing reading
    //         alert(`Melanjutkan membaca "${title}"`);
    //         // In real app, this would redirect to the reading page
    //       } else if (buttonText.includes('Beri Rating')) {
    //         // Simulate rating
    //         const rating = prompt(`Beri rating untuk "${title}" (1-5 bintang):`);
    //         if (rating && rating >= 1 && rating <= 5) {
    //           alert(`Terima kasih! Anda memberikan rating ${rating} bintang untuk "${title}"`);
    //         }
    //       }
    //     });
    //   });

    //   // Detail button functionality
    //   document.querySelectorAll('.btn-outline-secondary').forEach(button => {
    //     button.addEventListener('click', function(e) {
    //       e.preventDefault();
          
    //       const readingItem = this.closest('.reading-item');
    //       const title = readingItem.querySelector('h4').textContent;
    //       const author = readingItem.querySelector('.text-muted').textContent;
          
    //       alert(`Detail untuk "${title}"\n${author}\n\nFitur detail akan segera hadir!`);
    //     });
    //   });

    //   // Dropdown menu functionality
    //   document.querySelectorAll('.dropdown-item').forEach(item => {
    //     item.addEventListener('click', function(e) {
    //       e.preventDefault();
          
    //       const action = this.textContent.trim();
    //       const readingItem = this.closest('.reading-item');
    //       const title = readingItem.querySelector('h4').textContent;
          
    //       switch(true) {
    //         case action.includes('Jeda Sementara'):
    //           // Change status to paused
    //           const statusBadge = readingItem.querySelector('.status-badge');
    //           statusBadge.textContent = 'Tertunda';
    //           statusBadge.className = 'status-badge status-paused';
    //           readingItem.setAttribute('data-status', 'paused');
    //           alert(`"${title}" telah dijeda sementara`);
    //           updateStats();
    //           break;
              
    //         case action.includes('Lanjutkan Baca'):
    //           // Change status back to reading
    //           const statusBadge2 = readingItem.querySelector('.status-badge');
    //           statusBadge2.textContent = 'Sedang Dibaca';
    //           statusBadge2.className = 'status-badge status-reading';
    //           readingItem.setAttribute('data-status', 'reading');
    //           alert(`Melanjutkan membaca "${title}"`);
    //           updateStats();
    //           break;
              
    //         case action.includes('Tandai'):
    //           alert(`"${title}" telah ditandai`);
    //           break;
              
    //         case action.includes('Hapus dari Daftar'):
    //           if (confirm(`Apakah Anda yakin ingin menghapus "${title}" dari daftar bacaan?`)) {
    //             readingItem.remove();
    //             alert(`"${title}" telah dihapus dari daftar bacaan`);
    //             updateStats();
    //             filterAndSort(); // Refresh the view
    //           }
    //           break;
              
    //         case action.includes('Beri Rating'):
    //           const rating = prompt(`Beri rating untuk "${title}" (1-5 bintang):`);
    //           if (rating && rating >= 1 && rating <= 5) {
    //             alert(`Terima kasih! Anda memberikan rating ${rating} bintang untuk "${title}"`);
    //           }
    //           break;
              
    //         case action.includes('Tulis Review'):
    //           const review = prompt(`Tulis review untuk "${title}":`);
    //           if (review && review.trim() !== '') {
    //             alert(`Review untuk "${title}" telah disimpan:\n"${review}"`);
    //           }
    //           break;
              
    //         case action.includes('Baca Ulang'):
    //           // Reset progress and change status
    //           const progressBar = readingItem.querySelector('.progress-bar');
    //           progressBar.style.width = '0%';
    //           progressBar.classList.remove('bg-success');
    //           progressBar.style.backgroundColor = '#b8b0dd';
              
    //           const statusBadge3 = readingItem.querySelector('.status-badge');
    //           statusBadge3.textContent = 'Sedang Dibaca';
    //           statusBadge3.className = 'status-badge status-reading';
    //           readingItem.setAttribute('data-status', 'reading');
              
    //           const progressText = readingItem.querySelector('.small:last-child');
    //           progressText.textContent = '0/10 Chapter (0%)';
              
    //           alert(`Memulai membaca ulang "${title}"`);
    //           updateStats();
    //           break;
    //       }
    //     });
    //   });

    //   // Search functionality (if needed)
    //   function addSearchFeature() {
    //     const searchInput = document.createElement('input');
    //     searchInput.type = 'text';
    //     searchInput.className = 'form-control me-2';
    //     searchInput.placeholder = 'Cari bacaan...';
    //     searchInput.style.maxWidth = '300px';
        
    //     const filterSection = document.querySelector('.filter-section .row');
    //     const searchContainer = document.createElement('div');
    //     searchContainer.className = 'col-md-12 mb-3';
    //     searchContainer.appendChild(searchInput);
        
    //     filterSection.insertBefore(searchContainer, filterSection.firstChild);
        
    //     searchInput.addEventListener('input', function() {
    //       const searchTerm = this.value.toLowerCase();
          
    //       readingItems.forEach(item => {
    //         const title = item.querySelector('h4').textContent.toLowerCase();
    //         const author = item.querySelector('.text-muted').textContent.toLowerCase();
            
    //         if (title.includes(searchTerm) || author.includes(searchTerm)) {
    //           item.style.display = 'block';
    //         } else {
    //           item.style.display = 'none';
    //         }
    //       });
    //     });
    //   }

    //   // Uncomment the line below to add search feature
    //   // addSearchFeature();

    //   // Add reading progress update simulation
    //   function simulateReadingProgress() {
    //     const readingItems = document.querySelectorAll('.reading-item[data-status="reading"]');
        
    //     readingItems.forEach(item => {
    //       const continueBtn = item.querySelector('.btn-custom');
          
    //       continueBtn.addEventListener('click', function() {
    //         const progressBar = item.querySelector('.progress-bar');
    //         const progressText = item.querySelector('.small:last-child');
    //         const currentWidth = parseInt(progressBar.style.width) || 0;
            
    //         // Simulate reading progress (increase by 10%)
    //         const newWidth = Math.min(currentWidth + 10, 100);
    //         progressBar.style.width = newWidth + '%';
            
    //         // Update text based on the specific story
    //         const title = item.querySelector('h4').textContent;
    //         let newText = '';
            
    //         if (title.includes('Petualangan Camellya')) {
    //           const newChapter = Math.min(8 + Math.floor((newWidth - 67) / 8), 12);
    //           newText = `${newChapter}/12 Chapter (${newWidth}%)`;
    //         } else if (title.includes('Laut Kegelapan')) {
    //           const newChapter = Math.min(3 + Math.floor((newWidth - 20) / 7), 15);
    //           newText = `${newChapter}/15 Chapter (${newWidth}%)`;
    //         }
            
    //         if (newText) {
    //           progressText.textContent = newText;
    //         }
            
    //         // If completed, change status
    //         if (newWidth >= 100) {
    //           const statusBadge = item.querySelector('.status-badge');
    //           statusBadge.textContent = 'Selesai';
    //           statusBadge.className = 'status-badge status-completed';
    //           item.setAttribute('data-status', 'completed');
              
    //           progressBar.classList.add('bg-success');
    //           progressBar.style.backgroundColor = '';
              
    //           // Update buttons
    //           continueBtn.innerHTML = '<i class="fas fa-star me-1"></i> Beri Rating';
              
    //           updateStats();
    //           alert(`Selamat! Anda telah menyelesaikan "${title}"`);
    //         }
    //       });
    //     });
    //   }

    //   simulateReadingProgress();
    // });
  </script>
</body>
</html>