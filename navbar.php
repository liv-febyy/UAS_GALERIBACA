<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="assets/img/book_information_learning_info_icon_262073.webp" alt="Logo" width="30" height="30"
          class="d-inline-block align-text-top">
        Galeri Baca
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="aboutus.php">About Us</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="browse.php">Browse</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Fandoms
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">All Fandoms</a></li>

              <hr class="dropdown-divider">
              <!-- Submenu -->
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Anime & Manga</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Attack On Titan</a></li>
                  <li><a class="dropdown-item" href="#">Eleceed</a></li>
                  <li><a class="dropdown-item" href="#">Omniscient Reader VIewpoint</a></li>
                  <li><a class="dropdown-item" href="#">One Piece</a></li>
                  <li><a class="dropdown-item" href="#">Overlord</a></li>
                  <li><a class="dropdown-item" href="#">Trash of The Count's Family</a></li>
                </ul>
              </li>

              <hr class="dropdown-divider">
              <!-- Submenu -->
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">TV Shows</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Marvel</a></li>
                  <li><a class="dropdown-item" href="#">Percy Jackson and the Olympians</a></li>
                  <li><a class="dropdown-item" href="#">Supernatural</a></li>
                  <li><a class="dropdown-item" href="#">The Witcher</a></li>
                </ul>
              </li>

              <hr class="dropdown-divider">
              <!-- Submenu -->
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Video Game</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Genshin Impact</a></li>
                  <li><a class="dropdown-item" href="#">Son Of The Forest</a></li>
                  <li><a class="dropdown-item" href="#">The Forest</a></li>
                  <li><a class="dropdown-item" href="#">Wuthering Wave</a></li>
                </ul>
              </li>

              <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </ul>

        <?php if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            ?>

            <div class="dropdown">
          <button class="btn dropdown-toggle" style="background-color: #b8b0dd;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle me-1"></i> <span id="username-display"><?= $user  ?></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="dashboard.php"><i class="fas fa-user me-2"></i>Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-book me-2"></i>My Library</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php" id="logout-btn"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
          </ul>
        </div>

            <?php
        }else{
        ?>
        <a href="login.php" class="btn" style="background-color: #b8b0dd;">Login</a>
        <?php } ?>


        
      </div>
    </div>
  </nav>