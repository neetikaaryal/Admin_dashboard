<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['name', 'description'];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
