<!DOCTYPE html>
<html lang="en">
<head>
  <title>TUGAS PHP HASIL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Perpustakaan ITS</h2>
  <p>Biaya peminjaman :</p>
  <div class="alert alert-success">
    <div class="container">
        <div class="row">
            <div class="card">
                Judul Buku: <?php
                $judulbuku = $_GET["judul"];
                echo $judulbuku;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="card">
                Tanggal pinjam: <?php
                echo $_GET["tanggal"];
                ?>
            </div>
        </div>
        <div class="row">
            <div class="card">
                Biaya sewa: <?php
                $jenispinjam = $_GET["jenis"];
                if($jenispinjam == "biasa"){
                    echo "Rp 10.000";
                }
                else if($jenispinjam == "kilat"){
                    echo "Rp 15.000";
                }
                else{
                    echo "Rp 20.000";
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
