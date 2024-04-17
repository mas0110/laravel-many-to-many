<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];


    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    //un singolo progetto è collegato a più tags

    public function project(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
