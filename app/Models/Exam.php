<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Exam extends Model
{
    use HasTranslations;

    protected $translatable=['name'];
    protected $guarded=[];
}
