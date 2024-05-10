<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class mst_user extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $guarded = ['id'];
    protected $table = 'mst_users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'username',
        'password',
        'role',
    ];
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
