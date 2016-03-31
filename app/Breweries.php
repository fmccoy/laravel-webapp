<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breweries extends Model
{
  protected $table = "breweries";
  public static function states()
  {
    $states = array(
      'AL'=>'Alabama',
      'AK'=>'Alaska',
      'AZ'=>'Arizona',
      'AR'=>'Arkansas',
      'CA'=>'California',
      'CO'=>'Colorado',
      'CT'=>'Connecticut',
      'DE'=>'Delaware',
      'DC'=>'District of Columbia',
      'FL'=>'Florida',
      'GA'=>'Georgia',
      'HI'=>'Hawaii',
      'ID'=>'Idaho',
      'IL'=>'Illinois',
      'IN'=>'Indiana',
      'IA'=>'Iowa',
      'KS'=>'Kansas',
      'KY'=>'Kentucky',
      'LA'=>'Louisiana',
      'ME'=>'Maine',
      'MD'=>'Maryland',
      'MA'=>'Massachusetts',
      'MI'=>'Michigan',
      'MN'=>'Minnesota',
      'MS'=>'Mississippi',
      'MO'=>'Missouri',
      'MT'=>'Montana',
      'NE'=>'Nebraska',
      'NV'=>'Nevada',
      'NH'=>'New Hampshire',
      'NJ'=>'New Jersey',
      'NM'=>'New Mexico',
      'NY'=>'New York',
      'NC'=>'North Carolina',
      'ND'=>'North Dakota',
      'OH'=>'Ohio',
      'OK'=>'Oklahoma',
      'OR'=>'Oregon',
      'PA'=>'Pennsylvania',
      'RI'=>'Rhode Island',
      'SC'=>'South Carolina',
      'SD'=>'South Dakota',
      'TN'=>'Tennessee',
      'TX'=>'Texas',
      'UT'=>'Utah',
      'VT'=>'Vermont',
      'VA'=>'Virginia',
      'WA'=>'Washington',
      'WV'=>'West Virginia',
      'WI'=>'Wisconsin',
      'WY'=>'Wyoming',
    );
    return $states;
  }
  public static function getBreweryName($brewery_id)
  {
    if($brewery_id != 0) {
      $brewery = Breweries::findOrFail($brewery_id);
      $name = $brewery->name;
    } else {
      $name = "";
    }
    return $name;
  }
  public static function getBreweryLogo($brewery_id)
  {
    if($brewery_id != 0) {
      $brewery = Breweries::find($brewery_id);
      $images_path = "images/breweries/".$brewery->logo;
      $url = asset($images_path);
    } else {
      $url = "";
    }
    return $url;
  }

    public static function getBreweryCity($brewery_id)
    {
      if ($brewery_id != 0) {
        $brewery = Breweries::find($brewery_id);
        return $brewery->city;
      }

    }

    public static function getBreweryState($brewery_id)
    {
      if ($brewery_id != 0) {
        $brewery = Breweries::find($brewery_id);
        return $brewery->state;
      }

    }

    public static function imgUri($string)
    {
      $string = strtolower($string);
      $string = str_replace(" ", "-", $string);
      $string = str_replace("'", "", $string);

      return $string;
    }
}
