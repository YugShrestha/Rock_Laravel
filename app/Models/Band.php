<?php

namespace App\Models;

use GuzzleHttp\Psr7\Query;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{

    public $table='band';
    public $timestamps=true;
    use HasFactory;


    public function scopefilters($Query,array $filters){
           if($filter['tags'] ?? false){
  
               $Query->where('tags','like','%'.request('tag').'%'); 
           }
    }
}
