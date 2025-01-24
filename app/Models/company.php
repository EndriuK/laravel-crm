<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo', 'P_iva', 'phone_number', 'address', 'email', 'website'];

    public function employee()
    {
        return $this->hasMany(employee::class);
    }
}
