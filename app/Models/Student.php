<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student'; // Specify the table name if it's different from Laravel's conventions
    protected $primaryKey = 'StudentID'; // Specify the primary key if it's different from Laravel's conventions
    public $incrementing = false; // Set to false if your primary key is not auto-incrementing
    protected $keyType = 'string'; // Specify the data type of the primary key if it's not an integer
    protected $fillable = [
        'StudentID',
        'StudentPassword',
        'StuName',
        'StuDOB',
        'StuAddress',
        'TeacherID',
        'Branch',
        'ParentName1',
        'ParentContact1',
        'ParentEmail1',
        'ParentName2',
        'ParentContact2',
        'ParentEmail2',
    ];

    // Define relationships if any
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'TeacherID');
    }
}
