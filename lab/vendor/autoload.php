<?php
function my_autoload($class){
    $dir = __dir__;
    $path = str_replace("\\","/",$class);
    $path .= '.php';
    $path = $dir ."/../".$path;
    if(file_exists($path)){
        require($path);
    }else{
        echo "not found class file for ".$class;
    }
}

spl_autoload_register('my_autoload');
