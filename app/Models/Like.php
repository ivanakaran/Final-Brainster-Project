<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Like extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

