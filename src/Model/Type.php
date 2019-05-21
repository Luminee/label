<?php

namespace Luminee\Label\Model;

use Luminee\Base\Models\BaseModel;

class Type extends BaseModel
{
    protected $table = 'label_type';

    protected $fillable = ['name', 'code'];
    
}