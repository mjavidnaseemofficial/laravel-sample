<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
        'user_id',
        'job_title'       
    ];   
    
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
