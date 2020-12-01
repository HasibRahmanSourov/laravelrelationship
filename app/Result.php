<?php

namespace App;
use App\Result;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable =['st_id','exammonth','result'];
    public function student(){
       return $this->belongsTo('App\Student','st_id');

    }
}