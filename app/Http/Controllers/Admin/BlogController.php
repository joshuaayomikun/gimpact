<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;
use App\Blog;

class BlogController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }
    
    public function index() {
        $blogs = Blog::all();
        return view('admin.blog.blog_index', compact('blogs'));
    }

    public function addBlog() {
        return view('admin.blog.blog_add');
    }

    public function storeBlog(Request $request){

        $this->validate($request, [
            "blog_title"  => "required",
            "blog_content"  => "required",
            
        ]);

        $image = $request->file('blog_file');

        if($image){
            $filename = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path().'/storage/images/admin/document';
            $image->move($destinationPath, $filename);
        }
        else{
            $filename = "avatar.png";
        }
  
        $blog = new Blog;
  
        $blog->title = $request->blog_title;
        $blog->content = $request->blog_content;
        $blog->blog_file = $filename;
  
        if($blog->save() == true){
          Session::flash('success', 'Blog has been added successfully');
        }else{
          Session::flash('error', 'Could not add Blog');
        }
        return back();
    }

    public function blogStatus($id) {

        $blogID = Blog::find($id);

        if ($blogID->status == true) {
            $blogID->status = false;
            $blogID->update();
                
            Session::flash('success', strtoupper($blogID->title).' disabled successfully!');
        }
        else{
            $blogID->status = true;
            $blogID->update();
                
            Session::flash('success', strtoupper($blogID->title).' activated successfully!');
        }
        return back();
    }

    public function editBlog($id){

        $blogs = Blog::find($id);
        return view('admin.blog.blog_edit', compact('blogs'));
    }

    public function updateBlog(Request $request){

        $blogId = $request->blog_id;
        $image = $request->file('blog_file');

        $blog = Blog::find($blogId);

        if($image){
            $filename = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path().'/storage/images/admin/document';
            $image->move($destinationPath, $filename);

            $blog->blog_file = $filename;
        }

        $blog->title = $request->blog_title;
        $blog->content = $request->blog_content;

        if ($blog->update() == true) {
            Session::flash('success', 'Blog Updated Successfully');
        }else{
            Session::flash('failed', 'Error while Updating Blog');
        }
        return redirect(route('admin.blog.blog_index'));
    }
}