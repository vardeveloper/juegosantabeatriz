<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.product.index');
    }

    public function list(Request $request)
    {
        //dd($request->category);

        $categoria = Category::where('slug', $request->category)->firstOrFail();
        //dd($categoria->toArray());

        $products = Product::where('category_id', $categoria->id)
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->paginate(12);
        //dd($products->toArray());

        foreach ($products as $product) {
            $images = json_decode($product->images);
            foreach ($images as $image) {
                $product->image = $image;
                break;
            }
        }

        return view('pages.product_list', compact('products', 'categoria'));
    }

    public function show (Request $request)
    {
        $product = Product::where('slug', $request->slug)->where('status', 1)->firstOrFail();
        $product->imagenes = json_decode($product->images);
        return view('pages.product_show', compact('product'));
    }

    public function search(Request $request)
    {
        //dd($request->s);
        $term = $request->s;

        $products = [];

        if (!empty($term)) {

            $products = Product::where('name', 'like', "%$request->s%")
                ->where('status', 1)
                ->orderBy('name', 'asc')
                ->paginate(12);
            //dd($products->toArray());

            foreach ($products as $product) {
                $images = json_decode($product->images);
                foreach ($images as $image) {
                    $product->image = $image;
                    break;
                }
            }
        } else {
            $term = "No se encontró productos :'(";
        }

        return view('pages.product_search', compact('products', 'term'));
    }

}
