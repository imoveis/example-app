<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'cnpj',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function adresses()
    {
       return $this->hasMany(Address::class);
    }
}
