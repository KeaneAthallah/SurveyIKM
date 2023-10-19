<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function answer()
    {
        return $this->hasMany(Answers::class);
    }
}
