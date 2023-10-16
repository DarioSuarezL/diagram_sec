<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagrams_guests extends Model
{
    use HasFactory;
    protected $table = 'diagrams_guests';

    protected $fillable = [
        'diagram_id',
        'guest_email',
    ];

}
