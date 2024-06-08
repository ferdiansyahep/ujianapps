<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_kelas',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
