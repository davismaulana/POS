<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //food-beverage
    public function foodBeverage()
    {
        return view('product_page.food-beverage');
    }
    //beauty-health
    public function beautyHealth()
    {
        return view('product_page.beauty-health');
    }
    //home-care
    public function homeCare()
    {
        return view('product_page.home-care');
    }
    //baby-kid
    public function babyKid()
    {
        return view('product_page.baby-kid');
    }
}
