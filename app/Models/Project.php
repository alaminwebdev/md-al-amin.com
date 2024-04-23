<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['project_name', 'slug', 'live_url', 'test_url', 'host_link','short_description', 'long_description', 'sort', 'status'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $slug = Str::slug($project->project_name);
            $originalSlug = $slug;
            $count = 1;

            // Check if the slug already exists
            while (static::whereSlug($slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $project->slug = $slug;
        });
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
