<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Post;
use App\Models\Reference;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function index(){
        return view('front.index');
    }

    public function blog(){


        $posts = Post::all();
        return view('front.blog', compact('posts'));
    }

    public function blogDetail($postId){
       
        $post = Post::find($postId);
        
        
        
        return view('front.blogDetail',  compact('post'));
    }

    public function references(){
        $references = Reference::all();
        $references = ['references' => $references];
        return view('front.references')->with($references);
    }

    public function referenceDetail($referenceId){
        $reference = Reference::find($referenceId);
        
       
        
        return view('front.referencesDetail',  compact('reference'));
    }

    public function contact(){
        return view('front.contact');
    }

    public function saveContact(Request $request){
        $name = $request->name;
        $phoneNumber = $request->phoneNumber;
        $subject = $request->subject;
        $message = $request->message;

        $contact = new Contact;

        $contact->name = $name;
        $contact->phone_number = $phoneNumber;
        $contact->subject = $subject;
        $contact->message = $message;
        $currentTime = Carbon::now();
        $contact->created_at = $currentTime;
        $contact->save();

        return view('front.index');
    }

    public function projects(){
        $categories = Category::all();
        $references = Reference::all();
        
        return view('front.projects', compact('categories', 'references'));
    }

    public function projectDetail($id){
        $reference = Reference::find($id);
        return view('front.projectDetail', compact('reference'));
    }
}
