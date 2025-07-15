<?php session_start();?>

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
      <p class="lead">Temukan karya dari berbagai kategori dan fandom</p>
    </div>
  </section>

  <div class="container my-5">

    <div class="browse-section">
      <h2 class="browse-title">Rekomendasi</h2>
      <div id="rekomendasiArea" class="d-flex overflow-auto pb-2 gap-3">
                  
      </div>
    </div>

    <!-- Browse by Tags -->
    <div class="browse-section">
      <h2 class="browse-title">Browse</h2>

      <form id="searchForm">
        <div class="input-group mb-3">
          <select class="form-select" id="filter_type" style="width: 10%;" required>
            <option value="title">Title</option>
            <option value="author">Author</option>
            <option value="subject">Subject</option>
          </select>
          <input type="text" id="filter_term" placeholder="term " class="form-control" style="width: 80%;" required>
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
      </form>

      <table id="bookTable" class="table table-sm table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th data-class="authors">Author</th>
                <th data-class="action" width="10">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data will be populated here -->
        </tbody>
    </table>

      
    </div>

  </div>

  <?php include 'components/footer.php' ?>
  <script src="addons/datatables/datatables.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">
       
    $(document).ready(function() {

      $('#bookTable').DataTable({
        layout: {
          topStart: null,
          topEnd: null,
          bottomStart: 'info',
          bottomEnd: 'paging'
        }
      });

      $.ajax({
        url: `https://openlibrary.org/search.json?q=Art Animal Children&fields=title,key,cover_edition_key,availability&mode=ebooks&sort=random&limit=10`,
        async:true,
        method:'get',
        dataType: 'json',
        success: function(data) {
          console.log(data);
          data.docs.forEach((item) => {
            let imageUrl = item.cover_edition_key ? 'https://covers.openlibrary.org/b/OLID/'+`${item.cover_edition_key}`+'-M.jpg' : 'https://placehold.co/150x250';
            const $div = $('<a>').addClass('col-2').css({
              'background-image' : `url(${imageUrl})`,
              'height' : '250px',
              'background-repeat': 'no-repeat',
              'background-size': 'cover'
            }).attr('href', `bookDetail.php?id=${item.key.split('/')[2]}`)
            .attr('title', `${item.title}`);

            $('#rekomendasiArea').append($div);
          });
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
      });

      $('#searchForm').on('submit',function(event) {
        event.preventDefault();

        let type = $('#filter_type').val();
        let term = $('#filter_term').val();

        var urlPath = '';

        if(type == 'author'){
          urlPath = "https://openlibrary.org/search.json?q= author_name:"+term + "&fields=title,author_name,key,availability&sort=random&limit=20";
        }else if(type == 'subject'){
          urlPath = "https://openlibrary.org/search.json?subject="+term+ "&fields=title,author_name,key,availability&sort=random&limit=20";
        }else{
          urlPath = "https://openlibrary.org/search.json?title="+term + "&fields=title,author_name,key,availability&sort=random&limit=20";
        }

        console.log('fetching....', urlPath);

        $('#bookTable tbody').html('<tr><td colspan="5" style="text-align: center;">Loading data...</td></tr>');
        $.ajax({
            url: urlPath,
            async:false,
            method:'get',
            dataType: 'json',
            processing: true,
            cache:false,
            success: function(data) {

              // Destroy existing DataTable if it exists
              if ($.fn.DataTable.isDataTable('#bookTable')) {
                  $('#bookTable').DataTable().destroy();
              }

              console.log(data)
              $('#bookTable').DataTable({
                  data: data.docs,
                  columns: [
                      { data: 'title' },
                      { data: 'author_name' },
                      { data: 'key' }
                  ],
                  columnDefs: [
                    {"targets": 1, "render": function (data, type, row) {
                      return data ? data.join() : data || '';
                      }
                    },
                    {"targets": 2, "render": function (data, type, row) {
                        const id_array = data.split('/');
                        const id = id_array[id_array.length - 1];
                        return '<a href="bookDetail.php?id='+id+'" title="open detail" class="text-decoration-none">open</a>'
                      }
                    }
                  ],
                  layout: {
                      topStart: null,
                      topEnd: null,
                      bottomStart: 'info',
                      bottomEnd: 'paging'
                  }
              });
            },
            error: function(xhr, status, error) {
                $('#bookTable tbody').html(`<tr><td colspan="5" style="text-align: center; color: red;">Error loading data: ${error}</td></tr>`);
                console.error('Error fetching data:', error);
            }
        });

        return false;
      })
 

    })
  </script>

</body>

</html>