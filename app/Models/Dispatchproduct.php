<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispatchproduct extends Model
{
    use HasFactory;
    protected $fillable = ['warehouse', 'datedispatch', 'truck', 'challan', 'phone', 'dispatch_status', 'site_name', 'location', 'dispatch_by', 'd_warehouse'];

    public function products(){
        return $this->belongsToMany(product::class)->withPivot(['id','quantity','unit']);;
    }
}
