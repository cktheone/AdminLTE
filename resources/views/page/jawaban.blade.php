@extends('layout.master')

@section('konten')

<div class="card">
  <div>
  @foreach ($pertanyaan as $key => $ask)
  <h3> {{ $ask->isi }}</h3>
  @endforeach
  </div>
  <div>
  @foreach ($jawaban as $key => $data)
  <p> {{ $data->jawaban }}</p>
  @endforeach
  </div>
</div>

 
@endsection