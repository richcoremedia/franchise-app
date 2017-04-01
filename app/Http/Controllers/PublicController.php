<?php

namespace App\Http\Controllers;

use App;
use Mail;
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

    public function property()
    {
         $lists = [
               ['id' => '1', 'name' => 'AXX', 'size' => '1223'],
               ['id' => '2', 'name' => 'BCD', 'size' => '3333'],
               ['id' => '3', 'name' => 'ISFF', 'size' => '423']
         ];

         return view('property')->with('propertyLists', $lists);
    }

    public function propertyDetails($id, $name)
    {
          $data = [];
          $data['email']  = 'email@receiver.com';
          $data['name']  = 'receiver name';
          $data['id']  = $id;
          $data['property_name']  = $name;

          Mail::send('emails.view', $data, function ($m) use ($data) {
             $m->from( env('MAIL_SENDER'), config('app.name') );
             $m->to($data['email'], $data['name'])->subject('Welcome!');
         });

          // DD for var_dump in LARAVEL
         dd($id);
    }
}
