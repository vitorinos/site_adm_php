<?php
 
 if (rota('/')){
    render('site/home', 'site');
} elseif (rota('/contato')){
    render('site/contato', 'site');
} else {
    http_response_code(404);
    echo "página não encontrada";
}