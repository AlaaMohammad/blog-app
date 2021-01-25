<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['title','content','blog_id'];


    /**
     * Story belongs to Blog
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Story(){
        return $this->belongsTo(Blog::class);
    }

    /**
     *
     * Blog created by one user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function created_by(){
        return $this->belongsTo(User::class);
    }

    /**
     *
     * Blog edited by many users
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function updated_by(){
        return $this->belongsToMany(User::class);
    }
}
