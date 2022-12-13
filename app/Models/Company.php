<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'logo'
    ];

    // relation to Users Models
    public function users(){
        return $this->belongsToMany(User::class);
    }

    // Relation to Teams Models
    public function teams(){
        return $this->hasMany(Team::class);
    }

    // relation to Roles Models
    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
