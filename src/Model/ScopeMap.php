<?php

namespace Luminee\Label\Model;

use Luminee\Base\Models\BaseModel;

class ScopeMap extends BaseModel
{
    protected $table = 'label_scope_map';

    protected $fillable = ['label_id', 'scope_id', 'is_visible', 'is_available'];
    
}