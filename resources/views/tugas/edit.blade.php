@extends('layout.bahagia')
@section('title','Edit Tugas')
@section('judulhalaman', 'Edit Tugas')
@section('konten')
	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>
	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->tugas_id }}"> <br/>
		ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $p->tugas_idpegawai }}"> <br/>
		Tanggal <input type="date" required="required" name="tanggal" value="{{ $p->tugas_tanggal }}"> <br/>
		Nama Tugas <textarea name="namatugas" required="required">{{ $p->tugas_namatugas }}</textarea> <br/>
		Status <input type="text" required="required" name="status" value="{{ $p->tugas_status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endforeach
@endsection
