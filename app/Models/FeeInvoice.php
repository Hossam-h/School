<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeInvoice extends Model
{
    

    public function student(){
        return $this->belongsTo('App\Models\Student','student_id');
    }

    public function fees(){
        return $this->belongsTo('App\Models\Fee','fee_id');
    }

    public function grade(){
        return $this->belongsTo('App\Models\Grade','Grade_id');
    }

    public function classroom(){
        return $this->belongsTo('App\Models\Classroom','Classroom_id');
    }
}
