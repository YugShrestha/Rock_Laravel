<?php

namespace App\Models;

use GuzzleHttp\Psr7\Query;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable=['artist','logo','title','email','description','list','location'];
    public $table='band';
    public $timestamps=true;
    use HasFactory;  


    public function scopefilters($Query,array $filters){
          
           if($filters['search'] ?? false){
            $Query->where('artist', 'like', '%' . request('search') . '%')->orwhere('description', 'like', '%' . request('search') . '%')
            ->orwhere('list','like','%'. request('search') .'%')->orwhere('title','like','%' .request('search') .'%');
           }
    }
}
