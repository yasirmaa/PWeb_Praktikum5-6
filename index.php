<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP STRING DAN FORM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark shadow-sm w-100">
    <div class=" container">
      <a class="navbar-brand" href="#">
        <img src="ymicon.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
        Yasirm
      </a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="index.php">Konversi</a>
        </div>
      </div>
  </nav>

  <div class="container input d-flex justify-content-center align-items-center shadow">
    <div class="row">
      <div class="col text-center">
        <h3>Program Konversi Nilai</h3>
        <form method="post">
          <label for="nama">Nama &nbsp;: </label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan Nama"><br>
          <label for="grade">Nilai &nbsp;&nbsp;&nbsp;&nbsp;: </label>
          <input type="number" id="grade" name="nilai" min="0" max="100" placeholder="Masukkan Nilai"><br>
          <button type="submit" class="d-flex align-items-center">submit</button>
        </form>
      </div>
    </div>
  </div>
  <div class="container output d-flex justify-content-center align-items-center shadow">
    <div class="row">
      <div class="col text-center">
        <h3>HASIL</h3>
        <?php
        if (isset($_POST["nilai"])) {
          $nilai = $_POST["nilai"];
          $nama = $_POST["nama"];
          $grade;
          if ($nilai >= 81 && $nilai <= 100) {
            $grade = "A";
          } else if ($nilai >= 71) {
            $grade = "AB";
          } else if ($nilai >= 66) {
            $grade = "B";
          } else if ($nilai >= 60) {
            $grade = "BC";
          } else if ($nilai >= 56) {
            $grade = "C";
          } else if ($nilai >= 41) {
            $grade = "D";
          } else {
            $grade = "E";
          }
          if (empty($nama)) {
            echo "Nama Masih Kosong! <br>Coba Masukkan Ulang";
          } else {
            if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
              echo "Nama Tidak Valid! <br>Coba Masukkan Ulang";
            } else {
              echo "<p class='tampil'>Nama &nbsp;&nbsp;&nbsp;: $nama</p>";
              echo "<p class='tampil'>Nilai $nilai, dengan predikat $grade</p>";
            }
          }
        }
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>