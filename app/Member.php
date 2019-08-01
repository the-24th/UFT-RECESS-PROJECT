<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey='id';
    public $incrementing = false;

    public function customId(){
        $district=$this->attributes['district'];

    }

    public function setMemberIdAttribute($value){
        $this->attributes['member_id']= customId($value);
    }

}
