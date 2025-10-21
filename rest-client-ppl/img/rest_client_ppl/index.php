<?php
// load config.php
include("config.php");

// api_key newsapi.org
$api_key = "76af0d7a5910407cac2b1c262f5ad16a";

// ambil data headline teknologi di US
$url = "https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=" . $api_key;

// ambil data
$data = http_request_get($url);

// ubah json ke array
$hasil = json_decode($data, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>rest client ppl</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">rest client ppl</a>
</nav>

<div class="container" style="margin-top: 75px;">
  <div class="row">
    <!-- looping hasil data di array article -->
    <?php foreach ($hasil['articles'] as $index => $row): ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="<?php echo $row['urlToImage']; ?>" class="card-img-top" height="180px">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title']; ?></h5>
            <p class="card-text"><i>Oleh <?php echo $row['author'] ?: 'Tidak diketahui'; ?></i></p>
            <a href="detail.php?index=<?php echo $index; ?>" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
