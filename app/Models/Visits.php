<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
    protected $fillable=['user_id'];
}
