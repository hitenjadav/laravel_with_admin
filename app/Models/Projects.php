<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'image',
      'location',
      'tags',
      'Total_garden',
      'children_play_area',
      'security_cabin',
      'gymisum',
      'water_facility',
      'cctv',
      'tample',
      'pdf',
    ];
    function bannerImage(){
      return $this->hasOne(ProjectsGallery::class, 'project_id','id');
    }
    function project_images(){
      return $this->hasMany (ProjectsGallery::class, 'project_id','id');
    }
}
