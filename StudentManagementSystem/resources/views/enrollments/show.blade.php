@extends('layout')
@section('content')
    <div class=" d-flex justify-content-end mt-3">
        <a href="{{ route('enrollments.index') }}" class="btn btn-success">Back</a>
    </div>

    <div class="card mt-4">
        <div class="card-header">Enrollment Page</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Enroll No : {{ $enrollments->enroll_no }}</h5>
                <p class="card-text">Batch : {{ $enrollments->batch->name }}</p>
                <p class="card-text">Student : {{ $enrollments->student->name }}</p>
                <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>
                <p class="card-text">Fee : {{ $enrollments->fee }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
