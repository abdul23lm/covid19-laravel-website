@extends('layouts.app')

@section('content')
<br><br><br>
<section class="section-show">
<div class="container">
    <x-browse></x-browse>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">RS Rujukan: {{ $hospital->title }}</div>

                <div class="card-body">
                    <div style="height: 500px" id="mapContainer"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h3>{{ $hospital->title }}</h3>
                    <span>Telp : {{ $hospital->contact }}</span>
                    <br>
                    <p>{{ $hospital->address }}</p>
                    <div class="direction" id="summary"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

@push('script')
    <script>
        window.action = "direction"
    </script>
@endpush
