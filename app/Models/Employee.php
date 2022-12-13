<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'age',
        'phone',
        'photo',
        'role_id',
        'is_verified',
        'verified_at'

    ];

    // child relation to Team Models
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    // child relation to Role Models
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
