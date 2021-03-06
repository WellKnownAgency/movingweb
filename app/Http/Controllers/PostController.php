<?php

namespace App\Http\Controllers;
use App\Post;
use Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::orderBy('id')->paginate(10);
    return view('admin.posts.index')->withPosts($posts);
  }

  public function create()
  {
    return view('admin.posts.create');
  }

  public function store(Request $request)
  {
    // validate the data
   $this->validate($request, array(
           'title'         => 'required|max:255',
           'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
           'dscr'          => 'required'
       ));
   // store in the database
   $post = new Post;
   $post->title = $request->title;
   $post->slug = $request->slug;
   $post->metatitle = $request->metatitle;
   $post->dscr = $request->dscr;
   $post->excerpt = $request->excerpt;
   $post->body = $request->body;

   if ($request->hasFile('img')) {
     $image = $request->file('img');
     $filename = time() . '.' . $image->getClientOriginalExtension();
     $location = public_path('images/blog/' . $filename);
     Image::make($image)->resize(900, 450)->save($location);
     $post->image = $filename;
   }


   $post->save();

    return redirect()->route('posts.index');
  }

  public function edit($id)
  {
      $post = Post::find($id);
      return view('admin.posts.edit')->withPost($post);
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
   // store in the database
   $post = Post::find($id);
   $post->title = $request->input('title');
   $post->slug = $request->input('slug');
   $post->metatitle = $request->input('metatitle');
   $post->dscr = $request->input('dscr');
   $post->excerpt = $request->input('excerpt');
   $post->body = $request->input('body');

   if ($request->hasFile('img')) {
     $image = $request->file('img');
     $filename = time() . '.' . $image->getClientOriginalExtension();
     $location = public_path('images/blog/' . $filename);
     Image::make($image)->resize(900, 450)->save($location);
     $post->image = $filename;
   }
   $post->save();

    return redirect()->route('posts.index', $post->id);
}
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect('/admin/posts');
  }


}
