<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\ProjectsCategory;
use Illuminate\Support\Str;
use App\Models\ProjectsGallery;



class ProjectController extends Controller
{
    public function index()
    {
       
        $projects = Projects::orderby('id','desc')->get();
        return view('admin.project.index',compact('projects'));
    }

    public function create()
    {
        $catagories = ProjectsCategory::orderby('id','desc')->get();
        return view('admin.project.create',compact('catagories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'Total_garden' => 'required',
            'children_play_area' => 'required',
            'security_cabin' => 'required',
            'gymisum' => 'required',
            'water_facility' => 'required',
            'cctv' => 'required',
            'tample' => 'required',
            'pdf' => 'required',
        ]);
        $pdfFile = "";
        if ($request->hasFile('pdf')) {
            $pdfFile = time() . '.' . $request->pdf->getClientOriginalExtension();
            $destinationPath = public_path('/all_image');
            $request->pdf->move($destinationPath, $pdfFile);
        }
        
        $project = new Projects();
        $project->category_id= $request->category_id;
        $project->slug= Str::slug($request->name);
        $project->name= $request->name;
        $project->location= $request->location;
        $project->description= $request->description;
        $project->tags = $request->tags;
        $project->Total_garden = $request->Total_garden;
        $project->children_play_area = $request->children_play_area;
        $project->security_cabin = $request->security_cabin;
        $project->gymisum = $request->gymisum;
        $project->water_facility = $request->water_facility;
        $project->cctv = $request->cctv;
        $project->tample = $request->tample;
        $project->pdf = $pdfFile;
        $project->status= 1;
        $project->save();
    
        if(isset($request->gallery_image)){
            foreach($request->gallery_image as $image){
                $uploaded = "";
                if ($request->hasFile('gallery_image')) {
                    $uploaded = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/all_image');
                    $image->move($destinationPath, $uploaded);
            
                    $galleryImage = new ProjectsGallery();
                    $galleryImage->image = $uploaded;
                    $galleryImage->project_id = $project->id; // Assuming project_id is correct
                    $galleryImage->save();
                }
            }
        }
        
        return redirect()->route('projects.index')->with('message','Project created successfully.');
    }
    
    public function edit($id)
    {
        $catagories = ProjectsCategory::orderby('id','desc')->get();
        $projectInfo = Projects::find($id);
        $projectGallery = ProjectsGallery::where('project_id',$id)->get();
        return view('admin.project.edit',compact('projectInfo','catagories','projectGallery'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'Total_garden' => 'required',
            'children_play_area' => 'required',
            'security_cabin' => 'required',
            'gymisum' => 'required',
            'water_facility' => 'required',
            'cctv' => 'required',
            'tample' => 'required',
        ]);
        $pdfFile = "";
        if ($request->hasFile('pdf')) {
            $pdfFile = time() . '.' . $request->pdf->getClientOriginalExtension();
            $destinationPath = public_path('/all_image');
            $request->pdf->move($destinationPath, $pdfFile);
        }
        else{
            $pdfFile = $request->old_pdf;
        }
        
        $project = Projects::find($id);
        $project->category_id= $request->category_id;
        $project->slug= Str::slug($request->name);
        $project->name= $request->name;
        $project->location= $request->location;
        $project->description= $request->description;
        $project->tags = $request->tags;
        $project->Total_garden = $request->Total_garden;
        $project->children_play_area = $request->children_play_area;
        $project->security_cabin = $request->security_cabin;
        $project->gymisum = $request->gymisum;
        $project->water_facility = $request->water_facility;
        $project->cctv = $request->cctv;
        $project->tample = $request->tample;
        $project->pdf = $pdfFile;
        $project->status= 1;
        $project->save();
        if(isset($request->gallery_image)){
        foreach($request->gallery_image as $image){
            $uploaded = "";
            if ($request->hasFile('gallery_image')) {
                $uploaded = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/all_image');
                $image->move($destinationPath, $uploaded);
        
                $galleryImage = new ProjectsGallery();
                $galleryImage->image = $uploaded;
                $galleryImage->project_id = $project->id;
                $galleryImage->save();
            }
        }
    }

        return redirect()->route('projects.index')->with('message','Project created successfully.');
    }

    public function destroy($id)
    {
        Projects::where('id',$id)->delete();
        return redirect()->back()->with('error','Project deleted successfully.');  
    }
}
