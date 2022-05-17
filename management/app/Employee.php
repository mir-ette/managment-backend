<?php

namespace App;
use App\Course;
use App\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'nationality',
        'email',
        'phone-no',
        'full_name',
        'church_name',
        'wsp',
        'gender',
        'marital_status',
        'age',
        'birthdate',
        'address',
        'area',
        'national_id',
        'passport_number',
        'notes',
       

    ];


     public function  courses() {
        return $this->hasMany( Course::class);
    }
    
    public function  experience() {
        return $this->hasMany( Experience::class);
    }
}

