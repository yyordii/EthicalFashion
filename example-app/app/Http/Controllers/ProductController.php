<?php

namespace App\Http\Controllers;

use App\Models\Producten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products from the database
        $products = Producten::all();

        // Return the view with the products data
        return view('welcome', ['products' => $products]);
    }
}

