<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Banner;
use App\Models\Projects;
use App\Models\Testimonial;
use App\Models\Cms;
class CmsController extends Controller
{
    
    public function index()
    {
       $info = Cms::get();
       return view('admin.cms.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $info = Cms::find($id);
        return view('admin.cms.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($id == 1){
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'featured_subtitle' => 'required',
                'featured_content' => 'required',
                'blog_1' => 'required',
                'blog_2' => 'required',
                'blog_3' => 'required',
                'blog_4' => 'required',
                'buliding_finnished' => 'required',
                'total_cunstruction' => 'required',
                'total_experince' => 'required',
                'certified_bank' => 'required',
            ]);
            $uploaded = "";
            $up_subimage = "";
            if ($request->hasFile('image')) {
                $image = $request->file('image');    
                $uploaded = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/all_image');
                $image->move($destinationPath, $uploaded);

            }
            else{
                $uploaded = $request->old_image;
            }

            if ($request->hasFile('sub_image')) {
                $sub_image = $request->file('sub_image');    
                $up_subimage = time() . '.' . $sub_image->getClientOriginalExtension();
                $destinationPath = public_path('/all_image');
                $sub_image->move($destinationPath, $up_subimage);
                
            }else{
                $up_subimage = $request->old_sub_image;
            }
            $cmsInfo = Cms::find($id);
            $cmsInfo->title = $request->title;
            $cmsInfo->sub_image = $up_subimage;
            $cmsInfo->content = $request->content;
            $cmsInfo->image = $uploaded;
            $cmsInfo->featured_subtitle = $request->featured_subtitle;
            $cmsInfo->featured_content = $request->featured_content;
            $cmsInfo->blog_1 = $request->blog_1;
            $cmsInfo->blog_2 = $request->blog_2;
            $cmsInfo->blog_3 = $request->blog_3;
            $cmsInfo->blog_4 = $request->title;
            $cmsInfo->buliding_finnished = $request->buliding_finnished;
            $cmsInfo->total_cunstruction = $request->total_cunstruction;
            $cmsInfo->total_experince = $request->total_experince;
            $cmsInfo->certified_bank = $request->certified_bank;
            $cmsInfo->save();
            return redirect()->route('cms.index')->with('message','Page Updated Successfully.');
        }

        elseif($id == 2){
            
            $uploaded = "";
            $mission_img = "";
            if ($request->hasFile('vision_image')) {
                $image = $request->file('vision_image');    
                $uploaded = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/all_image');
                $image->move($destinationPath, $uploaded);

            }
            else{
                $uploaded = $request->old_vision_image;
            }

            if ($request->hasFile('mission_image')) {
                $sub_image = $request->file('mission_image');    
                $mission_img = time() . '.' . $sub_image->getClientOriginalExtension();
                $destinationPath = public_path('/all_image');
                $sub_image->move($destinationPath, $mission_img);
                
            }else{
                $mission_img = $request->old_mission_image;
            }

            $request->validate([
                'vision_title' => 'required',
                'vision_content' => 'required',
                'mission_title' => 'required',
                'mission_content' => 'required',
                'in_image_title' => 'required',
                'in_image_content' => 'required',
            ]);
            $cmsInfo = Cms::find($id);
            $cmsInfo->vision_title = $request->vision_title;
            $cmsInfo->vision_content = $request->vision_content;
            $cmsInfo->vision_image = $uploaded;
            $cmsInfo->mission_title = $request->mission_title;
            $cmsInfo->mission_content = $request->mission_content;
            $cmsInfo->mission_image = $mission_img;
            $cmsInfo->in_image_title = $request->in_image_title;
            $cmsInfo->in_image_content = $request->in_image_content;
            $cmsInfo->save();
            return redirect()->route('cms.index')->with('message','Page Updated Successfully.');

        }elseif($id=3){
            $request->validate([
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
            ]);
            $cmsInfo = Cms::find($id);
            $cmsInfo->phone = $request->phone;
            $cmsInfo->email = $request->email;
            $cmsInfo->address = $request->address;
            $cmsInfo->save();
            return redirect()->route('cms.index')->with('message','Page Updated Successfully.');

        }else{
            return redirect()->route('cms.index')->with('error','Something wants wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function contacts() {
        
        $contacts = Contact::orderby('id','desc')->get();
        return view('admin.contact',compact('contacts'));
    }
    
    function contactDelete($id){
        Contact::where('id',$id)->delete();
        return redirect()->back()->with('error','Contact deleted successfully.');
    }
}
