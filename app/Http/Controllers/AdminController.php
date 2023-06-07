<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function delete_category($id)
    {
        $data = Category::find($id)->delete();
        return redirect()->back()->with('message', 'delete action was successfully');

    }

    public function view_product()
    {
        $category = Category::all();

        return view('admin.product', compact('category'));
    }

    #(Request $request) get the all data from form in admin.product
    public function add_product(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->desc = $request->desc;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image = $imagename;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount_price = $request->discount;
        $product->save();
        return redirect()->back()->with('message', 'product added successfully');

    }


    public function show_product()
    {
        $product = Product::all();
        return view('admin.show_product', compact('product'));
    }

    public function delete_product($id)
    {
        $product= Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'You Deleted The Product Successfully');

    }

    public function update_product($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.update' , compact('product','category'));
    }

    public function update_product_confirm(Request $request, $id )
    {
        $product= Product::find($id);
        $product->title= $request->title;
        $product->desc= $request->desc;
        $product->price= $request->price;
        $product->discount_price= $request->discount;
        $product->category= $request->category;
        $product->quantity= $request->quantity;



        $image= $request->image;
        if ($image!==null){
            $imagename=  time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $product->image=$imagename;

        }

        $product->save();

        return redirect()->back()->with('message', 'product update was successfully');

    }
}
