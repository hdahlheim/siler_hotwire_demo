<?php

use function Siler\Http\Request\get;
use function Siler\Http\Response\html;
use function Siler\Twig\render;

$results = [];

// Do you think i implement real search for a demo
if (get('search')) {
    $results = [
        'foo',
        'bar',
        'baz',
        'waz',
    ];
}

html(render('input.twig', ['results' => $results]));
