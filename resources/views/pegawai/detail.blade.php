@extends('layout.bahagia')
@section('title','Edit Pegawai')
@section('judulhalaman', 'Edit pegawai')
@section('konten')
	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
    @foreach($pegawai as $p)
<table>
    <tr>
        <td>Nama</td>
        <td>{{$p->pegawai_nama}}</td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>{{$p->pegawai_jabatan}}</td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>{{$p->pegawai_umur}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>{{$p->pegawai_alamat}}</td>
    </tr>
</table>
@endforeach
@endsection
