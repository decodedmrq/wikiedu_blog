<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    const APPROVED = 1;
    const NOT_APPROVED = 0;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::Class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::Class);
    }
}
