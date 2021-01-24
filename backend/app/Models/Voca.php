<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voca extends Model
{
    use HasFactory;

    protected $table = "vocas";
    protected $fillable = ["word", "text", "user_id"];

    public function user()
    {
        return $this->belongsto('App\Models\User');
    }
}
