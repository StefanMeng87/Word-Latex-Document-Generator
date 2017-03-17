<?php
namespace documentGenerator;

/**
 * Interface for Generating new Output.
 * User: claru
 * Date: 27.12.16
 * Time: 15:13
 */
interface IOutputStrategy
{

    public function generateOutput(Document $document);

}