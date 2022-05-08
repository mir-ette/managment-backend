<?php

namespace App;
use App\Servant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'status',
        'no_of_req_emp',
        'created_at',
        'notes',
        'job',
        'requirements',
        'salary',
        'insurance',
        'transportation',
        'servant_id'
    ];
    public function servant() { 
        return $this->belongsTo(Servant::class);
       }
       
}
