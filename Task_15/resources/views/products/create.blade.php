@extends('layouts.app')

@section('main')
    <div class="container">
       <div class="row-text-algin-center" >
            <div class="col-sm-8">
                <div class="card mt-3 p-3" >
                <form method="POST" action="/products/store" enctype="multipart/form-data" >
                @csrf
                <div class="form-group"  >
                    <label>Name</label><br>
                    <input type="text" name="name" 
                    class="form-control form-control-sm"
                    value="{{ old('name')}}"
                    />
                    @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" row="4"
                    value="{{ old('description')}}"
                    ></textarea>
                    @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description')}}</span>
                    @endif
                </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image"
                 class="form-control"
                 value="{{ old('image')}}"
                 />
                @if($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image')}}</span>
                    @endif
            </div>

            <div>
                <button type="submit"  class="btn-btn-dark">Submit</button>
            </div>
            </form>
            </div>
        </div>
       </div>
    </div>

@endsection

</body>
</html>