<?php

if (rota('/admin')){
    render('admin/home', 'admin');
} elseif (rota('/admin/pages')){
    render('admin/pages', 'admin');
} else {
    http_response_code(404);
    echo "página não encontrada";
}