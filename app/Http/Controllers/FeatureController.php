<?php

namespace App\Http\Controllers;
use App\Feature;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
  public function index()
  {
    $features = Feature::orderBy('id')->paginate(10);
    return view('admin.features.index')->withFeatures($features);
  }

  public function create()
  {
    return view('admin.features.create');
  }

  public function store(Request $request)
  {
    // validate the data
   $this->validate($request, array(
           'title'         => 'required|max:255',
           'slug'          => 'required|alpha_dash|min:5|max:255|unique:features,slug',
           'dscr'          => 'required'
       ));
   // store in the database
   $feature = new Feature;
   $feature->title = $request->title;
   $feature->slug = $request->slug;
   $feature->dscr = $request->dscr;
   $feature->body = $request->body;


   $feature->save();

    return redirect()->route('features.index');
  }


}
