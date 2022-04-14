<?php

namespace App\Http\Controllers;

use App\Models\Categoriable;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Reference;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function index()
    {
        return view('back.index');
    }

    //  BLOG

    public function post()
    {
        $posts = Post::all();
        $data = array(
            'posts' => $posts,

        );
        return view('back.post')->with($data);
    }

    public function add()
    {
        return view('back.addPost');
    }

    public function save(Request $request)
    {

        $post = new Post;

        $post->title = $request->postTitle;
        $post->content = $request->postContent;
        $currentTime = Carbon::now();
        $post->created_at = $currentTime;
        $post->save();

        $image = new Image();

        $lastPost = Post::latest()->first();
        $imageableId = $lastPost->id;
        $image->imageable_id = $imageableId;
        $image->image_url = $request->postImage;
        $image->save();

        $posts = Post::all();
        $data = array(
            'posts' => $posts,

        );
        return view('back.post')->with($data);
    }

    public function edit(Request $request)
    {
        $post = Post::find($request->id);
        $postImage = Image::where('imageable_id', '=', $request->id)->get();
        
        return view('back.editPost', compact('post', 'postImage'));
    }

    public function postUpdate(Request $request)
    {

        $updatedTitle = $request->postTitle;
        $updatedContent = $request->postContent;
        $updatedVisibility = $request->postVisibility;

        $post = Post::find($request->postId);

        $post->title = $updatedTitle;
        $post->content = $updatedContent;
        if ($updatedVisibility != null) {
            $post->is_active = 1;
        } else {
            $post->is_active = 0;
        }



        $post->save();
        $posts = Post::all();
        $data = array(
            'posts' => $posts,

        );
        return view('back.post')->with($data);
    }

    public function delete($id)
    {
        $data = Post::find($id)->delete();



        $posts = Post::all();
        $data = array(
            'posts' => $posts,

        );
        return view('back.post')->with($data);
    }

    //   REFERANS

    public function reference(){
      $references = Reference::all();
      $data = array(
        'references' => $references,

    );
    return view('back.reference')->with($data);
      
    }

    public function addReference()
    {
        $categories = Category::all();
        return view('back.addReference', compact('categories'));
    }

    public function saveReference(Request $request)
    {
       
        
        $reference = new Reference;

        $reference->title = $request->referenceTitle;
        $reference->content = $request->referenceContent;
        $currentTime = Carbon::now();

        $reference->created_at = $currentTime;

        $reference->save();

        $image = new Image();

        $lastReference = Reference::latest()->first();
        $imageableId = $lastReference->id;
        $image->imageable_id = $imageableId;
        $image->image_url = $request->referenceImage;
        $image->save();

       $newCategories = $request->input('categories');
        foreach($newCategories as $category){
            $categoriable = new Categoriable;
            $categoriable->category_id = $category;
            $categoriable->categoriable_id = $lastReference->id;
            $categoriable->categoriables_type = 'App\Models\Reference';
            $categoriable->created_at = $currentTime;
            $categoriable->save();
        }
       
        

        $references = Reference::all();
        $data = array(
            'references' => $references,

        );
        return view('back.reference')->with($data);
    }

    public function editReference(Request $request)
    {
        $reference = Reference::find($request->id);
        $referenceImage = Image::where('imageable_id', '=', $request->id)->get();

        return view('back.editReference', compact('reference', 'referenceImage'));
    }

    public function updateReference(Request $request)
    {

        $updatedTitle = $request->referenceTitle;
        $updatedContent = $request->referenceContent;
        $updatedVisibility = $request->referenceVisibility;

        $reference = Reference::find($request->referenceId);

        $reference->title = $updatedTitle;
        $reference->content = $updatedContent;
        if ($updatedVisibility != null) {
            $reference->is_active = 1;
        } else {
            $reference->is_active = 0;
        }



        $reference->save();
        $references = Reference::all();
        $data = array(
            'references' => $references,

        );
        return view('back.reference')->with($data);
    }

    public function deleteReference($id)
    {
        $data = Reference::find($id)->delete();



        $references = Post::all();
        $data = array(
            'references' => $references,

        );
        return view('back.reference')->with($data);
    }

    public function categories(){
        return view('back.categories');
    }

    public function contact(){
        return view('back.contact');
    }
}
