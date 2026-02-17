<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModal extends Model
{
    use HasFactory;
    protected $table = 'class_modals';

    protected $fillable = ['class_name', 'school_id'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}
