<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CURD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="bg-dark py-3">
      <h1 class="text-white text-center">Laravel CURD</h1>
    </div>
    <div class="container">
      <div class="col-md-10 d-flex justify-content-end mt-4">
        <a href="{{route('products.index')}}" class="btn btn-dark">Back</a>
    </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-10">
          <div class="card borde-0 shadow-lg my-4">
            <div class="card-header bg-dark">
              <h3 class="text-white">Create Product</h3>
            </div>
            <form action="{{route("products.store")}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="card-body">
              <div class="mb-3">
                <label for="" class="form-label h5">Name</label>
                <input type="text" class="@error('name') is-invalid @enderror form-control-lg form-control" placeholder="Name"
                name ="name" value="{{old('name')}}">
                @error('name')
                  <p class="inavlid-feedback">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label for="" class="form-label h5">Sku</label>
                <input type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="Sku"
                name ="sku" value="{{old('sku')}}">
                @error('sku')
                <p class="inavlid-feedback">{{ $message }}</p>
              @enderror
              </div>
              <div class="mb-3">
                <label for="" class="form-label h5">Price</label>
                <input type="text" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price"
                name ="price" value="{{old('price')}}">
                @error('price')
                <p class="inavlid-feedback">{{ $message }}</p>
              @enderror
              </div>
              <div class="mb-3">
                <label for="" class="form-label h5">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="5" 
                placeholder="Description">{{old('description')}}</textarea>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control form-control-lg" placeholder="Image"
                name ="image">
              </div>
              <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>