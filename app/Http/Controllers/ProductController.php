<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
{
    $gadgets = array(
        "phone" => "samsung",
        "console" => "PS5",
        "computer" => "Windows"
    );

    return view('gadgets', ['gadgets' => $gadgets])
}
}
