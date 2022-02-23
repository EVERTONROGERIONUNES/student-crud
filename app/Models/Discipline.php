<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $with = ['module','assignD'];

    public function module()
    {
        return $this->belongsTo(Module::class,'modules_id', 'id');
    }
    public function assignD()
    {
        return $this->hasMany(Assign::class,'id','discipline_id');
    }
}
