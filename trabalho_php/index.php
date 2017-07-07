<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'Produto.php';
        $Obj = new produto(1, 'batata');

        echo "<pre>\n";
        echo "Using get_object_vars:\n";

        $vars = get_object_vars($Obj);
        print_r($vars);

        echo "\n\nUsing array cast:\n";

        $Arr = (array) $Obj;
        print_r($Arr);
        ?>
        ?>
    </body>
</html>
