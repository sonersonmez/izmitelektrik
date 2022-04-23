<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\County;
use App\Models\Image;
use App\Models\Post;
use App\Models\Reference;
use App\Models\Status;
use App\Models\Statusable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $references = Reference::all();
        $posts = Post::all();
        return view('front.index', compact('categories', 'references', 'posts'));
    }

    public function blog(){
        $posts = Post::all();
        return view('front.blog', compact('posts'));
    }

    public function about(){
        $categories = Category::all();
        return view('front.about', compact('categories'));
    }

    public function faq(){
        $posts = Post::all();
        $counties = County::all();
        return view('front.faq', compact('counties', 'posts'));
    }

    public function blogDetail($postId){
        $allPosts = Post::all();
        $post = Post::find($postId);
        $categories = Category::all();
        
        
        
        return view('front.blogDetail',  compact('allPosts','post', 'categories'));
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
        $email = $request->email;
        $phoneNumber = $request->phoneNumber;
        $subject = $request->subject;
        $message = $request->message;
        $status = $request->status;

        $contact = new Contact;

        $contact->name = $name;
        $contact->email = $email;
        $contact->phone_number = $phoneNumber;
        $contact->subject = $subject;
        $contact->message = $message;
        $currentTime = Carbon::now();
        $contact->created_at = $currentTime;
       // $contact->save();

        $lastContact = Contact::latest()->first();
        $statuses = Status::where('id', '=', 1)->first();
       
        $statusable = new Statusable;
        $statusable->status_id = $statuses->id;
        $statusable->statusables_id = $lastContact->id;
        $statusable->statusables_type = 'App\Models\Contact';
        $statusable->save();
        
       

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
