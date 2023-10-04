<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function about()
{
    return view ('about');
}

    public function productpage()
    {
        return view('productpage');
    }

    public function Product()
    {
        return view('Product');
    }

    public function how()
    {
        return view('howitwork');
    }

    


}
