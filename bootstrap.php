<?php

require __DIR__. '/config.php';
require __DIR__. '/src/error_handler.php';
require __DIR__. '/src/rota-route.php';
require __DIR__. '/src/render.php';
require __DIR__. '/src/connection.php';

if (rota('/admin/?(.*)')){
    require __DIR__. '/admin/routes.php';
} elseif(rota('/(.*)')) {
    require __DIR__. '/site/routes.php';
}



