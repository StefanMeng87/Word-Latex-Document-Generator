<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 17.03.17
 * Time: 23:03
 */

namespace documentGenerator;


class OutputConfiguration
{

    private $path;

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }



}