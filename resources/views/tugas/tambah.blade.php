<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Tanggal <input type="date" name="tanggal" required="required"> <br/>
		Nama Tugas <textarea name="namatugas" required="required"></textarea> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
