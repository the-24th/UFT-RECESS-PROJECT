<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agent extends Model
{

    public function setSignatureAttribute($value)
{
    $this->attributes['signature'] = strtoupper($value);
}

public function setFnameAttribute($value)
{
    $this->attributes['fname'] = ucfirst($value);
}

public function setLnameAttribute($value)
{
    $this->attributes['lname'] = ucfirst($value);
}


    protected $primaryKey = 'agentid';

}
