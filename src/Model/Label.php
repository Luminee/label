<?php

namespace Luminee\Label\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Label extends _BaseModel
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'label';

    protected $fillable = ['name', 'code', 'label_type_id', 'parent_id', 'level', 'power', 'is_available'];

    public function type()
    {
        return $this->belongsTo('Luminee\Label\Model\Type', 'label_type_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('Luminee\Label\Model\Label', 'parent_id', 'id');
    }
}