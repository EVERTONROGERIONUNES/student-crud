<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    use HasFactory;

    protected $with = ['professors', 'disciplinesA'];

    public function disciplinesA()
    {
        return $this->belongsTo(Discipline::class, 'discipline_id','id');
    }

    public function professors()
    {
        return $this->belongsTo(Professor::class, 'professor_id','id');
    }
}
