<?php
/**
 * User: Stefan
 * Date: 27.12.16
 * Time: 15:58
 * Representation of a Document.
 */

namespace documentGenerator;


class Document
{
    //
    private $chapters = array();
    private $type;
    private $title;
    private $language;
    private $author;

    function addChapter($chapter)
    {
        array_push($this->chapters, $chapter);
    }

    function getAllChapters()
    {
        return $this->chapters;
    }

    /**
     * @return array
     */
    public function getChapters(): array
    {
        return $this->chapters;
    }

    /**
     * @param array $chapters
     */
    public function setChapters(array $chapters)
    {
        $this->chapters = $chapters;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }



}