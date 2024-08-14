<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsOffer extends Model
{
    use HasFactory;
    protected $fillable = [
        'offer_name',
        'image',
        'slug',
        'project_id',
        'description',
        'start_date',
        'end_date',
      ];
}
