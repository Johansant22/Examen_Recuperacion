<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;
    protected $table = 'readers';
    protected $guarded = [];

    public function ejemplares(){
        return $this->belongsToMany(Example::class, 'lector_persona','reader_id','example_id');
    }

}


//libros, ejemplares y usuarios
