<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Attendance;
use App\Models\Accomodate;
use App\Models\Fee;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }
    public function accomodates()
    {
        return $this->hasMany(Accomodate::class);
    }

    protected $fillable = [
        'name',
        'email',
        'physical_address',
        'phone_no',
        'date_of_birth',
        'status',
        'image',
        'password',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
