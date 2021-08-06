<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'address',
        'contact'
    ];

    public function container() {
        return $this->belongsTo('App\Models\Asset', 'name', 'id');
    }
}
