<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $product = $request->product;
        $price = $request->price;
        $discountPercent = $request->discount_percent;
        $discountAmount = $price * $discountPercent * 0.1;
        $newPrice = $price - $discountAmount;
        return view('Product_Discount_Calculator',compact('product','price','discountPercent','discountAmount','newPrice'));
    }
}
