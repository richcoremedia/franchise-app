<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
     /**
      * Contact Page
      * @return view
      */
    public function contact()
    {
          return view('contact');
    }
}
