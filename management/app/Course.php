<?php

namespace App;
use App\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
        'got_certificate',
        
        'date_of_certificate',
        'centrename_of_givencourse',
        'employee_id',
        
    ];
     public function employee() { 
         return $this->belongsTo(Employee::class);
        }
}
