<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function types()
    {
        return $this->belongsTo(Type::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
    protected $fillable = [
        'project_title',
        'launch_date',
        'project_thumbnail',
        'repository_url',
        'project_summary',
        'status_id',
        'type_id',
    ];
}
