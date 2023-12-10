<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Shift;

class Schedule extends Model
{
    use HasFactory;
    
    public $fillable = [
        'employee_id',
        'shift_id'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function shift(){
        return $this->belongsTo(Shift::class);
    }
}
