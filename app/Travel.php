<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ['nama_wisata','kuliner','artkikel'];
    public $timestamps  = true;

        public function kategori()
        {
            return $this->belongsTo('App\Kategori' , 'travel_id');
        }
}
