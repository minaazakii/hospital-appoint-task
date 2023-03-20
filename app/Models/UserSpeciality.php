<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserSpeciality extends Model
{
    use HasFactory;
    protected $fillable=['speciality_id','user_id','date','time'];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getTimeAttribute($time)
    {
        $formatedTime = Carbon::createFromFormat('H:i:s', $time)->format('h:i A');
        return $formatedTime;
    }
}
