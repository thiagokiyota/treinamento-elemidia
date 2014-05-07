<?php

require_once './vendor/autoload.php';

use Elemidia\File;
use Elemidia\Folder;

$folder1 = new Folder('Elemidia1');
$folder2 = new Folder('Elemidia2');
$folder3 = new Folder('Elemidia3');

$file1 = new File('arquivo1.txt');
$file2 = new File('arquivo2.txt');
$file3 = new File('arquivo3.txt');

$folder1->add($file1)
        ->add($file2)        
        ->add($folder2);
        
$folder2->add($file1)
        ->add($folder3);

$folder3->add($file1)
        ->add($file2)
        ->add($file3);

echo '<pre>';
print_r($folder1->getName(1));