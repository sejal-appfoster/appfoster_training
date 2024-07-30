<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        return view(
            "products.index",
            [
                'products' => Product::latest()->paginate(5)
            ]
        );
    }

    public function create()
    {
        return view("products.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',

        ]);

        //upload data
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);
        $product = new Product();
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();

        return view(
            "products.index",
            [
                'products' => Product::latest()->paginate(5)
            ]
        );
    }

    public function edit($id)
    {
        \Log::info($id);
        $product = Product::where('id', $id)->first();
        if($product) {
            return view('products.edit', ['product' => $product]);
        }
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',

        ]);

        $product = Product::find($id);


        if ($product) {
            if (isset($request->image)) {
                $imageName = time() . '.' . $request->request->image->extension();
                $request->image->move(public_path('products'), $imageName);
                $product->image = $imageName;
            }

            $product->name = $request->name;
            $product->description = $request->description;

            $product->save();

            return back()->withSuccess('Product Updated!!!');
        }
        return back();
    }

    public function destory($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted!!!');
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        return view('products.show', ['product' => $product]);
    }
}
