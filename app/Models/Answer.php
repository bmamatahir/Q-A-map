<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function creator() {
        return $this->belongsTo(User::class, 'user_id', '_id');
    }

    public function question() {
        return $this->belongsTo(Question::class);
    }
}
