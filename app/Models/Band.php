<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{

    public $table='band';
    public $timestamps=true;
    use HasFactory;
}
