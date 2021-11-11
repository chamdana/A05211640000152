<html>

<head>
    <title>ETS</title>
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
        <form action="https://www.bukalapak.com">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Peserta:</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" pattern="[A-Za-z]{10,}"
                    title="Enter 10 alphabet or more" name="nama" required>
            </div>
            <div class="form-group">
                <label for="NIK">NIK:</label>
                <input type="text" class="form-control" id="NIK" placeholder="Masukkan NIK" pattern="[0-9]{16}"
                    title="Enter 16 digit" name="NIK" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Vaksin:</label>
                <select id="jenis" name="jenis" required>
                    <option selected disabled></option>
                    <option value="AZ">AZ</option>
                    <option value="Sinovac">Sinovac</option>
                    <option value="Moderna">Moderna</option>
                </select>
            </div>
            <div class="form-group">
                <label for="batch">No Batch:</label>
                <input type="text" class="form-control" id="batch" placeholder="Masukkan nomor batch"
                    pattern="[a-zA-Z0-9]{0,}" title="Enter only alphabet or digit" name="batch" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-success">Reset</button>
        </form>
    </div>
</body>

</html>
