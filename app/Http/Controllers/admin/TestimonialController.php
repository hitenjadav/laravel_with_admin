<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
class TestimonialController extends Controller
{
    
    public function index()
    {
        $testimonials = Testimonial::orderBy('id','desc')->get();
        return view('admin.testimonial.index',compact('testimonials'));
    }
    
    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $uploaded = "";
        if ($request->hasFile('image')) {
             $image = $request->file('image');    
             $uploaded = time() . '.' . $image->getClientOriginalExtension();
             $destinationPath = public_path('/all_image');
             $image->move($destinationPath, $uploaded);
        }
        
        $testimonial = new Testimonial();
        $testimonial->name= $request->name;
        $testimonial->designation= $request->designation;
        $testimonial->words= $request->description;
        $testimonial->image= $uploaded;
        $testimonial->status= 1;
        $testimonial->save();
       
        return redirect()->route('testimonials.index')->with('message','Testimonial created successfully.');
    }

    public function edit(string $id)
    {
        $testimonial =Testimonial::find($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
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
        
        $testimonial =  Testimonial::find($id);
        $testimonial->name= $request->name;
        $testimonial->designation= $request->designation;
        $testimonial->words= $request->description;
        $testimonial->image= $uploaded;
        $testimonial->status= 1;
        $testimonial->save();
       
        return redirect()->route('testimonials.index')->with('message','Testimonial updated successfully.');
    }

    
    public function destroy(string $id)
    {
        Testimonial::where('id',$id)->delete();
        return redirect()->back()->with('error','Testimonial deleted successfully.');
    }
}
