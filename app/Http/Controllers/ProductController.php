<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        $categoryName = null;

        if ($categoryId) {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);

            $products = $category->allProducts();
        } else {
            $products = Product::take(10)->get();
        }

        return view('product.index', compact('products', 'categoryName'));
    }

    public function search(Request $request)
    {
       $query = $request->input('query');
    //    $categoryId = null;

    //    $gotProducts = Product::where('name', 'LIKE', "%$query%");

    //    foreach ($gotProducts as $gotProduct) {
    //     $cat = new Category;
    //     $category = $cat->products()->where($gotProduct->id, 'product_id');
    //     $categoryId = $category->category_id;

    //    }

    //    dd($categoryId);
       $products = Product::where('name', 'LIKE', "%$query%")->paginate(12);


       return view('product.catalog', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::where('id', $product->id)->get();

        return view('product.product_details', compact('products'));
    }
}
