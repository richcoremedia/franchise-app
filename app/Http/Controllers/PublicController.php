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
    $lists = [
      ['id' => '1', 'name' => 'A'],
      ['id' => '2', 'name' => 'B'],
      ['id' => '3', 'name' => 'C'],
      ['id' => '4', 'name' => 'D']
    ];
    return view('office')->with('officeLists', $lists);
  }

  public function agent()
  {
    $lists = [
      ['id' => '1', 'name' => 'AB'],
      ['id' => '2', 'name' => 'BC'],
      ['id' => '3', 'name' => 'CD'],
      ['id' => '4', 'name' => 'DE']
    ];
    return view('agent')->with('agentLists', $lists);
  }

  public function property()
  {
    $lists = [
      ['id' => '1', 'name' => 'AXX', 'size' => '1223'],
      ['id' => '2', 'name' => 'BCD', 'size' => '3333'],
      ['id' => '3', 'name' => 'ISFF', 'size' => '423'],
      ['id' => '4', 'name' => 'DEF', 'size' => '456'],
      ['id' => '5', 'name' => 'FGG', 'size' => '65']
    ];

    return view('property')->with('propertyLists', $lists);
  }

  public function propertyDetails($id)
  {
      return view('propertyDetails')->with('id', $id);
  }

  public function contactAgent($id)
  {
    $data = [];
    $data['email']  = 'email@receiver.com';
    $data['name']  = 'receiver name';
    $data['id']  = $id;
    // $data['property_name']  = $name;

    Mail::send('emails.view', $data, function ($m) use ($data) {
      $m->from( env('MAIL_SENDER'), config('app.name') );
      $m->to($data['email'], $data['name'])->subject('Welcome!');
    });

    // DD for var_dump in LARAVEL
    dd($id);
  }
}
