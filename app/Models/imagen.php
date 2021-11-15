<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagen extends Model
{
    protected $fillable = ['nombre','discripcion','imagen'];
    public function getRouteKeyName(){
    return 'discripcion';
}
}
