@extends('layouts.admin')

@section('content')
<div class="container">
    <x-hospital></x-hospital>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @foreach ($hospitals as $hospital)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $hospital->title }}
                        @if ($hospital->user_id == Auth::user()->id)
                        <form action="{{ route('hospital.destroy', $hospital->id) }}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger float-right" onclick="return confirm('are you sure?');">Delete</button>
                            <a href="{{ route('hospital.edit', $hospital->id) }}" class="btn btn-sm btn-info float-right text-white">Edit</a>
                        </form>
                        @endif
                    </h5>
                    <h6 class="card-subtitle">{{ $hospital->address }}</h6>
                    <p class="card-text">{{ $hospital->contact }}</p>
                    <a href="#" onclick="openDirection({{ $hospital->latitude }}, {{ $hospital->longitude }}, {{ $hospital->id }})" class="card-link">Direction</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center">
        {{ $hospitals->links() }}
    </div>
</div>
@endsection
