<?php
/**
 * Simple Latex File.
 * User: stefan
 * Date: 17.03.17
 * Time: 22:16
 */

namespace documentGenerator;


class LatexFile
{
    private $header;
    private $text;

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
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