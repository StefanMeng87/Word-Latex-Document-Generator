<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 17.03.17
 * Time: 22:16
 */

namespace documentGenerator;


class LatexFolder
{
    private $path;
    private $name;
    private $subFolders = [];
    private $files = [];

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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getSubFolders(): array
    {
        return $this->subFolders;
    }

    /**
     * @param array $subFolders
     */
    public function setSubFolders(array $subFolders)
    {
        $this->subFolders = $subFolders;
    }

    /**
     * @return array
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param array $files
     */
    public function setFiles(array $files)
    {
        $this->files = $files;
    }


}