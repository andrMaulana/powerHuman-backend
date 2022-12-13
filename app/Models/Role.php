<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'company_id',
    ];
// child relation to Companies Models
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // parent relation to Responsibility Models
    public function responsibilities()
    {
        return $this->hasMany(Responsibility::class);
    }

    // parent relation to Employee Models
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
