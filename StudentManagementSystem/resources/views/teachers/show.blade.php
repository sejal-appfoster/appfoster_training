@extends('layout')
@section('content')
    <div class=" d-flex justify-content-end mt-3">
        <a href="{{ route('teachers.index') }}" class="btn btn-success">Back</a>
    </div>

    <div class="card mt-4">
        <div class="card-header">Teahers Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $teachers->name }}</h5>
                <p class="card-text">Address : {{ $teachers->address }}</p>
                <p class="card-text">Mobile : {{ $teachers->mobile }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection
