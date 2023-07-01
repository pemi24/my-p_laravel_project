<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    protected $table = 'devis';
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'phoneNumber', 'description', 'quantity', 'price', 'date', 'email', 'bdc'];

    use HasFactory;
}
