<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
//use TCG\Voyager\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.product.index');
    }

    public function list(Request $request)
    {

        dd($request->category);
        //$category = Category::findOrFail($category->slug);
        //$products = Product::orderBy('order', 'desc')->get();
        $products;
        return view('pages.product_list', compact('products'));
    }
}
