<div class="sidebar">
  <h4 class="mb-3">Menu Utama <?php $activePage = basename($_SERVER['PHP_SELF']); ?></h4>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link <?= ($activePage == 'dashboard.php') ? 'active' : ''; ?>" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($activePage == 'Bacaansayapage.php') ? 'active' : ''; ?>" href="Bacaansayapage.php"><i class="fas fa-book-open"></i> Bacaan Saya</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($activePage == 'Ditandai.php') ? 'active' : ''; ?>" href="Ditandai.php"><i class="fas fa-bookmark"></i> Ditandai</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-history"></i> Riwayat Baca</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-star"></i> Favorit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-pen"></i> Tulisan Saya</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-users"></i> Komunitas</a>
    </li>
  </ul>
  
  <h4 class="mt-4 mb-3">Fandoms Saya</h4>
  <div class="user-interests mb-3" id="user-interests">
    <!-- Fandoms will be dynamically inserted here -->
  </div>
  <a href="#" class="btn btn-sm" style="background-color: #b8b0dd;">Edit Interests</a>
</div>