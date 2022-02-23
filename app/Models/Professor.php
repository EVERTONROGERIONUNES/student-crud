<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $with = ['assignP'];

    public function assignP()
    {
        return $this->hasMany(Assign::class,'id','professor_id');
    }
}
