<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    const DELIVER_TYPE = 'deliver';
    const PRESSING_TYPE = 'pressing';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_name',
        'first_name',
        'tel',
        'image',
        'type',
        'code',
        'email_verified_at',
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

    public function isAdmin()    {
        return $this->type === self::ADMIN_TYPE;
    }

    public function isDeliver()    {
        return $this->type === self::DELIVER_TYPE;
    }

    public function isPressing()    {
        return $this->type === self::PRESSING_TYPE;
    }

    public function adresses()
    {
        return $this->hasMany('App\Models\Adress');
    }

    public function bills()
    {
        return $this->hasMany('App\Models\Bill');
    }
}
