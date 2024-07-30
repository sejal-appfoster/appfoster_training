@extends('layout')
@section('content')
    <div class=" d-flex justify-content-end mt-3">
        <a href="{{ route('courses.index') }}" class="btn btn-success">Back</a>
    </div>
    <div class="card mt-4">
        <div class="card-header">Course Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $courses->name }}</h5>
                <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
                <p class="card-text">Duration : {{ $courses->duration }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection
