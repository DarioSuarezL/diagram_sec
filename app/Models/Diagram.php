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

    public function guests()
    {
        return $this->belongsToMany(User::class, 'diagrams_guests', 'diagram_id', 'guest_email', 'id', 'email');
    }

}
