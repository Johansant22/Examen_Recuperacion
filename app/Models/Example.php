<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    protected $table = 'examples';
    protected $guarded = [];

    public function lector(){
        return $this->belongsToMany(Reader::class,'lector_persona'.'example_id','reader_id');
    }

    public function libro(){
        return $this->belongsTo('App\Models\Book');
    }

}
