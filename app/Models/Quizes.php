<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizes extends Model
{
    use HasFactory;

    protected $fillable=['quiz_name','description','quiz_time','quiz_date','status','number_of_question'];

    public function questions()
    {
        return $this->hasMany(Questions::class);
    }
    public function result()
    {
        return $this->hasOne(Results::class);
    }
     public function results()
    {
        return $this->hasMany(Results::class);
}
}
