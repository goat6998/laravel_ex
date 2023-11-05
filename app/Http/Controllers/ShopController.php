<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $routes = Shop::find(1)->routes()->get();
        dd($routes);
    }
}
