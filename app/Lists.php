<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model 
{
   protected $fillable = [
   		'title',
   		'description',
   		'shoppingDate',
   		
   	];
   	public function user()
    {
        return $this->belongsTo(User::class);
    }
}


