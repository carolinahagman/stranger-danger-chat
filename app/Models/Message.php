<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'chat_id',
        'message',
    ];

    public function chat()
    {
        return $this->belongsTo(Chat::class, 'chat_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
