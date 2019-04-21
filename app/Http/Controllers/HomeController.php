<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $categories = Category::orderBy('order', 'asc')->get();
        $products = Product::all();

        return view('pages.home', compact('banners', 'products', 'categories'));
    }
}
