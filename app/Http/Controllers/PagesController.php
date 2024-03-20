<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function index(): View
    {
        $products = Product::where('status', 'active')->get();

        return view('home', ['products' => $products]);
    }
}
