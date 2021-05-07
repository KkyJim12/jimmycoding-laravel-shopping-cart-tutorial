<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrfail($id);
        return view('product', ['product' => $product]);
    }

    public function store(Request $request)
    {
        if (session('whistlist.product') !== null) {
            if (in_array($request->product_id, session('whistlist.product'))) {
                return redirect()->back()->with('message', 'Already in whistlist');
            } else {
                $request->session()->push('whistlist.product', $request->product_id);
                return redirect()->back();
            }
        } else {
            $request->session()->push('whistlist.product', $request->product_id);
            return redirect()->back();
        }
    }
}
