<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Database\factories\PEOPLEFatory;
class PEOPLE extends Model
{
    use HasFactory;
    protected $fillable=[
        'Name',
        'LastName',
        'street',
        'Country',
    ];
}
