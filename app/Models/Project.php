<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Http\Controllers\ProjectController;

class Project extends Model
{
    // use HasFactory;
    protected $fillable = ['name', 'description'];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
