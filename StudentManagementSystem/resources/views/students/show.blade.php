@extends('layout')
@section('content')
    <div class=" d-flex justify-content-end mt-3">
        <a href="{{ route('students.index') }}" class="btn btn-success">Back</a>
    </div>

    <div class="card mt-4">
        <div class="card-header">Students Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $students->name }}</h5>
                <p class="card-text">Address : {{ $students->address }}</p>
                <p class="card-text">Mobile : {{ $students->mobile }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
