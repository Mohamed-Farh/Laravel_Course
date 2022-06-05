<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Category::get();

       return view('Backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'text'=>   'required|min:10' ,
            'image' => 'required',
            'status' => 'required'
        ]);

        $input['name']      = $request->name;
        $input['text']      = $request->text;
        $input['status']    = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path =('images/categories');
            $image->move($path, $name);
            $input['image']  = $name;
        }
        Category::create($input);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'      => 'nullable|min:3',
            'text'      => 'nullable|min:10' ,
            'image'     => 'nullable',
        ]);

        $category = Category::where('id', $request->id)->first();

        $input['name']      = $request->name;
        $input['text']      = $request->text;
        $input['status']    = $request->status;

        // To Store One Photo For Home Page
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path =('images/categories');

            if ( $image->move($path, $name) ){
                if($category->image){
                    $old_photo = $category->image; //get old photo
                    unlink('images/categories/'.$old_photo);  //delete old photo from folder
                }
                $input['image']  = $name;
            }
        }
        $category->update($input);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $category = Category::where('id', $request->id)->first();
        if($category->image)
        {
            if (File::exists('images/categories/' .$category->image) ){
                unlink('images/categories/'.$category->image);
            }
        }
        $category->delete();
        return redirect()->back();
    }
}
