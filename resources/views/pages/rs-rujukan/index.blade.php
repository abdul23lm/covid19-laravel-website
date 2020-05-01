@extends('layouts.app')

@section('content')


<section class="section-rs" id="data">
    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="col text-center section-rs-heading">
          <h2>RS Rujukan</h2>
          <p>
            Beberapa rumah sakit rujukan di kabupaten karawang
            <br />
            untuk penanganan COVID-19
          </p>
        </div>
      </div>
    </div>

<div class="container">
    <x-browse></x-browse>
    <div class="row text-center section-rs-content justify-content-center">
            @foreach ($hospitals as $hospital)
            <div class="justify-content-center" data-aos="fade-up">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-text">{{ $hospital->title }}</h2>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 400px">
                        <ol class="carousel-indicators">
                          @foreach ($hospital->photos as $key => $photo)
                          <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                          @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($hospital->photos as $key => $photo)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $photo->path) }}" class="d-block w-100">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <br>
                    <a  class="btn btn-direction px-4 mt-2" href="#" onclick="openDirection({{ $hospital->latitude }}, {{ $hospital->longitude }}, {{ $hospital->id }})" class="card-link">Direction</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center">
        {{ $hospitals->links() }}
    </div>
</div>
</section>
<br><br><br><br>
@endsection
