@extends('layout')
@section('content')

    <div class="card mt-4">
        <div class="card-header">Contact us Page</div>
        <div class="card-body">

            <form action="{{ url('students/' . $students->id) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $students->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{ $students->address }}"
                    class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" value="{{ $students->mobile }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
