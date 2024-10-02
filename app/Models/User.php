<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Traits\Hashidable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Hashidable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
      
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['hash_id'];

    public function getHashIdAttribute()
    {
        return $this->getRouteKey();
    }
    
    public function scopeFindHash($query, $hash_id)
    {
        $id = \Hashids::connection(\App\Models\User::class)->decode($hash_id)[0] ?? null;
        return $query->where('id', $id);
    }
}
