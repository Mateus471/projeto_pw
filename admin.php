<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/semantic.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/icon.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/semantic.min.js"></script>
        <link rel="stylesheet" href="css/styleIndex.css">
        <meta charset="utf-8">
        <title>Loja</title>
    </head>
    <body>
        <div class="content">
            <h1 id="title">Administrador</h1>
            <div class="ui top fixed menu">
                <a class="item" href="vitrine.php">Vitrine</a>
                <a class="item" href="admin.php">Administrador</a>
            </div>
            <div class="ui action input fr">
              <input type="text" placeholder="Pesquisar...">
              <button class="ui button">Pesquisa</button>
            </div>
            <div id="divnewproduct">
                <button id="newproduct" class="ui button blue fr">Novo</button>
            </div>
        </div>
    </body>
</html>

<div id="modal-newproduct" class="ui modal">
    <div class="header">
        Cadastro de Produto
    </div>
    <div class="description">
        <div id="container">
            <form enctype="multipart/form-data" action="insert.php" method="post" class="ui form">
                <div class="field">
                    <label>Nome</label>
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="field">
                    <label>Preço</label>
                    <input type="text" name="value" placeholder="Preço">
                </div>
                <div class="field">
                    <label>Imagem</label>
                    <input type="file" name="photo" accept="image/*" placeholder="Imagem">
                </div>
                <div class="actions">
                    <div class="ui white deny button">Cancelar</div>
                    <button class="ui button green" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#newproduct').click(function(){
            $('#modal-newproduct').modal('show');
        });
    });
</script>
