<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['tempat wisata','tips','who am i'];
    public $timestamps  = true;

        public function Travel()
        {
            return $this->hasMany('App\Travel' , 'kategori_id')
        }
}
