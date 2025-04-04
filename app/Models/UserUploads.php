<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUploads extends Model
{
    /** @use HasFactory<\Database\Factories\UserUploadsFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'design_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

 

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
