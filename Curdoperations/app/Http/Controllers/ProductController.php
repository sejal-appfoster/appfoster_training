<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //for show product page
    public function index(){
        $products=Product::orderBy('created_at','DESC')->get();
       return view('products.list',['products' =>$products]);
    }

    //show create product page
    public function create(){

        return view('products.create');
    }

    //store a product in db
    public function store(Request $request){
        $rules=[
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',

        ];

        if($request->image != ""){
            $rules['image']='image';
        }

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        //product to db
        $product= new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if($request->image!=""){
        //image store
        $image=$request->image;
        $ext= $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext; //unique name

        //save im product directory
        $image->move(public_path('uploads/products'),$imageName);

        //save to db
        $product->image = $imageName;
        $product->save();
        }

        return redirect()->route('products.index')->withErrors('success','Product added successfully');

    }

    //show edit page
    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.edit',['product'=>$product]);
    }

    //show update page
    public function update($id,Request $request){
        $product = Product::findOrFail($id);
        $rules=[
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',

        ];

        if($request->image != ""){
            $rules['image']='image';
        }

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.edit',$product->id)->withInput()->withErrors($validator);
        }

        //product to db
        $product= new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if($request->image!=""){
        //delete old image
        File::delete(public_path('upload/products/'.$product->image));

        //image store
        $image=$request->image;
        $ext= $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext; //unique name

        //save im product directory
        $image->move(public_path('uploads/products'),$imageName);

        //save to db
        $product->image = $imageName;
        $product->save();
        }

        return redirect()->route('products.index')->withErrors('success','Product updated successfully');


    }

    //show delete page
    public function destory($id){
        $product = Product::findOrFail($id);

        File::delete(public_path('upload/products/'.$product->image));

        $product->delete();

        return redirect()->route('products.index')->withErrors('success','Product delete successfully');

    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);


    }
}
