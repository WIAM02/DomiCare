<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';
    protected $primaryKey = 'id_client';

    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'nom',
        'prenom',
        'age',
        'email',
        'telephone',
        'ville',
    ];
}
