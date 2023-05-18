<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsMonth extends Model
{
    protected $table = "questions_month";

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
