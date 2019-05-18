<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Feature;
use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{
	public function sitemap()
	{
		$features = Feature::orderBy('updated_at', 'DESC')->get();
		$posts = Post::orderBy('updated_at', 'DESC')->get();
		return response()->view('sitemap', compact('posts', 'features'))->header('Content-Type', 'text/xml');
	}

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

  public function home() {
    return view('home');
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

	public function featureIndex() {
    $categories = Category::with('features')->orderBy('created_at', 'ASC')->get();
    return view('features/index', compact('categories'));
  }

	public function getSingleFeature($slug) {
    $feature = Feature::where('slug', '=', $slug)->first();
    return view('features.single')->withFeature($feature);
  }

	public function postContact(Request $request) {
		$this->validate($request, [
      'first_name' 			=> 'required|max:255',
      'last_name'  			=> 'required|max:255',
      'company_name'    => 'required',
      'company_website' => 'required',
      'phone'   				=> 'required',
      'email'     			=> 'required|email|max:100',
			'date_time' 						=> 'required'
    ]);

		$data = array(
			'first_name' => $request->first_name,
			'last_name'     => $request->last_name,
			'company_name'     => $request->company_name,
			'company_website'     => $request->company_website,
			'phone'      => $request->phone,
			'email'      => $request->email,
			'date_time'      => $request->date_time,
		);

		Mail::send('emails.notification', $data, function($message) use ($data){
			$message->from('info@mail.moving-crm.com');
			$message->to('movinglcrm@gmail.com');
			$message->subject('Contact Request');
		});

		return back();
	}

	public function supportTicket(Request $request) {
		$this->validate($request, [
      'first_name' 			=> 'required|max:255',
      'last_name'  			=> 'required|max:255',
      'company_name'    => 'required',
      'company_website' => 'required',
      'phone'   				=> 'required',
      'email'     			=> 'required|email|max:100',
			'body' 						=> 'required'
    ]);

		$data = array(
			'first_name' => $request->first_name,
			'last_name'     => $request->last_name,
			'company_name'     => $request->company_name,
			'company_website'     => $request->company_website,
			'phone'      => $request->phone,
			'email'      => $request->email,
			'body'      => $request->date_time,
		);

		Mail::send('emails.support', $data, function($message) use ($data){
			$message->from('info@mail.moving-crm.com');
			$message->to('movinglcrm@gmail.com');
			$message->subject('Support Ticket');
		});

		return back();
	}

}
