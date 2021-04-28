@extends('layout/main')

@section('title','Ujian')

@section('container')
<div class="container">
<div class="row">
<div class="col-10">
<h1 class="mt-3">Ujian universitas bumigora</h1>

<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">mata kuliah</th>
<th scope="col">nama dosen</th>
<th scope="col">jumlah soal</th>
<th scope="col">keterangan</th>
<th scope="col">created_at</th>
<th scope="col">upload_at</th>
<th scope="col">aksi</th>
</tr>
</thead>
<tbody>
<@foreach( $ujian as $ujn )
<tr>
<th scope="row">{{ $loop->iteration }}</th>
<td>{{ $ujn->nama_mk }}</td>
<td>{{ $ujn->dosen }}</td>
<td>{{ $ujn->jumlah_soal }}</td>
<td>{{ $ujn->keterangan }}</td>
<td>{{ $ujn->created_at }}</td>
<td>{{ $ujn->upload_at }}</td>
<td>
<a href="" class="badge bg-success">edit</a>
<a href="" class="badge bg-danger">delete</a>
</td>
</tr>
@endforeach
</tbody>

</table>
</div>
</div>
</div>
@endsection