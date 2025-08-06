<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'is_done',
        'due_at',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function reminders()
    {


        return $this->morphMany(Reminder::class, 'reminderable');

    }



    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
