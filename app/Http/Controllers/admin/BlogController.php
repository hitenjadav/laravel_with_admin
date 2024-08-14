<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    
    public function index()
    {
        $blogs=Blog::orderBy('id','desc')->get();
        return view('admin.blog.index',compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);
        $uploaded = "";
        if ($request->hasFile('image')) {
             $image = $request->file('image');    
             $uploaded = time() . '.' . $image->getClientOriginalExtension();
             $destinationPath = public_path('/all_image');
             $image->move($destinationPath, $uploaded);
        }
        
        $testimonial = new Blog();
        $testimonial->title= $request->title;
        $testimonial->content= $request->content;
        $testimonial->image= $uploaded;
        $testimonial->status= 1;
        $testimonial->save();
       
        return redirect()->route('blogs.index')->with('message','blog created successfully.');
    }

    public function statusChange($id)
    {
       $blog = Blog::find($id);
       if($blog->status == 1){
        $msg = 'blog In Actived SuccessFully.';
        $sts = 0;
        $clr='error';
       }
       else{
        $msg = 'blog Actived SuccessFully.';
        $sts = 1;
        $clr = 'message';
       }
       $blog->status = $sts;
       $blog->save();
       return redirect()->back()->with($clr,$msg);
    }

   
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
    }

 
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $uploaded = "";
        if ($request->hasFile('image')) {
             $image = $request->file('image');    
             $uploaded = time() . '.' . $image->getClientOriginalExtension();
             $destinationPath = public_path('/all_image');
             $image->move($destinationPath, $uploaded);
        }
        else{
            $uploaded = $request->old_image;
        }
        
        $testimonial =  Blog::find($id);
        $testimonial->title= $request->title;
        $testimonial->content= $request->content;
        $testimonial->image= $uploaded;
        $testimonial->status= 1;
        $testimonial->save();
       
        return redirect()->route('blogs.index')->with('message','blog updated successfully.');
    }


    public function destroy(string $id)
    {
        Blog::where('id',$id)->delete();
        return redirect()->back()->With('error','blog deleted successfully.');
    }

        function blogs() 
        {
            
        $blogs = Blog::orderby('id','desc')->get();
        return view('admin.blog.index',compact('blogs'));
       }
}
