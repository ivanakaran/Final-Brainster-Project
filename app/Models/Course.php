<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot('id');
    }

    public function hasCategory($categoryId)
    {
        return in_array($categoryId, $this->categories->pluck('id')->toArray());
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function is_liked_by_auth_user()
    {
        $id = Auth::id();

        $likers = [];

        foreach($this->likes as $like)
        {
          array_push($likers,$like->user_id );
        }

        if(in_array($id, $likers)){
            return true;
        }else{
            return false;
        }
    }

    public function scopeFree($query)
    {
        return $query->where('free',  '1');
    }

    public function scopePaid($query)
    {
        return $query->where('paid',  '1');
    }

    public function scopeVideo($query)
    {
        return $query->where('video',  '1');
    }

    public function scopeBook($query)
    {
        return $query->where('book',  '1');
    }

    public function scopeEnglish($query)
    {
        return $query->where('language',  'english');
    }

    public function scopeMacedonian($query)
    {
        return $query->where('language',  'macedonian');
    }

    public function scopeAdvanced($query)
    {
        return $query->where('level',  'advanced');
    }

    public function scopeBeginner($query)
    {
        return $query->where('level',  'beginner');
    }
}