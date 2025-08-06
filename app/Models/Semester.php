<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Semester extends Model
{

    use HasFactory;

    protected $fillable = ['semester_name', 'start_date', 'end_date', 'description'];


    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }


    public function users()
    {
        return $this->hasMany(User::class);
    }

}
