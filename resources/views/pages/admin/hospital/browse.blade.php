@extends('layouts.admin')

@section('content')
<div class="container">
    <x-hospital></x-hospital>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cari Rumah Sakit Rujukan</div>

                <div class="card-body">
                    <div style="height: 500px" id="mapContainer"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        window.action = "browse"
    </script>
@endpush
