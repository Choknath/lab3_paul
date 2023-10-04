<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admincontrol extends BaseController
{
    public function min()
    {
        return view('admin');
    }

    public function table()
    {
        return view('Table');
    }
}

