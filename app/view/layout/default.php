<?php
use Imy\Core\Router;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тестовое задание</title>

    <link rel="stylesheet" href="public/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <?php include tpl(strtolower(Router::$route) . '.' . (!empty($tpl) ? $tpl : 'init')); ?> -->
    <?php include tpl(strtolower(Router::$route) . '.' . (!empty($tpl) ? $tpl : 'form')); ?>
    <?php include tpl(strtolower(Router::$route) . '.' . (!empty($tpl) ? $tpl : 'result')); ?>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/main.js"></script>
</body>
</html>
