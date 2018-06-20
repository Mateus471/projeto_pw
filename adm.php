<?php
    require 'include/dbconnect.php';
    $sql = "SELECT id, name, value, photo
              FROM project_pw";
    $connection = mysqli_connect($server, $user, $password, $database);
    $result = mysqli_query($connection, $sql);
 ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cocão NET</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php  require 'include/nav.html'; ?>
        <?php  require 'include/modalAdd.html'; ?>
        <div class="container">
            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAdd">
                Novo Produto
            </button>

            <div class="row">
<?php
                if (isset($result)){
                    while ($prod=mysqli_fetch_assoc($result)) {
echo '
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="' . $prod['photo'] . '" height="285px" width="265px" alt="">
                                <div class="caption">
                                    <span>' . $prod['name'] . '</span>
                                    <h3>' . $prod['value'] . '</h3>
                                </div>
                            </div>
                        </div>
    ';
                    }
                    mysqli_free_result($result);
                    mysqli_close($connection);
                }
 ?>
            </div>
        </div>
    </body>
</html>
