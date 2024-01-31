<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productrequest extends Model
{
    use HasFactory;
    protected $table = 'productrequests';
    protected $fillable = [
        'required_date',
        'warehouse',
        'remarks',
    ];
    
    public function products(){
        return $this->belongsToMany(product::class)->withPivot(['id','quantity','units']);
    }
}
