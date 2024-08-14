<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    
    public function index()
    {
        $banners=Banner::orderBy('id','desc')->get();
        return view('admin.banner.index',compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.create');
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
        
        $testimonial = new Banner();
        $testimonial->title= $request->title;
        $testimonial->content= $request->content;
        $testimonial->image= $uploaded;
        $testimonial->status= 1;
        $testimonial->save();
       
        return redirect()->route('banners.index')->with('message','Banner created successfully.');
    }

    public function statusChange($id)
    {
       $banner = Banner::find($id);
       if($banner->status == 1){
        $msg = 'Banner In Actived SuccessFully.';
        $sts = 0;
        $clr='error';
       }
       else{
        $msg = 'Banner Actived SuccessFully.';
        $sts = 1;
        $clr = 'message';
       }
       $banner->status = $sts;
       $banner->save();
       return redirect()->back()->with($clr,$msg);
    }

   
    public function edit(string $id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit',compact('banner'));
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
        
        $testimonial =  Banner::find($id);
        $testimonial->title= $request->title;
        $testimonial->content= $request->content;
        $testimonial->image= $uploaded;
        $testimonial->status= 1;
        $testimonial->save();
       
        return redirect()->route('banners.index')->with('message','Banner updated successfully.');
    }


    public function destroy(string $id)
    {
        Banner::where('id',$id)->delete();
        return redirect()->back()->With('error','Banner deleted successfully.');
    }
}
