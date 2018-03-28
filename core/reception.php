<?php
if(isset($_FILES['myFile']['name']) && !empty($_FILES['myFile']['name'])){
    $file_type=pathinfo($_FILES['myFile']['name'],PATHINFO_EXTENSION);
    if($file_type!=='json'){
        echo '  неверный формат';
        exit;
    }


    elseif($_FILES['myFile']['error'] == UPLOAD_ERR_OK ){
        $destination_dir = dirname("../tests/") .'/'.$_FILES['myFile']['name'];
        move_uploaded_file($_FILES['myFile']['tmp_name'], $destination_dir );

        echo 'Файл загружен';
    }else{
        echo 'Ошибка загрузки!';
    }
}
