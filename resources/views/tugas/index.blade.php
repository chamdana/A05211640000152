@extends('layout.bahagia')
@section('title','Daftar Tugas')
@section('judulhalaman', 'Daftar Tugas')
@section('konten')
	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->tugas_idpegawai }}</td>
			<td>{{ $p->tugas_tanggal }}</td>
			<td>{{ $p->tugas_namatugas }}</td>
			<td>{{ $p->tugas_status }}</td>
            <td>
				<a href="/tugas/edit/{{ $p->tugas_id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->tugas_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
