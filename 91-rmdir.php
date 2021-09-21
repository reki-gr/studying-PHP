<?php
    $folderName = 'hello';

    rmdir($folderName);

    if(is_dir($folderName)){
        echo 'hello 폴더가 존재합니다.';
    } else {
        echo 'hello 폴더가 존재하지 않습니다.';
    }
    ?>