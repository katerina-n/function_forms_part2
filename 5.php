<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 22.07.2017
 * Time: 0:09
 * Написать функцию, которая выводит список файлов в заданной директории,
 * которые содержат искомое слово.
 *  Директория и искомое слово задаются как параметры функции.
 */

function directoryName($words,$direct){
    $listdir=scandir($direct);
    $nomass=['.', '..'];
    $list=[];
    foreach ($listdir as $value){
        if(in_array($value, $nomass)&&(substr_count($words, $value)==0)){
            continue;
        }
        array_push($list, $value);
    }
    print_r($list);

}
directoryName(1, __DIR__.DIRECTORY_SEPARATOR.'..');

?>