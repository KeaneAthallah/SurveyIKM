<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function questions()
    {
        return $this->belongsTo(Questions::class);
    }
}
