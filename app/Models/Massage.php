<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    protected $fillable=['text','user_id'];
    use HasFactory;
}
