@extends('layout.master')

@section('konten')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">SILAHKAN BERTANYA</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ url('/pertanyaan/'.$pertanyaan->id) }}" method="POST">
        {{ csrf_field() }}
       <div class="card-body">
        <div class="form-group">
          <input type="hidden" name="_method" value="PUT">
          <label for="exampleInputEmail1">Judul Pertanyaan</label>
          <input type="text" class="form-control" id="" name="judul" value="{{ $pertanyaan->judul }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Isi Pertanyaan</label>
          <textarea class="form-control" rows="5" name="isi">{{ $pertanyaan->isi }}</textarea>
        </div>
        <input hidden name="created_at" value="{{  $pertanyaan->created_at }}">
        <input hidden name="updated_at" value="{{ \Carbon\Carbon::now() }}">
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
 
</div>
@endsection