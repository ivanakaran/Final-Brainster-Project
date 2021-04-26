<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class)->withPivot('id');
    }

    public function getRouteKey()
    {
        return 'slug';
    }

}