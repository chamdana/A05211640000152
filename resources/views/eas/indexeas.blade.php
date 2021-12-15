@extends('layout.bahagia')
@section('title','Daftar Nilai Kuliah')
@section('judulhalaman', 'Daftar Nilai Kuliah')
@section('konten')
	<a href="/eas/tambah"> + Tambah Data</a>

	<br/>
	<br/>

	<table border="1">
		<tr>

			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>

			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
			<td></td>
            <td></td>
		</tr>
		@endforeach
	</table>
@endsection
