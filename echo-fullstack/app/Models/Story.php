<?php

namespace App\Models;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
