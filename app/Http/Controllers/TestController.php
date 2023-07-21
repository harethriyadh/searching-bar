<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function aa ()
    {
        return view ('index');
    }

    public function show ()
    {
        return view ('branches.show');
    }
}


