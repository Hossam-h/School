<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Models\Teacher;

class Gender extends Model
{
    use HasTranslations;

    protected $fillable=['Name'];

    protected $translatable=['Name'];


    public function Teacheres(){
        return $this->hasMany(Teacher::class);
    }


}
