<html>

<head>
    <title>TUGAS PHP FORM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        h6 {
            text-align: right;
            font-style: italic;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h6>Chamdana Taqie Samboro</h6>
        <h6>Chamdana</h6>
        <h6>05211640000152</h6>
        <h2>FORM INPUT PESERTA VAKSINASI</h2>
        <form action="hasiltugasphp">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Buku:</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukkan judul buku"
                    pattern="[A-Za-z]{10,}" title="Enter 10 character or more" name="judul" required>
            </div>
            <div class="form-group">
                <label for="nomor">No Buku:</label>
                <input type="text" class="form-control" id="nomor" placeholder="Masukkan no buku" pattern="[0-9]{5}"
                    title="Enter 5 digit" name="nomor" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Peminjaman:</label>
                <select id="jenis" name="jenis" required>
                    <option selected disabled></option>
                    <option value="biasa">Biasa</option>
                    <option value="kilat">Kilat</option>
                    <option value="lama">Lama</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Peminjaman:</label>
                <input type="date" class="form-control" id="tanggal" placeholder="Masukkan tanggal peminjaman"
                    name="tanggal" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-success">Reset</button>
        </form>
    </div>
</body>

</html>
