<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id', 'user_id', 'file_name', 'file_type', 'file_size', 'file_path'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }

    public function reminders()
    {
        return $this->morphMany(Reminder::class, 'reminderable');
    }




}
