<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Settings extends Model
{
  public static function siteName()
  {
    $name = DB::table('settings')->where('name', 'site_name')->first();
    return $name->value;
  }

  public static function getSetting($key)
  {
    $query = DB::table('settings')->where('name', $key)->first();
    return $query->value;
  }

  public static function niceName($string)
  {
    $val = str_replace(' ', ' ', ucwords(str_replace('_', ' ', $string)));
    return $val;
  }
}
