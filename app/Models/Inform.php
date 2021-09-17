<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inform extends Model
{
    use HasFactory;

        protected $fillable = [
        'problem',
        'email',
        ];
        
    protected $guarded=[];
}
