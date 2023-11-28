<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        // $product_count = Product::count();
        $product_count = Product::all();

        return response()->json($product_count);
    }

    public function altered()
    {
        $product_count = Product::where('price', '>', 50)->get();

        return response()->json($product_count);
    }

    public function form()
    {
        $products_latest = Phone::latest()->take(1)->get();

        // return $products;
        return view('simple-form', compact('products_latest'));
    }

    public function form_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'color' => 'required',
            'desc' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $product = new Phone();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->description = $request->desc;
        $product->save();

        return redirect()->route('form')->with('success', 'Product created successfully');



    }
}
