<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category', 'user')->get();

        $categories = Category::where('status', true)->get(['id', 'name']);

        $users = User::get(['id', 'name']);

        return view('Backend.products.index', compact('products', 'categories', 'users'));
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
            'name'          => 'required|min:3',
            'text'          =>   'required|min:10',
            'category_id'   => 'required|exists:categories,id',
            'user_id'       => 'required|exists:users,id',
            'image'         => 'required',
            'status'        => 'required'
        ]);

        $input['name']      = $request->name;
        $input['text']      = $request->text;
        $input['category_id']      = $request->category_id;
        $input['user_id']      = $request->user_id;
        $input['status']    = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path =('images/products');
            $image->move($path, $name);
            $input['image']  = $path."/".$name;
        }
        Product::create($input);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name'          =>  'nullable|min:3',
            'text'          =>  'nullable|min:10',
            'category_id'   =>  'nullable|exists:categories,id',
            'user_id'       =>  'nullable|exists:users,id',
            'image'         =>  'nullable',
            'status'        =>  'nullable'
        ]);

        $product = Product::where('id', $request->id)->first();

        $input['name']          = $request->name;
        $input['text']          = $request->text;
        $input['category_id']   = $request->category_id;
        $input['user_id']       = $request->user_id;
        $input['status']        = $request->status;

        // To Store One Photo For Home Page
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path =('images/products');
            if ( $image->move($path, $name) ){
                if($product->image){
                    $old_photo = $product->image;
                    unlink($old_photo);
                }
                $input['image']  = $path."/".$name;
            }
        }
        $product->update($input);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $product = Product::where('id', $request->id)->first();

        if($product->image)
        {
            if (File::exists($product->image) ){
                unlink($product->image);
            }
        }
        $product->delete();
        return redirect()->back();
    }
}
