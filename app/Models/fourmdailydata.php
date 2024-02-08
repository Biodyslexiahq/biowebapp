<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fourmdailydata extends Model
{
    use HasFactory;

    protected $fillable = ['Programme','time','Online_class','Student_name','NRIC'];
}
