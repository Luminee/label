<?php

namespace Luminee\Label\Model;

use Luminee\Base\Models\BaseModel;

class Attribute extends BaseModel
{
    protected $table = 'label_attribute';

    protected $fillable = ['label_id', 'key', 'value'];
    
}