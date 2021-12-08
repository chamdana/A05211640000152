@extends('layout.bahagia')
@section('title','Tambah Tugas')
@section('judulhalaman', 'Tambah Tugas')
@section('konten')
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
@endsection
