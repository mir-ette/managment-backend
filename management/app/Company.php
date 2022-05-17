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
        'email',
        'wsp',
        'phone_no',
        'post_date',
        'servant_dealer',
        'servant_id',
    ];
    public function servant() { 
        return $this->belongsTo(Servant::class);
       }
}
// public function category() {  return $this->belongsTo(Category::class);}
// public function  drugs() {return $this->hasMany(Drug::class);}