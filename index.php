 <?php
    $left_data = require_once('data/left.php');
    $method = @$_GET['method']?$_GET['method']:'help';
    $file = 'data/'.@$method_maps[$method].'.php';
    if (!file_exists($file) && $method != 'help') {
        exit('no data, please check the method_name!');
    }
    if($method != 'help') {
        $method_info = require_once($file);
    }
    
    require_once('layouts/top.php');
    require_once('layouts/crumbs.php');
    require_once('layouts/container.php');
    require_once('layouts/bottom.php');
    exit;