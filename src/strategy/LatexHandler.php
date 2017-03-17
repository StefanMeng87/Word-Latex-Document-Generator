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

    public function generateOutput(Document $document)
    {
        // TODO: Implement generateOutput() method.
        echo $document->getTitle();
    }
}