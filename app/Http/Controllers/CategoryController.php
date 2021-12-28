<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin/category/category', compact('category'));
    }
    public function create()
    {
        return view('admin/category/addcategory');
    }

    public function add(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;


        $category->save();
        return redirect()->route('category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin\category\editecategory', compact('category'));
    }

    public function update(Request $request, $id)
    {

        Category::updateOrCreate(
            [
                'id' => $id
            ],
            [
                'name' => $request->name,
            ]
        );
        return redirect()->route('category');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('category');
    }
}
