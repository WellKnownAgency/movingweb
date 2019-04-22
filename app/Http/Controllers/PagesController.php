<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function getIndex() {
    $posts = Post::latest()->take(3)->get();
    return view('index')->withPosts($posts);
  }

	public function pricing() {
    $posts = Post::latest()->take(3)->get();
    return view('pricing')->withPosts($posts);
  }

  public function support() {
    $posts = Post::latest()->take(3)->get();
    return view('support')->withPosts($posts);
  }

  public function faq() {
    $posts = Post::latest()->take(3)->get();
    return view('faq')->withPosts($posts);
  }

  public function blogIndex() {
    $posts = Post::latest()->get();
    return view('blog/index')->withPosts($posts);
  }

  public function getSingle($slug) {
    $post = Post::where('slug', '=', $slug)->first();
    $posts = Post::latest()->where('id', '!=', $post->id)->take(3)->get();
    return view('blog.single')->withPost($post)->withPosts($posts);
  }


}
