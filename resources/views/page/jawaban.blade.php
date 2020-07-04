@extends('layout.master')

@section('konten')
<div class="row">
  <div class="col-md-12">
    <div class="timeline">
      <div>
        <i class="fas fa-user bg-green"></i>
        <div class="timeline-item">
          <span class="time"><i class="fas fa-clock"></i> {{ $pertanyaan->updated_at }}</span>
          <h3 class="timeline-header"><a href="#"> {{ $pertanyaan->judul }}</a></h3>

          <div class="timeline-body">
            {{ $pertanyaan->isi }}
          </div>
          <div class="timeline-footer">
            <a class="btn btn-primary btn-sm" href="{{ url('/pertanyaan/'.$pertanyaan->id) }}">Read more</a>
          </div>
        </div>
      </div>
      <div>
        @foreach ($jawaban as $key => $data)
        <i class="fas fa-comments bg-yellow"></i>
        <div class="timeline-item">
          <span class="time"><i class="fas fa-clock"></i> {{ $data->updated_at }}</span>
          <h3 class="timeline-header no-border"> {{ $data->jawaban }}</h3>
        </div>
        @endforeach
      </div>
 
  {{-- <div>
  
    @foreach ($jawaban as $key => $data)
  <p> {{ $data->jawaban }}</p>
  @endforeach
  </div> --}}
</div>
</div>
</div>

 
@endsection