<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable ,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Story can be created by one user, the user has many created stories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function created_stories(){
        return $this->hasMany(Story::class);

    }


    /**
     * Story can be edited by many users ,the user has  edit logs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function updated_stories(){
        return $this->belongsToMany(User::class);
    }
}
