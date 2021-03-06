<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories  = Category::all();
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $product = new Product();
        $product->name =$request->name;
        $product->price =$request->price;
        $product->category_id = $request->category_id;
        $path = $request->file('image')->store('/image', 'public');
        $product->image = $path;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->storeAs('public/image', 'anh_' . $product->id);
        }
        $product->save();

        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function search(ProductRequest $request)
    {
        $search = $request->keyword;
        $products = DB::table('products')->where('name', 'LIKE', "%$search%")->paginate(4);
        return view('product.index',  compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$id): \Illuminate\Http\RedirectResponse
    {
        $product = Product::find($id);
        $product->name =$request->name;
        $product->price =$request->price;
        $path = $request->file('image')->store('/image', 'public');
        $product->image = $path;
        $product->save();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->storeAs('public/image', 'anh_' . $product->id);
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
