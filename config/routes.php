<?php
use Cake\Routing\Router;

Router::plugin('CakeUpload',  ['path' => '/cake-upload'], function ($routes) {
    $routes->fallbacks('DashedRoute');
});
