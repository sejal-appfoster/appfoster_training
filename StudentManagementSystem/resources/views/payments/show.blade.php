@extends('layout')
@section('content')
    <div class=" d-flex justify-content-end mt-3">
        <a href="{{ route('payments.index') }}" class="btn btn-success">Back</a>
    </div>
    <div class="card mt-4">
        <div class="card-header">Batches</div>
        <div class="card-body">
            <div class="card-body">
                <p class="card-text">Enrollment <Noscript></Noscript> : {{ $payments->enrollment->enroll_no }}</p>
                <p class="card-text">Paid Date: {{ $payments->paid_date }}</p>
                <p class="card-text">Amount : {{ $payments->amount }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection
