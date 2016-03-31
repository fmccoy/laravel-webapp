<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Settings;

class SettingsController extends Controller
{
  public function index()
  {
    $settings = Settings::all();
    return view('dashboard.settings')->with('settings', $settings);
  }

  public function update(Request $request)
  {
    $input = $request->input();
    $input = array_except($input, ['_token']);

    foreach($input as $key => $value) {
      $update = Settings::where('name', $key )->first();
      $update->value = $value;
      $update->save();
    }
    return redirect('settings');
  }
}
