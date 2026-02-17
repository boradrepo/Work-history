<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function students()
    {
        return $this->hasManyThrough(
            Student::class, // Target model1112
            ClassModal::class, // intermediate model
            'school_id', // Intermediate foreign key
            'class_id', // Target model foreign key
            'id', // Primary key base model
            'id' // Primary key intermediate model
        );    
    }

    public function classes() {
        return $this->hasMany(ClassModal::class);
    }
}
