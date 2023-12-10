<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Schedule;

class Attendance extends Model
{
    use HasFactory;

    public $fillable = [
        'employee_id',
        'schedule_id',
        'checkin_time',
        'checkout_time'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    
    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }

}
