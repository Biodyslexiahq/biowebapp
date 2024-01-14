<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentData extends Model
{
    use HasFactory;

    protected $fillable = ['Parents_name','Students_name','Students_age','Address','Contact_number','Email','Date','Time','Assessment_option','Payment_option'];
}
