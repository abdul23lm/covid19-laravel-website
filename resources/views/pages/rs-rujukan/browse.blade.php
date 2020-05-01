@extends('layouts.app')

@section('content')
<br><br><br>
<section class="section-browse">
<div class="container">
    <x-navigation></x-navigation>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mapping RS Rujukan Karawang</div>

                <div class="card-body">
                    <div style="height: 500px" id="mapContainer"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

@push('script')
    <script>
        window.action = "browse"
    </script>
@endpush
