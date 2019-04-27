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

        $categories = Category::where('spotlight', 1)->orderBy('order', 'asc')->get();
        $data['categorias'] = $categories->toArray();

        foreach ($data['categorias'] as $key => $value) {

            // get products spotlight
            $products = Product::where('category_id', $value['id'])
                ->where('status', 1)
                ->where('spotlight', 1)
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();
            $products = $products->toArray();

            // get only a image by product
            $productos = [];
            foreach ($products as $product) {
                $images = json_decode($product['images']);
                foreach ($images as $image) {
                    $product['image'] = $image;
                    $product['small'] = $this->imageSmall($image);
                    break;
                }
                $productos[] = $product;
            }

            $data['categorias'][$key]['productos'] = $productos;
        }
        //dd($data);

        return view('pages.home', compact('banners', 'data'));
    }

    public function imageSmall($image)
    {
        $filename = basename($image);

        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        $pathimage = explode('.', $image);

        $imageSmall = $pathimage[0] . '-cropped.' . $ext;

        return $imageSmall;
    }

}
