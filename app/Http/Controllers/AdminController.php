<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class AdminController extends Controller
{
    public function product()
    {
        return view ('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data = new product;
        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();//it don't have name like the tutorial
        $request->file->move('productimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        
        $data -> save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }
}