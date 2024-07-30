@extends('layout')
@section('content')
    <div class=" d-flex justify-content-end mt-3">
        <a href="{{ route('batches.index') }}" class="btn btn-success">Back</a>
    </div>
    <div class="card mt-4">
        <div class="card-header">Batches</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $batches->name }}</h5>
                <p class="card-text">Course name : {{ $batches->course->name }}</p>
                <p class="card-text">Start Date : {{ $batches->start_date }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection
