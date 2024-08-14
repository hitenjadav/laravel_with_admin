<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('id','desc')->get();
        return view('admin.partner.index',compact('partners'));
    }
    
    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
        ]);

        $uploaded = "";
        if ($request->hasFile('image')) {
             $image = $request->file('image');    
             $uploaded = time() . '.' . $image->getClientOriginalExtension();
             $destinationPath = public_path('/all_image');
             $image->move($destinationPath, $uploaded);
        }
        
        $partner = new Partner();
        $partner->name= $request->name;
        $partner->designation= $request->designation;
        $partner->image= $uploaded;
        $partner->save();
       
        return redirect()->route('partners.index')->with('message','Partner created successfully.');
    }

    public function edit(string $id)
    {
        $partner =Partner::find($id);
        return view('admin.partner.edit',compact('partner'));
    }

    public function update(Request $request, string $id)
    {

        
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
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
        
        $partner =  Partner::find($id);
        $partner->name= $request->name;
        $partner->designation= $request->designation;
        
        $partner->image= $uploaded;

        $partner->save();
        
       
        return redirect()->route('partners.index')->with('message','Partner updated successfully.');
    }

    
    public function destroy(string $id)
    {
        Partner::where('id',$id)->delete();
        return redirect()->back()->with('error','Partner deleted successfully.');
    }
}
