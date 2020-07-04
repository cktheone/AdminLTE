@extends('layout.master')

@section('konten')
<div class="card card-primary">
    
<table class="table table-bordered">
    <thead>                  
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
        <th>Tgl Dibuat</th>
        <th>Tgl Diupdate</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $pertanyaan->id }}</td>   
            <td> {{ $pertanyaan->judul }}</td>
            <td> {{ $pertanyaan->isi }}</td>
            <td> {{ $pertanyaan->created_at }} </td>
            <td> {{ $pertanyaan->updated_at }}</td>
        </tr> 
   </tbody>
  </table>
  
  <a href="/pertanyaan">
  <button class="btn btn-success">Kembali</button>
  </a>

@endsection