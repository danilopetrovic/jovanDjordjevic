<?php
//$urlUpdateCheck = 'updateCheck.txt';
$urlUpdateCheck = 'https://danilo86petrovic.000webhostapp.com/jovanDjordjevic/updateCheck.txt';
$fileContentUpdateCheck = file_get_contents($urlUpdateCheck);
//echo 'Update check is set to <b>' . $fileContentUpdateCheck . '</b><br>';
if ($fileContentUpdateCheck == 1) {
//    $url = "update.txt";
    $url = 'https://danilo86petrovic.000webhostapp.com/jovanDjordjevic/update.txt';
    $fileContent = file_get_contents($url);
    if ($fileContent !== false) {
        $localFilePath = 'update.php';
        file_put_contents($localFilePath, $fileContent);
//        echo 'Succeed!<br>';
    } else {
//        echo 'Failed!<br>';
    }
}