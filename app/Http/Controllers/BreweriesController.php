<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Breweries;
use Storage;

class BreweriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breweries = Breweries::all();
        //$breweries = array();
        return view('breweries.index')->with('breweries', $breweries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = Breweries::states();
        return view('breweries.create')->with('states', $states);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = array(
        'name'      => 'required'
      );

      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()) {
        return Redirect::to('breweries/create')
          ->withErrors($validator)
          ->withInput(Input::all());
      } else {
        $brewery = new Breweries;
        $brewery->name = Input::get('name');
        $brewery->city = Input::get('city');
        $brewery->state = Input::get('state');

        if ($request->hasFile('logo')) {
          $imageName = str_slug($brewery->name, "-").".".$request->file('logo')->getClientOriginalExtension();;
          $brewery->logo = $imageName;
          if ($request->file('logo')->isValid()) {
            $request->file('logo')->move(base_path() . '/public/assets/images/breweries/', $imageName);
          } else {
            //echo "File not valid.";
            Session::flash('message', 'File not valid');
          }
        } else {
          Session::flash('message', 'Successfully created Brewery Listing');
        }
        $brewery->save();
        return Redirect::to('breweries');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $brewery = Breweries::find($id);
      $logo = asset('images/breweries/'.$brewery->logo);
      return view('breweries.single')
        ->with('brewery', $brewery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brewery = Breweries::find($id);

        return view('breweries.edit')
          ->with('brewery', $brewery);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $rules = array(
        'name'      => 'required',
        'image' =>  'image'
      );

      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()) {
        return Redirect::to('breweries/create')
          ->withErrors($validator)
          ->withInput(Input::all());
      } else {
        $brewery = Breweries::find($id);
        $brewery->name = Input::get('name');
        $brewery->city = Input::get('city');
        $brewery->state = Input::get('state');

        if ($request->hasFile('logo')) {
          $imageName = str_slug($brewery->name, "-").".".$request->file('logo')->getClientOriginalExtension();;
          $brewery->logo = $imageName;
          if ($request->file('logo')->isValid()) {
            $request->file('logo')->move(base_path() . '/public/assets/images/breweries/', $imageName);
          } else {
            //echo "File not valid.";
            Session::flash('message', 'File not valid');
          }
        } else {
          Session::flash('message', 'Successfully created Brewery Listing');
        }
        $brewery->save();
        return Redirect::to('breweries');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
