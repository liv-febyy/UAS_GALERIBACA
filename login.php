<?php
    // Include the database connection
    require_once 'components/db_connection.php';

    session_start();
    if (isset($_SESSION['alert'])) {$alert = $_SESSION['alert']['message'];?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo $alert; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
<?php unset($_SESSION['alert']); } ?>

<?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form data and sanitize
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password']; // Always hash passwords

        try {
            // Get database connection
            $connection = getDbConnection();

            // Prepare the insert statement
            $stmt = $connection->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();
                
                if (password_verify($password, $user['password'])) {
                    session_regenerate_id(true);
                    $_SESSION['user'] = $user['username'];
                    header("Location: index.php");
                    exit();
                }else{
                  throw new Exception("Invalid credentials or account issue");
                }
            }else{
              throw new Exception("Error executing query: " . $stmt->error);
            }

        } catch (Exception $e) {
            // Set error message
            $_SESSION['alert'] = ['type' => 'error', 'message' => $e->getMessage()];
            // echo $e->getMessage();
            // Redirect back to form or error page
            header("Location: login.php");
            exit();
        } finally {
            // Close connections if they exist
            if (isset($stmt)) $stmt->close();
            if (isset($connection)) $connection->close();
        }
    }

  ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeri Baca - Login</title>
  <link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style-login.css">

</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <h1 class="text-center mb-4">Galeri Baca</h1>
        
        <div class="card">
          <div class="card-header text-center">Login to Your Account</div>
          <div class="card-body">
            <form class="login-form" action="" method="post">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
              </div>
              
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember me
                </label>
              </div>
              
              <div class="d-grid">
                <button type="submit" class="btn btn-custom btn-lg">Login</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <p class="mb-0">Don't have an account? <a href="signup.php">Sign up</a></p>
          </div>
        </div>
        
        <div class="text-center mt-3">
          <a href="index.php" class="btn btn-sm btn-outline-secondary">Back to Home</a>
        </div>
      </div>
    </div>
  </div>

 <!--  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const rememberMe = document.getElementById('remember-me')?.checked || false;
        
        // Validation
        if (!email || !password) {
          alert('Please enter both email and password');
          return;
        }
        
        // Get registered users
        const users = JSON.parse(localStorage.getItem('users') || '[]');
        
        // Find matching user
        const user = users.find(u => u.email === email && u.password === password);
        
        if (user) {
          // Success - login user
          localStorage.setItem('isLoggedIn', 'true');
          localStorage.setItem('currentUser', JSON.stringify(user));
          
          alert('Login successful! Welcome back.');
          window.location.href = 'dashboard.html';
        } else {
          // Failed login
          alert('Invalid email or password. Please try again.');
        }
      });
    });
  </script> -->
</body>
</html>