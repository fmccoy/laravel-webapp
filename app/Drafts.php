<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drafts extends Model
{
  public static function isAvailable($availability)
  {
    if($availability != 0) {
      return "YES";
    } else {
      return "NO";
    }
  }
}
