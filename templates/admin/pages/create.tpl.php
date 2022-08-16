<h3>Administração de páginas</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="Aqui você digita o título da página.">
    </div>
    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="URL amigável, deixar em branco para informar a página inicial...">
        </div>
    </div>
    <div class="form-group">
        //editor de texto
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr/>

<a href="/SchoolOfNet/PHP/site_adm_php/public/index.php/admin/pages" class="btn btn-secondary">Voltar</a>