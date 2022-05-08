<?php

namespace App;
use App\Servant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
        'address',
        'governorate',
        'way to communicate',
        'where to post',
        'commission',
        'servant_id',
    ];
    public function servant() { 
        return $this->belongsTo(Servant::class);
       }
}
// public function category() {  return $this->belongsTo(Category::class);}
// public function  drugs() {return $this->hasMany(Drug::class);}