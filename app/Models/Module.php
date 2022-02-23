<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $with = ['classmodel', 'disciplines'];

    public function classmodel()
    {
        return $this->belongsTo(ClassModel::class, 'class_models_id','id');
    }
    
    public function disciplines()
    {
         return $this->hasMany(Discipline::class, 'id','modules_id');
    }

}
