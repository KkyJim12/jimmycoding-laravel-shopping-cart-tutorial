<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WhistlistController extends Controller
{
    public function index()
    {

        if (session('whistlist.product') === null) {
            $items = [];
        } else {
            $items = Product::whereIn('id', session('whistlist.product'))->get();
        }

        return view('whistlist', ['items' => $items]);
    }

    public function destroy(Request $request)
    {
        $request->session()->forget('whistlist');
        return redirect()->back();
    }
}
