<?php

namespace App;
use App\Servant;
use App\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'status',
        'no_of_req_emp',
        'create_at',
        'notes',
        'job',
        'requirements',
        'salary',
        'insurance',
        'transportation',
        'where to post',
        'commission',
        'code',
        'servant_id',
        'comp_id'

    ];
    public function servant() { 
        return $this->belongsTo(Servant::class);
       }
       public function company() { 
        return $this->belongsTo(Company::class);
       }  
}
