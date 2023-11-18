<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()) {
            // $posts = Post::whereNotNull('image')->orderBy('created_at', 'desc')->paginate(30);
            $posts = Http::get(env("API_URL")."gallery")["data"];

            // dd($posts);

            return view('post.index', [
                'page' => 'posts',
                'posts' => $posts,
            ]);
        }

        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::check()) {
            return view('post.create', [
                "page" => "posts"
            ]);
        }

        return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|max:255",
            "description" => "required",
            "image" => "required|image|max:3999"
        ]);

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameSimpan = $filename . "_" . time() . "." . $extension;
            $image = Image::make($request->file('image'));
            $image->save('storage/posts/image/'.$filenameSimpan);

            $pathSquare = ('storage/posts/image_square/'.$filenameSimpan);
            $image->fit(500,500)->save($pathSquare);
            
            $request["image"] = $filenameSimpan;
            Post::create([
                "title" => $request['title'],
                "description" => $request['description'],
                "image" => $filenameSimpan,
            ]);
        }

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(Auth::check()){
            $post = Post::findOrFail($id);
    
            return view("post.edit", [
                "post" => $post,
                "page" => "posts"
            ]);
        }

        return redirect('/login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            "title" => "required|max:255",
            "description" => "required",
            "image" => "image|max:3999"
        ]);

        if($request->hasFile("image")){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameSimpan = $filename . "_" . time() . "." . $extension;
            $image = Image::make($request->file('image'));
            $image->save('storage/posts/image/'.$filenameSimpan);

            $pathSquare = ('storage/posts/image_square/'.$filenameSimpan);
            $image->fit(500,500)->save($pathSquare);

            File::delete("storage/posts/image/".$post->image);
            File::delete("storage/posts/image_square/".$post->image);

            $post->update([
                "title" => $request["title"],
                "description" => $request["description"],
                "image" => $filenameSimpan
            ]);
        }
        else{
            $post->update([
                "title" => $request["title"],
                "description" => $request["description"],
            ]);
        }

        return redirect("/posts");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        
        File::delete("storage/posts/image/".$post->image);
        File::delete("storage/posts/image_square/".$post->image);

        $post->delete();

        return redirect("/posts");
    }
}