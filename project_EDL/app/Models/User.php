<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'first_name',
        'second_name',
        'first_lastname',
        'second_lastname',
        'idtype',
        'email',
        'telephone',
        'address',
        'occupation',
        'birth',
        'photo',
        'inday',
        'outday',
        'actualproject',
        'status',
        'role_id',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function idName(){
        return $this->belongsTo(IdType::class, 'idtype', 'id');
    }

    public function occupationName(){
        return $this->belongsTo(Occupation::class, 'occupation', 'id');
    }

    public function statusName(){
        return $this->belongsTo(Status::class, 'status', 'id');
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

