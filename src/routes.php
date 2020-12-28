<?php

use Siler\Route;

use function Siler\Http\Response\html;

Route\get('/', ROOT . 'src/views/home.php');
Route\get('/about', ROOT . 'src/views/about.php');
Route\get('/search', ROOT . 'src/views/input.php');

Route\get('/_turbo/frame1', ROOT . 'src/views/frame1.php');
Route\get('/_turbo/frame_msg', ROOT . 'src/views/frame_msg.php');

if (!Route\did_match()) {
    html('not found', 404);
}
