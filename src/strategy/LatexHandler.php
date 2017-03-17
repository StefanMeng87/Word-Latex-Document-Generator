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
        $rootFolder = new LatexFolder();
        $rootFolder->setPath($this->configuration->getPath());
        //todo Generate the actual output Structure.
        return $rootFolder;
    }

}