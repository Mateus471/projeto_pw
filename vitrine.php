<?php
    require 'include/dbconnect.php';


    $sql = 'SELECT * FROM product_pw';
    $connection = mysqli_connect($server, $user, $password, $database);
    $result = mysqli_query($connection, $sql);
    var_dump($result);
 ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/semantic.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/semantic.js"></script>
        <link rel="stylesheet" href="css/styleIndex.css">
        <meta charset="utf-8">
        <title>Loja</title>
    </head>
    <body>
        <div id="container" class="content">
            <div class="ui top fixed menu">
                <a class="item" href="vitrine.php">Vitrine</a>
                <a class="item" href="admin.php">Administrador</a>
            </div>
            <h1 id="title">Vitrine Cocão NET</h1>
<?php
echo                    '<div class="ui three column grid">';
echo                        '<div class="column">';
echo                            '<div class="ui segment">';
echo                                '<img src="' . $result["photo"] . '">';
echo                            '</div>';
echo                        '</div>';
echo                        '<div class="column">';
echo                            '<div class="ui segment">';
echo                                '<img src="' . $result["photo"] . '">';
echo                            '</div>';
echo                        '</div>';
echo                        '<div class="column">';
echo                            '<div class="ui segment">';
echo                                '<img src="' . $result["photo"] . '">';
echo                            '</div>';
echo                        '</div>';
echo                    '</div>';

                mysqli_free_result($result);

                mysqli_close($connection);
?>
        </div>
    </body>
</html>
