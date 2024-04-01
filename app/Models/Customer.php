<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // use HasFactory;
    protected $fillable = ['name', 'about', 'image','address', 'phone', 'email'];

    public function experiences()
    {
        return $this->hasMany('App\Models\Experience');
    }
    
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
}
