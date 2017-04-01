<?php

namespace App\Http\Controllers;

use App;
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

    /**
     * Set user language
     * @param string $locale
     * @return null
     */
    public function language($locale)
    {
         if ($locale == "en") {

               session()->put('locale', $locale);
               App::setlocale('en');
               return redirect()->back();

          } elseif ($locale == "fi") {

               session()->put('locale', $locale);
               App::setlocale('fi');
               return redirect()->back();

          }
    }

    public function office()
    {
          return view('office');
    }
    public function agent()
    {
          return view('agent');
    }
}
