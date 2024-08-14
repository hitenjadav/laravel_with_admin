<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'project_id',
      ];
}
