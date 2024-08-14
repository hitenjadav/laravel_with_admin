<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectsCategory;

class ProjectCatController extends Controller
{
    public function index()
    {
        $catagories = ProjectsCategory::orderby('id','desc')->get();
        return view('admin.project_cat.index',compact('catagories'));
    }

    public function create()
    {
        return view('admin.project_cat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
    
        $projectCat = new ProjectsCategory();
        $projectCat->name= $request->title;
        $projectCat->slug= $request->title;
        $projectCat->save();
        return redirect()->route('categories.index')->with('message','Category created successfully.');
    }
    
    public function edit($id)
    {
        $catInfo = ProjectsCategory::find($id);
        return view('admin.project_cat.edit',compact('catInfo'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $projectCat =  ProjectsCategory::find($id);
        $projectCat->name= $request->title;
        $projectCat->slug= $request->title;
        $projectCat->save();
        return redirect()->route('categories.index')->with('message','Category updated successfully.');
    }

    public function destroy($id)
    {
        ProjectsCategory::where('id',$id)->delete();
        return redirect()->back()->with('error','Category deleted successfully.');  
    }
}
