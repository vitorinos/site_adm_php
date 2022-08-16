<?php

if (rota('/admin')){
    render('admin/home', 'admin');

} elseif (rota('/admin/pages')){
    render('admin/pages/index', 'admin');

} elseif (rota('/admin/pages/create')){
    render('admin/pages/create', 'admin');

} elseif (rota('/admin/pages/(\d)+')){
    render('admin/pages/view', 'admin');

} elseif (rota('/admin/pages/(\d)+/edit')){
    render('admin/pages/edit', 'admin');

} elseif (rota('/admin/pages/(\d)+/delete')){
    header('location: /SchoolOfNet/PHP/site_adm_php/public/index.php/admin/pages');

} else {
    http_response_code(404);
    echo "página não encontrada";
}