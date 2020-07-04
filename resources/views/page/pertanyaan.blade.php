@extends('layout.master')

@section('konten')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">SILAHKAN BERTANYA</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ url('/pertanyaan') }}" method="POST">
        {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Judul Pertanyaan</label>
          <input type="text" class="form-control" id="" name="judul" placeholder=" Judul Pertanyaan">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Isi Pertanyaan</label>
          <textarea class="form-control" rows="5" name="isi" placeholder="Enter ..."></textarea>
        </div>
        <input hidden name="created_at" value="{{ \Carbon\Carbon::now() }}">
        <input hidden name="updated_at" value="{{ \Carbon\Carbon::now() }}">
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

<table class="table table-bordered">
    <thead>                  
      <tr>
        <th style="width: 10px">#</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
        <th>Jawaban</th>
        <th>Lihat Jawaban</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($ask as $key => $data)
        <tr>
            <td> {{ $key+1 }}</td>   
            <td> {{ $data->judul }}</td>
            <td> {{ $data->isi }}</td>
            <td> 
              <form action="{{ url('/jawaban/'.$data->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="jawaban">
                <input hidden name="votes" value="">
                <input hidden name="pertanyaan_id" value="{{ $data->id }}">
                <input hidden name="created_at" value="{{ \Carbon\Carbon::now() }}">
                <input hidden name="updated_at" value="{{ \Carbon\Carbon::now() }}">
                <button type="submit" class="btn btn-success"> jawab </button>
              </form>
            </td>
            <td> <a href="{{ url('/jawaban/'.$data->id) }}">
              <button class="btn btn-warning"> Lihat Jawaban</button>
              </a>  
            </td>
        </tr> 
        @endforeach
    </tbody>
  </table>   

@endsection