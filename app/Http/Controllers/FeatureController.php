<?php

namespace App\Http\Controllers;
use App\Feature;
use App\Category;
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
    $categories = Category::get();
    return view('admin.features.create')->withCategories($categories);
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
   $feature->category_id = $request->category_id;
   $feature->body = $request->body;


   $feature->save();

    return redirect()->route('features.index');
  }

  public function edit($id)
  {
      $feature = Feature::with('category')->where('id', $id)->first();
      $categories = Category::all();
      return view('admin.features.edit')->withFeature($feature)->withCategories($categories);
  }


  public function update(Request $request, $id)
  {
   // store in the database
   $feature = Feature::find($id);
   $feature->title = $request->input('title');
   $feature->slug = $request->input('slug');
   $feature->dscr = $request->input('dscr');
   $feature->category_id = $request->category_id;
   $feature->body = $request->input('body');


   $feature->save();

    return redirect()->route('features.index', $feature->id);
}

}
