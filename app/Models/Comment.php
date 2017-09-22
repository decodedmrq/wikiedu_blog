<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    //
    const NOT_APPROVED = 0;
	const APPROVED = 1;

    protected $fillable = [
        'content', 
        'user_id', 
        'post_id',
        'is_approved'
    ];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function post()
    {
    	return $this->belongsTo(Post::Class);
    }
}
