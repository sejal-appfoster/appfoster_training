@extends('layout')
@section('content')

    <div class="card mt-4">
        <div class="card-header">Batches</div>
        <div class="card-body">

            <form action="{{ url('payments/' . $payments->id) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $payments->id }}" id="id" />
                <label>Enrollment No</label></br>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach ($enrollments as $id => $enroll_no)
                        <option value="{{ $id }}">{{ $enroll_no }}</option>
                    @endforeach
                </select><br>
                <input type="text" name="enroll_no" id="enroll_no" value="{{ $payments->enroll_no }}"
                    class="form-control"></br>
                <label>Paid Date</label></br>
                <input type="text" name="paid_date" id="paid_date" value="{{ $payments->paid_date }}"
                    class="form-control"></br>
                <label>Amount</label></br>
                <input type="text" name="amount" id="amount" value="{{ $payments->amount }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
