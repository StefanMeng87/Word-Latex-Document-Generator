<?php
/**
 * User: Stefan
 * Date: 27.12.16
 * Time: 15:58
 * Representation of a Document.
 */

namespace documentGenerator;


class Document implements IDocument
{
    private $chapters = array();

    function addChapter($chapter)
    {
        array_push($this->chapters, $chapter);
    }


}