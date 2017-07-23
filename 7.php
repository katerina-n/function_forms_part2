<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 23.07.2017
 * Time: 12:06

 */
$str=fopen("comments.txt", 'a');
$allcom=[];
if(!empty($_GET["comment"])) {
    $s = $_GET['comment'];
    //array_push($allcom, $s);
    fwrite($str, $s. PHP_EOL );
}

fclose($str);
echo "<pre>".file_get_contents("comments.txt")."</pre>";



?>

<div style="border: double; color: cornflowerblue; width: 40%; height: 40%;">
<form action="7.php" method="get">
    <input type="text" name="comment">
    <input type="submit" value="send">
</form>
</div>