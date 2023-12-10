<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;

class AttendanceFault extends Model
{
    use HasFactory;

    public $fillable = [
        'attendance_id',
        'type',
        'description'
    ];

    public function attendance(){
        return $this->belongsTo(Attendance::class);
    }
}
