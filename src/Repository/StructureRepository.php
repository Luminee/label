<?php

namespace Luminee\Label\Repository;

class StructureRepository extends BaseRepository
{
    

    /**
     * @param $data
     * @return mixed
     */
    public function createLabel($data)
    {
        return $this->create('label', $data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createType($data)
    {
        return $this->create('type', $data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createScope($data)
    {
        return $this->create('scope', $data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function updateLabel($id, $data)
    {
        return $this->update('label', $id, $data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function updateType($id, $data)
    {
        return $this->update('type', $id, $data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function updateScope($id, $data)
    {
        return $this->update('scope', $id, $data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteLabel($id)
    {
        return $this->delete('label', $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteType($id)
    {
        return $this->delete('type', $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteScope($id)
    {
        return $this->delete('scope', $id);
    }

}
