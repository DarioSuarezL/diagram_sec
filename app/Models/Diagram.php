<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagram extends Model
{
    protected $fillable = [
        'name',
        'description',
        'host_id',
        'content'
    ];

    use HasFactory;

    public function host()
    {
        return $this->belongsTo(User::class);
    }
}
