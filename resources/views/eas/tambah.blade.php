@extends('layout.bahagia')
@section('title','Tambah Nilai')
@section('judulhalaman', 'Tambah Nilai')
@section('konten')
	<a href="/eas"> Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post">
		{{ csrf_field() }}
		NRP <input type="text" name="NRP" required="required"> <br/>
		Nilai Angka <input type="number" name="NilaiAngka" required="required"> <br/>
		SKS <input type="number" name="SKS" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
