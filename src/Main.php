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
include('output/IOutputStrategy.php');
include('output/LatexHandler.php');
// Learn all Language related stuff.
$chapter = new Chapter();
$chapter->setName('First Chapter');
$chapter->setText('This is the first Chapter, which I have created.');
$document = new Document();
$document->setAuthor('Stefan Meng');
$document->setLanguage('english');
$document->setTitle('Image Pattern matching algorithm');
$document->setType('Bachelor Thesis');
$document->addChapter($chapter);
//
$strategy = new \LatexStrategy();

//
echo '';
