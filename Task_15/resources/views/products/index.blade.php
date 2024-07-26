@extends('layouts.app')
@section('main')
    <div class="container ">
        <div class='text-right'>
            <a href="products/create" class="btn btn-primary mt-2">New Product</a>
        </div>
    </div>


    <div class="container ">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
        </thead>
    <tbody>
        @foreach($products as $product)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>
          <a href="products/{{$product->name}}/show"  class="text-dark" >{{ $product ->name}}</a></td>
        <td><img src="products/{{$product->image}}" class="rounded-circle"
        width="30" height="30" />
        </td>
        <td>
            
            
            <form  method="POST"  action="products/{{$product->id}}/delete">
                @csrf
                <a href="products/{{$product->id}}/edit" class="btn btn-success
                btn-sm">Edit</a>
                @method("DELETE")
                <button type="submit" class="btn btn-danger btn-sm"
                >Delete</button>
            </form>
        </td>
      </tr>
     @endforeach
    </tbody>
    
  </table>
  {{$products->links()}}
  </div>

@endsection
</body>
</html>