<?php 
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_SESSION['alert'])) {
    $alert = $_SESSION['alert'];
    echo "<script>alert('{$alert['message']}');</script>";
    unset($_SESSION['alert']);
}
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Browse - Galeri Baca</title>
  <link rel="icon" type="img/book_information_learning_info_icon_262073.webp" href="assets/img/book_information_learning_info_icon_262073.webp">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="addons/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="addons/datatables/datatables.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>

<body style="background-color: rgb(243, 243, 243);">
  <?php include 'components/navbar.php'; ?>

  <section class="hero">
    <div class="container">
      <h1 class="display-4">Jelajahi Galeri Baca</h1>
      <p class="lead">Temukan beragam bacaan favoritmu di satu tempat!</p>
    </div>
  </section>
 
  <div class="container my-4 border rounded p-3">
    <div class="row">
      <!-- Left side column for image and buttons -->
      <div class="col-md-3 d-flex flex-column align-items-center gap-2">
        <div class="border rounded shadow-sm mb-2" id="imgThumb">
          <!-- <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/8df6d073-e658-4c7a-9703-1dabc226769f.png" alt="Book page scan in a white bordered frame with shadow" class="img-fluid rounded" /> -->
        </div>
        <form action="_flagRead.php" class="w-100" method="get" accept-charset="utf-8">
          <input type="hidden" name="book_name">
          <input type="hidden" name="author">
          <input type="hidden" name="genre">
          <input type="hidden" name="imagepath">
          <input type="hidden" name="book_id">
          <button type="submit" class="btn btn-primary w-100">Baca </button>
        </form>

        <form action="_flagTandai.php" class="w-100" method="get" accept-charset="utf-8">
          <input type="hidden" name="book_name">
          <input type="hidden" name="author">
          <input type="hidden" name="genre">
          <input type="hidden" name="imagepath">
          <input type="hidden" name="book_id">
          <button type="submit" class="btn btn-primary w-100">Tandai </button>
        </form>

        <div class="text-center">
          <div class="d-flex justify-content-center gap-1 mb-3" aria-label="Star rating: no stars selected">
            <span class="border rounded" style="width: 20px; height: 20px;"></span>
            <span class="border rounded" style="width: 20px; height: 20px;"></span>
            <span class="border rounded" style="width: 20px; height: 20px;"></span>
            <span class="border rounded" style="width: 20px; height: 20px;"></span>
            <span class="border rounded" style="width: 20px; height: 20px;"></span>
          </div>

          <div class="d-flex justify-content-around w-100 small text-muted mb-3">
            <div class="text-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l2.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9 8.5 8.5 0 0 1 7.6 4.7z"/></svg></div>
              <div>Review</div>
            </div>
            <div class="text-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></div>
              <div>Notes</div>
            </div>
            <div class="text-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7"/><polyline points="16 6 12 2 8 6"/><line x1="12" y1="2" x2="12" y2="15"/></svg></div>
              <div>Share</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right side content -->
      <div class="col-md-9">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <h2 class="fw-bold lh-lg" id="title"></h2>
            <p class="mb-1">by <span id="author"></span></p>

            <p class="mb-3"><strong id="wantToRead">#</strong> Want to read</p>
            <p class="mb-3"><strong id="currentlyReading">#</strong> Currently reading</p>
            <p class="mb-3"><strong id="alreadyRead">#</strong> Already read</p>

            <div class="row text-center mb-3">
              <div class="col-md-6 border rounded py-3">
                <div class="text-muted small mb-1">Publish Date</div>
                <div class="fw-bold" id="publishDate">#</div>
              </div>
              <div class="col-md-6 border rounded py-3">
                <div class="text-muted small mb-1">Publisher</div>
                <div id="publishers">#</div>
              </div>
            </div>
            <p>
              <strong>SUBJECTS</strong> <span id="subjects"></span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'components/footer.php' ?>
  <script>
        let id = "<?= $_GET['id'] ?>";
        console.log(id);

        $.ajax({
          url: `https://openlibrary.org/search.json?q=key:%2Fworks%2F${id}`,
          async:true,
          method:'get',
          dataType: 'json',
          success: function(data) {
            console.log('search', data);
            data?.docs?.forEach((item) => {
              $('#title').html(item.title);
              $('#author').html((item.author_name ? item.author_name.join() : item.author_name) || '');

              $('input[name=book_name]').val(item.title);
              $('input[name=author]').val((item.author_name ? item.author_name.join() : item.author_name) || '');
              $('input[name=imagepath]').val(item.cover_edition_key);
              $('input[name=book_id]').val(`${id}`);


              let imageUrl = item.cover_edition_key ? 'https://covers.openlibrary.org/b/OLID/'+`${item.cover_edition_key}`+'-M.jpg' : 'https://placehold.co/150x250';
              const $img = $('<img>').addClass('img-fluid rounded').attr('src', imageUrl);
              $('#imgThumb').append($img);

            })
          },
          error: function(xhr, status, error) {
              console.error('Error fetching search:', error);
          }
        });

        $.ajax({
          url: `https://openlibrary.org/works/${id}.json`,
          async:true,
          method:'get',
          dataType: 'jsonp',
          jsonp: 'callback',
          success: function(data) {
            console.log('work', data);
            $('#publishDate').html(data?.first_publish_date);
              $('#subjects').html(data.subjects.join());
              $('input[name=genre]').val(data.subjects.join());
          },
          error: function(xhr, status, error) {
              console.error('Error fetching works:', error);
          }
        });

        $.ajax({
          url: `https://openlibrary.org/works/${id}/bookshelves.json`,
          async:true,
          method:'get',
          dataType: 'jsonp',
          jsonp: 'callback',
          success: function(data) {
            console.log('bookshelves', data);
              $('#wantToRead').html(data?.counts?.want_to_read);
              $('#currentlyReading').html(data?.counts?.currently_reading);
              $('#alreadyRead').html(data?.counts?.already_read);
          },
          error: function(xhr, status, error) {
              console.error('Error fetching bookshelves:', error);
          }
        });

        $.ajax({
          url: `https://openlibrary.org/books/${id}.json`,
          async:true,
          method:'get',
          dataType: 'jsonp',
          jsonp: 'callback',
          success: function(data) {
            console.log('books', data);
              
              $('#publishers').html(data?.publishers);
          },
          error: function(xhr, status, error) {
              console.error('Error fetching book:', error);
          }
        });


  </script>

</body>

</html>