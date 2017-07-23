<!--
<div style="display:inline-flex">
    <div style="border: double; color: bisque; width: 30%; height: 33%;">
<form action="6.php" method="GET"  enctype="multipart/form-data">
<input type="file" name="photo">
<input type="submit" value="отправить">
</form>
</div>
<!--<div style="border: double; color: aquamarine; width: 30%; height: 33%;">
    <form method="get" action="6.php" enctype="multipart/form-data" >
        <input type="file" name="photo2">
        <input type="submit" value="отправить">
    </form>
</div>
<div style="border: double; color: steelblue; width: 30%; height: 33%;">
    <form method="get" action="6.php" enctype="multipart/form-data">
        <input type="file" name="photo3">
        <input type="submit" value="отправить">
    </form>
</div>-->



<form action="6.php" method="GET" enctype="multipart/form-data" >
    <input type="file" name="photo">
    <input type="submit" value="отправить">

</form>
<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 22.07.2017
 * Time: 0:44
 * Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные
 * фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.
 */

$upload=__DIR__.DIRECTORY_SEPARATOR.'gallery';


/*if(!is_dir(__DIR__.DIRECTORY_SEPARATOR.'gallery')) {
mkdir(__DIR__.DIRECTORY_SEPARATOR.'gallery', 0777, true);}
    //$upname = $upload.$_FILES['photo1']['name'];
   // echo $_GET['photo'];
 //$fileget=file_get_contents($_FILES['photo']['tmp_name']);
//file_put_contents(__DIR__.DIRECTORY_SEPARATOR.'gallery'.DIRECTORY_SEPARATOR.$_FILES['photo']['name'], $fileget);
//$file=fopen(__DIR__.DIRECTORY_SEPARATOR.'gallery'.DIRECTORY_SEPARATOR.$_FILES['photo']['name'], 'r+');
//fwrite($file, file_get_contents($_FILES['photo']['tmp_name']));
//fclose($file);
    copy($_FILES['photo']['tmp_name'], __DIR__.DIRECTORY_SEPARATOR.'gallery'.DIRECTORY_SEPARATOR.$_FILES['photo']['name'] );
   // print_r($_FILES['photo']['name']);
print_r($_GET);  */
if(move_uploaded_file($_FILES['photo']['tmp_name'],$upload.$_FILES['photo']['name']))
{
    echo "Yes";
}
else{
    echo "No";
}

?>
