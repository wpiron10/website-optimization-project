<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function index(): View
    {
        $filePath = public_path('products.json');
        $jsonContent = file_get_contents($filePath);
        $products = json_decode($jsonContent, true);

        return view('home', ['products' => $products]);
    }
}
