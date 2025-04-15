<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Console\View\Components\Choice;

class Chapter extends Model
{
    public function story()
    {
        return $this->belongsTo(Story::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
