<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;

use App\Breweries;
use App\Drafts;

class DraftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drafts = Drafts::all();
        return view('drafts.index')->with('drafts', $drafts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breweries = Breweries::lists('name', 'id');
        return view('drafts.create')->with('breweries', $breweries);
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
        return Redirect::to('draft/create')
          ->withErrors($validator)
          ->withInput(Input::all());
      } else {
        $draft = new Drafts;
        $draft->name = Input::get('name');
        $draft->description = Input::get('description');
        $draft->brewery_id = Input::get('brewery');
        $draft->style = Input::get('style');
        $draft->pour = Input::get('pour');
        $draft->glassware = Input::get('glassware');
        $draft->abv = Input::get('abv');
        $draft->ibu = Input::get('ibu');
        $draft->image = Input::get('image');
        $draft->tasterPrice = Input::get('tasterPrice');
        $draft->pourPrice = Input::get('pourPrice');
        $draft->available = Input::get('available');
        $draft->haveTapHandle = Input::get('haveTapHandle');
        $draft->onSpecial = Input::get('onSpecial');
        $draft->save();

        Session::flash('message', 'Successfully created Draft Listing');
        return Redirect::to('drafts');
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
        $draft = Drafts::find($id);
        return view('drafts.single')->with('draft', $draft);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $draft = Drafts::find($id);
      $breweries = Breweries::lists('name', 'id');

      return view('drafts.edit')
        ->with('draft', $draft)
        ->with('breweries', $breweries);
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
        'name'      => 'required'
      );

      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()) {
        return Redirect::to('draft/create')
          ->withErrors($validator)
          ->withInput(Input::all());
      } else {
        $draft = Drafts::find($id);
        $draft->name = Input::get('name');
        $draft->description = Input::get('description');
        $draft->brewery_id = Input::get('brewery');
        $draft->style = Input::get('style');
        $draft->pour = Input::get('pour');
        $draft->glassware = Input::get('glassware');
        $draft->abv = Input::get('abv');
        $draft->ibu = Input::get('ibu');
        $draft->image = Input::get('image');
        $draft->tasterPrice = Input::get('tasterPrice');
        $draft->pourPrice = Input::get('pourPrice');
        $draft->available = Input::get('available');
        $draft->haveTapHandle = Input::get('haveTapHandle');
        $draft->onSpecial = Input::get('onSpecial');
        $draft->save();

        Session::flash('message', 'Successfully created Draft Listing');
        return Redirect::to('drafts');
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
