<?php
    $folderName = 'hello';
    $isDir = is_dir($folderName);

    if($isDir){
        echo "{$folderName} 폴더가 존재합니다.";
    } else {
        echo "{$folderName} 폴더가 존재하지 않습니다.";
    }

    echo "<br>";

    $foldername = 'world';
    $isDir = is_dir($foldername);

    if($isDir){
        echo "{$foldername} 폴더가 존재합니다.";
    } else {
        echo "{$foldername} 폴더가 존재하지 않습니다.";
    }
    ?>