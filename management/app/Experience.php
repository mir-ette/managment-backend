<?php

namespace App;
use App\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'job',
        'company',
        'about_job',
        'from',
        'to',
        'employee_id'
    ];
    public function employee() { 
        return $this->belongsTo(Employee::class);
       }
}
