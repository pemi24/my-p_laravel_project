<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Contact extends Model
{
    use HasFactory;

    protected $table = 'contactus';
    protected $primaryKey = 'id';
    protected $fillable = ['fullName', 'lastName', 'email', 'phoneNumber', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}