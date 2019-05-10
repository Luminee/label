<?php

namespace Luminee\Label\Repository;

use Luminee\Label\Foundation\Builder;

class BaseRepository
{
    protected $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function __call($name, $arguments)
    {
        if (strstr($name, 'create') && count($arguments) == 1) {
            return $this->create(lcfirst(explode('create', $name)[1]), $arguments[0]);
        }

        if (strstr($name, 'update') && count($arguments) == 2) {
            return $this->update(lcfirst(explode('update', $name)[1]), $arguments[0], $arguments[1]);
        }

        if (strstr($name, 'delete') && count($arguments) == 1) {
            return $this->delete(lcfirst(explode('delete', $name)[1]), $arguments[0]);
        }

        return $this->$name();
    }

    protected function create($model, $data)
    {
        return $this->builder->setModel($model)->create($data);
    }

    protected function update($model, $id, $data)
    {
        return $this->builder->setModel($model)->where('id', $id)->update($data);
    }

    protected function delete($model, $id)
    {
        return $this->builder->setModel($model)->where('id', $id)->delete();
    }

}