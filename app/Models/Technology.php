<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
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

    //una singola tecnologia è collegata a più progetti

    public function tecnology(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}
