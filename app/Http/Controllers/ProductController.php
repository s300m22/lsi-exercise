<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load('images');
        return view('product.show', compact('product'));
    }

    public function enquiry(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        // show preview instead of sending real email
        return view('emails.preview', compact('data', 'product'));
    }
}
