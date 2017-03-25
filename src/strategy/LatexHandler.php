<?php

namespace documentGenerator;
use phpDocumentor\Reflection\Types\Null_;

/**
 * Implements the Strategy to convert a given Document into a Latex Document.
 * User: claru
 * Date: 27.12.16
 * Time: 15:39
 */

class LatexHandler implements OutputStrategyInterface
{
    /**
     * @var Document
     */
    private $document;
    /**
     * @var OutputConfiguration
     */
    private $configuration;

    /**
     * @param Document $document
     * @param OutputConfiguration $configuration
     * @return LatexFolder
     *
     */

    public function generateOutput(Document $document, OutputConfiguration $configuration)
    {
        $this->document = $document;
        $this->configuration = $configuration;
        $rootFolder = $this->generateRootFolder();
        return $rootFolder;
    }

    /**
     * @return LatexFolder
     */
    private function generateRootFolder(){
        //generate Root Folder
        if ($this->document == Null or $this->configuration == NULL){
            return Null;
        }
        $rootFolder = new LatexFolder();
        $rootFolder->setName($this->document->getShortName().'_Assignment');
        $rootFolder->setPath($this->configuration->getPath());
        $chapters = $this->document->getAllChapters();
        // create Latex Files.
        foreach ($chapters as $chapter) {
            $latexFile = new LatexFile();
            /* @var $chapter Chapter */
            $latexFile->setHeader($chapter->getName());
            $latexFile->setText($chapter->getText());

        }
        return $rootFolder;
    }

}