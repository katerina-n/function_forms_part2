<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 21.07.2017
 * Time: 23:28
 * Написать функцию, которая
 * выводит список файлов в заданной директории. Директория задается как параметр функции.
 */

function directory($direct){
    $listdir=scandir($direct);
    $nomass=['.', '..'];
    $list=[];
    foreach ($listdir as $value){
        if(in_array($value, $nomass)){
            continue;
        }
        array_push($list, $value);
    }
    print_r($list);
}

//directory(__DIR__.DIRECTORY_SEPARATOR.'..');
directory(__DIR__);

?>