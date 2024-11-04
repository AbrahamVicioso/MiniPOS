<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CreateProductController extends Controller
{
    public function create() : View {
        return view('product.create');
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'unitprice' => ['required'],
            'refcode' => ['required']
        ]);

        $product = Product::create([
            'Name' => $request->name,
            'UnitPrice' => $request->unitprice,
            'RefCode' => $request->refcode
        ]);

        return $product;
    }
}
