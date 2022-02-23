<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $with = ['course', 'modules'];
    
    public function course()
    {
        //..uma instância de turma (ClassModel) pertence a uma instância de Cursos(Courses)
        return $this->belongsTo(Course::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class,'id','class_models_id');
    }
}
