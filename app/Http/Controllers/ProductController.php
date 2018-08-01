<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 7/18/18
 * Time: 1:58 PM
 */

namespace App\Http\Controllers;


use App\Category;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $categoryId = Input::get('categoryId');
        if ($categoryId == null || $categoryId == 0) {
            $products = Product::orderBy('created_at', 'desc')->paginate(5);
            return view('admin.product.list')
                ->with('products_in_view', $products)
                ->with('categories', $categories)
                ->with('categoryId', $categoryId);
        } else {
            $products = Product::where('categoryId', Input::get('categoryId'))->orderBy('created_at', 'desc')->paginate(5);
            return view('admin.product.list')
                ->with('products_in_view', $products)
                ->with('categories', $categories)
                ->with('categoryId', $categoryId);
        }

    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.form')->with('categories', $categories);
    }

    public function store(ProductRequest $request)
    {
        $request->validated();
        $current_time = time();
        Cloudder::upload(Input::file('image')->getRealPath(), $current_time);
//        $image_link = Cloudder::secureShow($current_time, array('width' => 250, 'height' => 250, 'crop' => 'fit', 'radius' => 20));

        $product = new Product();
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->categoryId = Input::get('categoryId');
        $product->description = Input::get('description');
        $product->image = $current_time;
        $product->save();
        return redirect('/admin/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('404');
        }
        $cagegories = Category::all();
        return view('admin.product.edit')
            ->with('product_in_view', $product)
            ->with('categories', $cagegories);
    }

    public function update($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('404');
        }
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->categoryId = Input::get('categoryId');
        $product->description = Input::get('description');
        $product->image = Input::get('image');
        $product->save();
        return redirect('/admin/product');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('404');
        }
    }
}