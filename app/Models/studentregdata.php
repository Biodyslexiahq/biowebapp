<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentregdata extends Model
{
    use HasFactory;

    protected $fillable= ['Studentname','Studentage','Gender','NRIC','EtchnicBackground','Schoolgrade','Address','Fathername','Fathernum','FatherEmail','Mothername','Motheremail','Mothernum','Progreg','Ethnicothers'];
}
