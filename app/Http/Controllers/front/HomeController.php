<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Banner;
use App\Models\Projects;
use App\Models\Testimonial;
use App\Models\Cms;
use App\Models\Partner;
use App\Models\ProjectsCategory;

class HomeController extends Controller
{
    function home(){
        $banners = Banner::orderBy('id','desc')->get();
        $cmsInfo = Cms::find(1);
        $contactInfo = Cms::find(3);
        $partners = Partner::orderBy('id','desc')->take(3)->get();
        $properties = Projects::with('bannerImage')->orderBy('id','desc')->take(3)->get();
        // return $properties;
        return view('welcome',compact('banners','cmsInfo','partners','properties','contactInfo'));
    }
    function about(){
        $cmsInfo = Cms::find(2);
        $homeInfo = Cms::find(1);
        $testimonials= Testimonial::orderBy('id','desc')->get();
        $partners = Partner::orderBy('id','desc')->get();

        return view('front.about',compact('cmsInfo','homeInfo','partners','testimonials'));
    }
    function contact(){
        
        return view('front.contact');
    }
    function property(){

        $categories = ProjectsCategory::orderBy('id','desc')->get();
        $projects = Projects::with('bannerImage')->orderBy('id','desc')->get();
        // return $categories;
        return view('front.property',compact('categories','projects'));
    }
    function career(){
        return view('front.career');
    }
    function property_details($slug){
        $propertyDetails =Projects::with('project_images','bannerImage')->where('slug',$slug)->first();
        // return $propertyDetails;
        return view('front.property_details',compact('propertyDetails'));
    }
    function contactStore(request $request){
        
        if($request->ckValue == ""){
            dd($request->ckValue);
            $contacts= New Contact();
            $contacts->fname = $request->name;
            $contacts->email = $request->email;
            $contacts->subject = $request->subject;
            $contacts->message = $request->message;
            $contacts->save();
            return redirect()->back()->with('info','Thank you we will get back to you shortly..');
        }
        else{
            return redirect()->back()->with('error','Somtething want wrong!');
        }
    }
}
