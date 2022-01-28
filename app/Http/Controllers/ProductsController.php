<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.addproducts');
    }

    public function add(Request $request)
    {
        $products = new Product();
        $products->name = $request->name;
        $products->description = $request->description;
        $products->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $destinationPath = public_path() . '/admin/products';
            $file->move($destinationPath, $fileName);
            $products->image = $fileName;
        } else {
            $products->image = 'default.png';
        };


        $products->save();
        return redirect()->route('products');
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.products.editeproducts', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $filename = $products->image;
        File::delete(public_path() . '/admin/products/' . $filename);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $destinationPath = public_path() . '/admin/products';
            $file->move($destinationPath, $fileName);
            $new = $fileName;
        } else {
            $new = 'default.png';
        };
        Product::updateOrCreate(
            [
                'id' => $id
            ],
            [
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'image' => $new,
            ]
        );
        return redirect()->route('products');
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $filename = $products->image;
        File::delete(public_path() . '/admin/products/' . $filename);
        Product::destroy($id);
        return redirect()->route('products');
    }
}
