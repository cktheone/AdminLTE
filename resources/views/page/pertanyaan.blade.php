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
<div class=" card card-primary col-sm-12">
  <div class="card-header">
    <h3 class="card-title">TABEL TANYA JAWAB</h3>
  </div>
<table class="table table-bordered">
    <thead>                  
      <tr>
        <th style="width: 10px">#</th>
        <th>No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
        <th>Jawab</th>
        <th>Lihat Jawaban</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($ask as $key => $data)
        <tr>
          <td>  
          <div class="btn-group">
            <a href="{{ url('/pertanyaan/'.$data->id) }}"><button class="btn btn-sm btn-info"> Show</button>
            </a>
            <a href="{{ url('/pertanyaan/'. $data->id.'/edit') }}"><button class="btn btn-sm btn-warning"> Edit</button>
              </a>
            <form action="{{ url('/pertanyaan/'.$data->id) }}" method="post" style="display: inline">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <button class="btn btn-sm btn-danger" type="submit"> <I class="fas fa-trash"></I></button>
            </form>
          </div>
        </td>    
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
</div>
@endsection