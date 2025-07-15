<?php session_start(); ?>


<?php
// Include the database connection
require_once 'components/db_connection.php';

error_reporting(E_ALL); // Report all types of errors
ini_set('display_errors', 1); // Display errors on the screen

if (isset($_SESSION['alert'])) {
  $alert = $_SESSION['alert']['message']; ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php echo $alert; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php unset($_SESSION['alert']);
} ?>

<?php

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data and sanitize
  $username = htmlspecialchars($_POST['username']);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $firstName = htmlspecialchars($_POST['firstName']);
  $lastName = htmlspecialchars($_POST['lastName']);
  $interests = implode(", ", $_POST['interest']);

  try {
    // Get database connection
    $connection = getDbConnection();

    // Prepare the insert statement
    $stmt = $connection->prepare("INSERT INTO users (username, email, password, firstName, lastName, interests) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $email, $password, $firstName, $lastName, $interests);

    // Execute the statement
    if ($stmt->execute()) {
      // Success - set alert message and redirect
      $_SESSION['user'] = $username;
      $_SESSION['alert'] = ['type' => 'success', 'message' => 'Registration successful!'];
      header("Location: index.php");
      exit();
    } else {
      // Error occurred during execution
      throw new Exception("Error executing query: " . $stmt->error);
    }
  } catch (Exception $e) {
    // Set error message
    $_SESSION['alert'] = ['type' => 'error', 'message' => 'Registration failed: ' . $e->getMessage()];
    echo $e->getMessage();
    // Redirect back to form or error page
    header("Location: signup.php");
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
  <title>Galeri Baca - Sign Up</title>
  <link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style-signup.css">

</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1 class="text-center mb-4">Galeri Baca</h1>

        <div class="card">
          <div class="card-header text-center">Create Your Account</div>
          <div class="card-body">
            <form id="signupForm" class="signup-form" action="" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                    <label for="firstName">First Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                    <label for="lastName">Last Name</label>
                  </div>
                </div>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                <label for="username">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength="8" required>
                <label for="password">Password</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="passwordConfirmation" placeholder="Password Confirmation" minlength="8" required>
                <label for="passwordConfirmation">Confirm Password</label>
              </div>

              <div class="mb-3">
                <p class="fw-bold">Your reading interests (select all that apply):</p>
                <?php $interestOption = ["Fiction", "Non-Fiction", "Romance", "Mystery", "Science Fiction", "Fantasy", "Biography", "History", "Self-Help", "Horror", "Comics", "Poetry"]; ?>
                <?php for ($i = 0; $i < count($interestOption); $i++) { ?>
                  <input type="checkbox" class="btn-check" id="<?= $interestOption[$i] ?>" value="<?= $interestOption[$i] ?>" name="interest[]" autocomplete="off" require>
                  <label class="btn btn-sm btn-outline-secondary rounded-pill mb-2" for="<?= $interestOption[$i] ?>"><?= $interestOption[$i] ?></label>
                <?php } ?>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms-agree" title="You must agree to the Terms & Conditions" required>
                <label class="form-check-label" for="terms-agree">
                  I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>
                </label>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-custom btn-lg">Create Account</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <p class="mb-0">Already have an account? <a href="login.php">Login</a></p>
          </div>
        </div>

        <div class="text-center mt-3">
          <a href="index.php" class="btn btn-sm btn-outline-secondary">Back to Home</a>
        </div>
      </div>
    </div>
  </div>




  <script src="addons/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>
  <script src="addons/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>

  <script>
    $(document).ready(function() {
      $('#signupForm').on('submit', function(event) {
        event.preventDefault();

        let password = $('#password').val();
        let passwordConfirmation = $('#passwordConfirmation').val();
        console.log(password, passwordConfirmation)
        if (password != passwordConfirmation) {
          alert("Passwords doesn't match")
        } else {
          $(this).unbind('submit').submit();
        }
      })
    })
  </script>

  <!--  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      const fandoms = document.querySelectorAll('.fandom-badge');
      
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const username = document.getElementById('username').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const termsAgree = document.getElementById('terms-agree').checked;
        
        // Selected interests
        const interests = [];
        document.querySelectorAll('.fandom-badge.active').forEach(badge => {
          interests.push(badge.textContent.trim());
        });
        
        // Validation
        if (!firstName || !lastName || !username || !email || !password) {
          alert('Please fill in all required fields');
          return;
        }
        
        if (password.length < 8) {
          alert('Password must be at least 8 characters long');
          return;
        }
        
        if (password !== confirmPassword) {
          alert('Passwords do not match');
          return;
        }
        
        if (!termsAgree) {
          alert('You must agree to the Terms & Conditions');
          return;
        }
        
        // Check if email already exists
        const users = JSON.parse(localStorage.getItem('users') || '[]');
        if (users.some(user => user.email === email)) {
          alert('An account with this email already exists');
          return;
        }
        
        if (users.some(user => user.username === username)) {
          alert('This username is already taken');
          return;
        }
        
        // Create new user object
        const newUser = {
          firstName,
          lastName,
          username,
          email,
          password,  // In a real app, this should be hashed!
          interests,
          createdAt: new Date().toISOString()
        };
        
        // Add to users array
        users.push(newUser);
        localStorage.setItem('users', JSON.stringify(users));
        
        // Auto login
        localStorage.setItem('isLoggedIn', 'true');
        localStorage.setItem('currentUser', JSON.stringify(newUser));
        
        alert('Account created successfully! Welcome to Galeri Baca.');
        window.location.href = 'dashboard.html';
      });
      
      // Toggle active class on fandom badges
      fandoms.forEach(badge => {
        badge.addEventListener('click', function() {
          this.classList.toggle('active');
        });
      });
    });
  </script> -->
</body>

</html>