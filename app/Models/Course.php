<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function classmodels()
    {
        //..uma instância de Course possui muitas Class (turmas)
        return $this->hasMany(ClassModel::class);
    }
}
