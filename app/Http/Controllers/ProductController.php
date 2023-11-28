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
        $product = Product::all();

        return view('total_product', compact('product'));
    }

    public function altered()
    {
        $products = Product::where('price', '<', 50)->get();

        return view('price50_product', compact('products'));
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
