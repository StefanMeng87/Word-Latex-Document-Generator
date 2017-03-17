<?php

namespace documentGenerator;
/**
 * Starting class. Test the application and some php functions.
 * User: stefan
 * Date: 11.02.17
 * Time: 09:16
 */
include('datamodel/Document.php');
include('datamodel/Chapter.php');
include ('datamodel/OutputConfiguration.php');
include('strategy/IOutputStrategy.php');
include('strategy/LatexHandler.php');
include ('output/LatexFile.php');
include ('output/LatexFolder.php');

// Learn all Language related stuff.
$chapter = new Chapter();
$chapter->setName('First Chapter');
$chapter->setText('This is the first Chapter, which I have created.');
$document = new Document();
$document->setAuthor('claru');
$document->setLanguage('english');
$document->setTitle('Image Pattern matching algorithm');
$document->setType('Bachelor Thesis');
$document->addChapter($chapter);
$outputConfiguration = new OutputConfiguration();
$outputConfiguration->setPath('/tmp');
//
$strategy = new LatexStrategy();
$latexFolder =  $strategy->generateOutput($document, $outputConfiguration);
echo $latexFolder->getPath();
//
echo '';
