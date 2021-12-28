<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::all();
        return view('admin/content/content', compact('content'));
    }
    public function create()
    {
        return view('admin/content/addcontent');
    }

    public function add(Request $request)
    {
        $content = new Content();
        $content->name = $request->name;
        $content->detail = $request->detail;


        $content->save();
        return redirect()->route('content');
    }

    public function edit($id)
    {
        $content = Content::find($id);
        return view('admin\content\editecontent', compact('content'));
    }

    public function update(Request $request, $id)
    {

        Content::updateOrCreate(
            [
                'id' => $id
            ],
            [
                'name' => $request->name,
                'detail' => $request->detail,
            ]
        );
        return redirect()->route('content');
    }

    public function destroy($id)
    {
        Content::destroy($id);
        return redirect()->route('content');
    }
}
