<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'name',
        'age',
    ];


    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
