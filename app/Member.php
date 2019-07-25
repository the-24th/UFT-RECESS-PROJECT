<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey='id';
    public $incrementing = false;
    public function customId(){
    }

}

