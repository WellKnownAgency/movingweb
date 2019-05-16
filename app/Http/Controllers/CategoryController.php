<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = Category::orderBy('id')->paginate(10);
    return view('admin.categories.index')->withCategories($categories);
  }

  public function create()
  {
    return view('admin.categories.create');
  }

  public function store(Request $request)
  {
    // validate the data
   $this->validate($request, array(
           'name'         => 'required|max:255',
           'slug'          => 'required|alpha_dash|min:5|max:255|unique:categories,slug',
       ));
   // store in the database
   $category = new Category;
   $category->name = $request->name;
   $category->slug = $request->slug;


   $category->save();

    return redirect()->route('categories.index');
  }



}
