<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table= 'contacts';
    protected $fillable=['name','number1','number2','tag','image'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
