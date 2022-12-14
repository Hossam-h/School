<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Subject extends Model
{
   use HasTranslations;
    protected $translatable=['name'];
    protected $guarded=[];


    //relate with grade
    public function grade(){
        return $this->belongsTo('App\Models\Grade','grade_id');
    }

    //relate with class
    public function Classroom(){
        return $this->belongsTo('App\Models\Classroom','classroom_id');
    }

    //relate with teacher
    public function teacher(){
        return $this->belongsTo('App\Models\Teacher','teacher_id');
    }
}
