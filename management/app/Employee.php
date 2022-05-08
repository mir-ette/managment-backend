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
        
        'full_name',
        'church_name',
        'specialization',
        'education',
        'gender',
        'marital_status',
        'age',
        'graduation_year',
        'birth_date',
        'mobile_number',
        'address',
        'area',
        'national_id',
        'passport_number',
        'notes',
        'certificates', //

    ];


     public function  courses() {
        return $this->hasMany( Course::class);
    }
    
    public function  experience() {
        return $this->hasMany( Experience::class);
    }
}

