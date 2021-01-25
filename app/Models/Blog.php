<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * Blog has many stories
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stories(){
        return $this->hasMany(Story::class);
    }
}
