<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ['nama wisata','kuliner','artkikel','oleh oleh'];
    public $timestamps  = true;

        public function Kategori()
        {
            return $this->belongsTo('App\Kategori' , 'travel_id')
        }
}
