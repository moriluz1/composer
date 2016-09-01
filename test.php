<?php
/**
 * Created by IntelliJ IDEA.
 * User: shayb
 * Date: 31/08/2016
 * Time: 1:05 PM
 */
require __DIR__ . '/vendor/autoload.php';

use Povils\Figlet\Figlet;

// Default font is "big"
$figlet = new Figlet();

$figlet
    ->setFont('banner3')
    ->setFontColor('white')
    ->setBackgroundColor('green')
    ->write("Artifactory");