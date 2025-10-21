<?php
include("config.php");

$api_key = "76af0d7a5910407cac2b1c262f5ad16a";
$url = "https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=" . $api_key;
$data = http_request_get($url);
$hasil = json_decode($data, true);

$index = $_GET['index'];
$article = $hasil['articles'][$index];
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $article['title']; ?></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="p-4">

  <a href="index.php" class="btn btn-secondary mb-3">← Kembali</a>

  <div class="card">
    <img src="<?php echo $article['urlToImage']; ?>" class="card-img-top" alt="image">
    <div class="card-body">
      <h2 class="card-title"><?php echo $article['title']; ?></h2>
      <p><small><i>Oleh <?php echo $article['author'] ?: 'Tidak diketahui'; ?> — <?php echo $article['publishedAt']; ?></i></small></p>
      <p class="card-text"><?php echo $article['content'] ?: 'Tidak ada konten lengkap.'; ?></p>
      <a href="<?php echo $article['url']; ?>" target="_blank" class="btn btn-success">Baca di Sumber Asli</a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
