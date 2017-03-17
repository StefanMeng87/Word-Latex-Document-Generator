<?php
/**
 * Datamodel class.
 * User: Stefan
 * Date: 27.12.16
 * Time: 15:58
 */

namespace documentGenerator;


class Chapter
{
    private $name;
    private $text;


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
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }




}