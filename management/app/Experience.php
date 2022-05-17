<?php

namespace App;
use App\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_job',
        'company',
        'about_job',
        'last_salary',
        'job_hours',
        'from',
        'to',
        'period',
        'transportation',
        'insurance',
        'commission',
        'employee_id'
    ];
    public function employee() { 
        return $this->belongsTo(Employee::class);
       }
}
