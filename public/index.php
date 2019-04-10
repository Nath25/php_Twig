<?php

require '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../src/view');
$twig = new Twig_Environment($loader);

$products = [['name' => 'banane'], 
            ['name' => 'cerise'],
            ['name' => 'ananas'], 
            ['name' => 'orange'],
            ['name' => 'citron'] ];

//include '../src/view/base.html.twig';
echo $twig->render('index.html.twig', ['products' =>$products]);

