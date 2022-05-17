<?php

namespace App;
use App\Application;
use App\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Servant extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'role',
        'church_name',
        'name'
    ];
    public function  applications() {
        return $this->hasMany( Application::class);
    }
    
    public function companies() {
        return $this->hasMany( Company::class);
    }
}
