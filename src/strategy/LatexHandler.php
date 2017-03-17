<?php

namespace documentGenerator;
/**
 * Implements the Strategy to convert a given Document into a Latex Document.
 * User: claru
 * Date: 27.12.16
 * Time: 15:39
 */

class LatexStrategy implements IOutputStrategy
{
    /**
     * @var Document
     */
    private $document;
    /**
     * @var OutputConfiguration
     */

    private $configuration;

    public function generateOutput(Document $document, OutputConfiguration $configuration)
    {
        $this->document = $document;
        $this->configuration = $configuration;
        $this->generateRootFolder();
    }

    private function generateRootFolder(){
        //generate Root Folder
        $rootFolder = new LatexFolder();
        $rootFolder->setPath($this->configuration->getPath());
        //todo Generate the actual output Structure.
    }

}