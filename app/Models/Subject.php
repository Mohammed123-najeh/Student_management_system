<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{


    protected $fillable=['subject_name','color','description','instructor_name','semester_id'];


    public function semesters()
    {
        return $this->belongsTo(Semester::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);

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
