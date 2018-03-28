<?php
include_once'../core/function.php';
$dir='../../tests/';
$skip=['.','..'];
$files=scandir($dir);?>
<!doctype html>
<html>
<head>
    <title>Список тестов</title>
</head>
<body><ul>
    <?php
    foreach($files as $file):
        if(!in_array($file,$skip)):
            $name=basename($file, '.json');?>
            <li>
                <a href="test.php?id=<?php echo $file ?>"><?php echo clean($name);?></a>
            </li>

            <?php
        endif;
    endforeach;?></ul>
</body>
</html>