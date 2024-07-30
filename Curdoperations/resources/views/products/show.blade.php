<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4 ">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Show Product</h3>
                    </div>
                    <div class="p-3 m-2">
                        <p><b>Name : </b>{{ $product->name }}</p>
                        <p><b>Sku : </b>{{ $product->sku }}</p>
                        <p><b>Price : </b>{{ $product->price }}</p>
                        <p><b>Description : </b> {{ $product->description }}</p>
                        <p><b>Image : </b> @if ($product->image != "")
                            <img  class="w-30 my-3" src="{{ asset('uploads/products/'.$product->image) }}" alt="">
                        @endif</p>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>