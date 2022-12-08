<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Client extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'clients';
    protected $fillable = [
        "Email",
        "PhoneNumber",
        
        "FirstName",
        "LastName",
        "Business Name",
        "Description",
    ];
    use HasFactory;
}
