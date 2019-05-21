<?php

namespace Luminee\Label\Model;

use Luminee\Base\Models\BaseModel;

class Scope extends BaseModel
{
    protected $table = 'label_scope';

    protected $fillable = ['code', 'name', 'is_visible', 'is_available'];
    
}