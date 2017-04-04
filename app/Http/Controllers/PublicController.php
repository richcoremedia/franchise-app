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
      ['id' => '1', 'name' => 'Office A', 'city' => 'City A'],
      ['id' => '2', 'name' => 'Office B', 'city' => 'City B'],
      ['id' => '3', 'name' => 'Office C', 'city' => 'City C'],
      ['id' => '4', 'name' => 'Office D', 'city' => 'City D']
    ];
    return view('office')->with('officeLists', $lists);
  }

  public function company()
  {
        return view('company');
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

  public function agentDetails($id)
  {
      return view('agentDetails')->with('id', $id);
  }

  public function property()
  {
    $lists = [
      ['id' => '1', 'name' => 'AXX', 'city' => 'City A'],
      ['id' => '2', 'name' => 'BCD', 'city' => 'City B'],
      ['id' => '3', 'name' => 'ISFF', 'city' => 'City C'],
      ['id' => '4', 'name' => 'DEF', 'city' => 'City D'],
      ['id' => '5', 'name' => 'FGG', 'city' => 'City E']
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

  public function assessment()
  {
        return view('assessment');
  }

  public function buy()
  {
        return view('buy');
  }

  public function sell()
  {
        return view('sell');
  }

  public function rent()
  {
        return view('rent');
  }

  public function news()
  {
        return view('news');
  }
}
