<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Billings extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'billings';
    protected $fillable = [
        "UserId",
        "ProjectName",
        "ProjectDetail",
        "Total",
        "Paid",
        "Outstanding",
    ];
    use HasFactory;
}
